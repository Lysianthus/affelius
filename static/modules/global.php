<?php

/**
 * "Global Functions" are functions that can be used in any module.
 */


/**
 * When including PHP files, an extra line is echoed at the end,
 * mainly to keep the resulting code clean, because PHP eats up the
 * last line.
 */

/**
 * Include header.php
 */
function inc_header() {
	include 'static/includes/header.php';
	echo "\n";
}

/**
 * Include footer.php
 */
function inc_footer() {
	include 'static/includes/footer.php';
	echo "\n";
}

/**
 * GET category, subcategory, and item slug from URL
 *
 * @return array $gets
 */
function get_from_url() {		
	$get_cat = $_GET['cat'];
	$get_subcat = $_GET['subcat'];
	$get_slug = $_GET['slug'];

	$gets = array($get_cat, $get_subcat, $get_slug);

	return $gets;
}

/**
 * Get title for page
 *
 * @return string $title
 */
function get_title() {		
	list($get_cat, $get_subcat, $get_slug) = get_from_url();
	
	$dbh = connect_to_db();

	if ( !empty($get_cat) && !empty($get_subcat) && !empty($get_slug) ) { // item page
		$query = "SELECT `c`.`cat_name`, `s`.`subcat_name`, `a`.`ar_subject` FROM `categories` AS `c`, `subcategories` AS `s`, `archive` AS `a` WHERE `a`.`ar_subcat` = `s`.`subcat_id` AND `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `s`.`subcat_slug` = :get_subcat AND `a`.`ar_slug` = :get_slug";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
		$sth->bindParam(':get_subcat', $get_subcat, PDO::PARAM_STR);
		$sth->bindParam(':get_slug', $get_slug, PDO::PARAM_STR);
		$sth->execute();
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$row = $sth->fetch();

		$title_cat = $row['cat_name'];
		$title_subcat = $row['subcat_name'];
		if ($get_cat != 'graphics')
			$title_slug = $row['ar_subject'];
		else
			$title_slug = $row['sh_title'];

		$title = "$title_slug | Affelius &rsaquo; $title_cat &rsaquo; $title_subcat";
	} elseif ( !empty($get_cat) && !empty($get_subcat) && empty($get_slug) ) { // subcategory page
		$query = "SELECT `c`.`cat_name`, `s`.`subcat_name` FROM `categories` AS `c`, `subcategories` AS `s` WHERE `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `s`.`subcat_slug` = :get_subcat";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
		$sth->bindParam(':get_subcat', $get_subcat, PDO::PARAM_STR);
		$sth->execute();
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$row = $sth->fetch();

		$title_cat = $row['cat_name'];
		$title_subcat = $row['subcat_name'];

		$title = "Affelius &rsaquo; $title_cat &rsaquo; $title_subcat";
	} elseif ( !empty($get_cat) && empty($get_subcat) && !empty($get_slug) ) { // basic page
		$query = "SELECT `c`.`cat_name`, `a`.`ar_subject` FROM `categories` AS `c`, `archive` AS `a` WHERE `a`.`ar_cat` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `a`.`ar_slug` = :get_slug";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
		$sth->bindParam(':get_slug', $get_slug, PDO::PARAM_STR);
		$sth->execute();
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$row = $sth->fetch();

		$title_cat = $row['cat_name'];
		$title_slug = $row['ar_subject'];

		$title = "$title_slug | Affelius &rsaquo; $title_cat";
	} elseif ( !empty($get_cat) && empty($get_subcat) && empty($get_slug) ) { // category page
		$query = "SELECT `cat_name` FROM `categories` WHERE `cat_slug` = :get_cat";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
		$sth->execute();
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$row = $sth->fetch();

		$title_cat = $row['cat_name'];

		$title = "Affelius &rsaquo; $title_cat";
	} else {
		$title = "Affelius";
	}
	
	$title .= ' '."&mdash; Lysianthus's Creative Repository";
	
	return $title;
}

/**
 * Retrieve page heading
 *
 * @return string $heading
 */
function get_heading() {
	list($get_cat, $get_subcat, $get_slug) = get_from_url();

	$dbh = connect_to_db();

	if ( !empty($get_cat) && !empty($get_subcat) ) { // subcategory page
		$query = "SELECT `c`.`cat_id`, `c`.`cat_name`, `s`.`subcat_name` FROM `categories` AS `c`, `subcategories` AS `s` WHERE `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `s`.`subcat_slug` = :get_subcat";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
		$sth->bindParam(':get_subcat', $get_subcat, PDO::PARAM_STR);
	} elseif (!empty($get_cat)) { // category page
		$query = "SELECT `cat_id`, `cat_name` FROM `categories` WHERE `cat_slug` = :get_cat";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
	}

	$sth->execute();
	$sth->setFetchMode(PDO::FETCH_ASSOC);
	$row = $sth->fetch();

	$heading_cat = $row['cat_name'];
	$heading_cat_id = $row['cat_id'];

	if (!empty($get_subcat)) $heading_subcat = $row['subcat_name'];

	if ( !empty($get_cat) && !empty($get_subcat) ) {
		$heading = "$heading_cat <span class=\"fa fa-angle-right\"></span> $heading_subcat";
	} elseif (empty($get_subcat)) {
		if ( ($heading_cat_id > 5) && ($heading_cat_id < 11) ) $heading = "$heading_cat <span class=\"fa fa-angle-right\"></span> Subcategories";
		else $heading = "$heading_cat";
	}

	return $heading;
}

/**
 * Initialize database connection and retrieve random quote
 *
 * @return string $quote
 */
function get_speaker_quote() {
	$dbh = connect_to_db();

	$query = "SELECT * FROM `quotes`";
	$sth = $dbh->query($query);
	$total = $sth->rowCount();

	$id = rand(1, $total);

	$query = "SELECT * FROM `quotes` WHERE `q_id` = :id";
	$sth = $dbh->prepare($query);
	$sth->bindParam(':id', $id, PDO::PARAM_INT);
	$sth->execute();
	$sth->setFetchMode(PDO::FETCH_ASSOC);
	$row = $sth->fetch();

	$quote = $row['q_quote'];

	return preg_replace("/'/", "&rsquo;", $quote);
}

/**
 * Determine whether current page is a subcategory page
 *
 * @return bool
 */
function is_subcategory_page() {
	list($get_cat, $get_subcat, $get_slug) = get_from_url();

	/* Return TRUE if it's a subcategory page */
	if ( !empty($get_cat) && !empty($get_subcat) && empty($get_slug) ) {
		return true;
	} else {
		return false;
	}

}

/**
 * Calculate page numbers
 *
 * @return array $links
 */
function get_page_links() {
	list($get_cat, $get_subcat, $get_slug) = get_from_url();

	$prelim = af_affelius_path.$get_cat.'/'.$get_subcat.'/';

	if (!isset($_GET['page'])) {
		$page = 1;
	} else {
		$page = $_GET['page'];
	}

	$from = $prelim.($page - 1);
	if ($from == $prelim.'1') $from = $prelim;
	$to = $prelim.($page + 1);
	$links = array($from, $to, $page);

	return $links;
}

/**
 * Determine whether to display "Next" page link or not
 *
 * @return bool
 */
function display_next() {
	list($get_cat, $get_subcat, $get_slug) = get_from_url();

	$dbh = connect_to_db();

	switch ($get_cat) {
		case 'writings':
			$query = "SELECT * FROM `categories` AS `c`, `subcategories` AS `s`, `archive` AS `a` WHERE `a`.`ar_subcat` = `s`.`subcat_id` AND `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `s`.`subcat_slug` = :get_subcat ORDER BY `a`.`ar_date` DESC";
			break;
		
		default:
			$query = "SELECT * FROM `categories` AS `c`, `subcategories` AS `s`, `showcase` AS `sh` WHERE `sh`.`sh_subcat` = `s`.`subcat_id` AND `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `s`.`subcat_slug` = :get_subcat ORDER BY `sh`.`sh_date` DESC";
			break;
	}
	
	
	$sth = $dbh->prepare($query);
	$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
	$sth->bindParam(':get_subcat', $get_subcat, PDO::PARAM_STR);
	$sth->execute();
	$total = $sth->rowCount();

	$page = $_GET['page'];
	if (!isset($page)) $page = 1;
	$default_page_cut = 5;

	$limit = ceil($total / $default_page_cut);

	return ($page == $limit) ? false : true;
}

/**
 * Prepend set number of tabs to selected elements
 *
 * @return string $tabbed
 */
function autotab($content) {
	$element = '(p|h3|div|section|table|thead|tbody|tfoot|tr|th|td|ul|ol|li|dl|dt|dd|aside|blockquote|input|output|textarea|select|hr|br|details|summary)';
	$tabs = "\t\t\t\t\t\t";
	$lt = preg_replace("/(<".$element."*>)/", "$tabs$1", $content);
	$gt = preg_replace("/(\n<\/".$element."*>)/", "$tabs$1", $lt);
	$tabbed = $gt;
	$tabbed .= "\n";
	
	return $tabbed;
}

/**
 * Prettify date and time
 *
 * @return $new_datetime
 */
function datetime($datetime) {
	$converted_date = strtotime($datetime);
	$new_datetime = date('j F Y', $converted_date);
	
	return $new_datetime;
}

?>