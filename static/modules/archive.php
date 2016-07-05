<?php

/**
 * Check if article exists. Else, return 404 error.
 */
function check_if_article_exists() {
	$sth = archive_init();

	if ($sth == false) {
		header('Location:'.af_affelius_path.'oops/404');
	}
}

/**
 * Determine archive display mode and initialize database connection
 *
 * @return string handle $sth
 */
function archive_init() {
	list($get_cat, $get_subcat, $get_slug) = get_from_url();

	$dbh = connect_to_db();

	if ( !empty($get_cat) && !empty($get_subcat) && !empty($get_slug) ) { // article
	
		$query = "SELECT `c`.`cat_name`, `c`.`cat_slug`, `s`.`subcat_name`, `s`.`subcat_slug`, `ar`.* FROM `categories` AS `c`, `subcategories` AS `s`, `archive` AS `ar` WHERE `ar`.`ar_subcat` = `s`.`subcat_id` AND `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `s`.`subcat_slug` = :get_subcat AND `ar`.`ar_slug` = :get_slug";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
		$sth->bindParam(':get_subcat', $get_subcat, PDO::PARAM_STR);
		$sth->bindParam(':get_slug', $get_slug, PDO::PARAM_STR);

	} elseif ( !empty($get_cat) && !empty($get_subcat) ) { // subcategory

		$default_page_cut = 5;

		if (!isset($_GET['page'])) {
			$page = 1;
		} else {
			$page = $_GET['page'];
		}

		$start = (($page * $default_page_cut) - $default_page_cut);

		$query = "SELECT `c`.`cat_name`, `c`.`cat_slug`, `s`.`subcat_name`, `s`.`subcat_slug`, `ar`.* FROM `categories` AS `c`, `subcategories` AS `s`, `archive` AS `ar` WHERE `ar`.`ar_subcat` = `s`.`subcat_id` AND `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `s`.`subcat_slug` = :get_subcat ORDER BY `ar`.`ar_date` DESC LIMIT $start, $default_page_cut";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
		$sth->bindParam(':get_subcat', $get_subcat, PDO::PARAM_STR);

	} elseif ( !empty($get_cat) && !empty($get_slug) ) { // page

		$query = "SELECT `c`.`cat_name`, `c`.`cat_slug`, `ar`.* FROM `categories` AS `c`, `archive` AS `ar` WHERE `ar`.`ar_cat` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `ar`.`ar_slug` = :get_slug";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
		$sth->bindParam(':get_slug', $get_slug, PDO::PARAM_STR);

	} elseif (!empty($get_cat)) { // category

		$query = "SELECT `c`.`cat_name`, `c`.`cat_slug`, `ar`.* FROM `categories` AS `c`, `archive` AS `ar` WHERE `ar`.`ar_cat` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `ar`.`ar_slug` = ''";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);

	}

	$sth->execute();
	$sth->setFetchMode(PDO::FETCH_ASSOC);
	
	return $sth;
}

/**
 * Retrieve article variables
 *
 * @param array $row database row
 * @return array $all
 */
function archive($row) {
	list($get_cat, $get_subcat, $get_slug) = get_from_url();

	$id = $row['ar_id'];
	$cat_name = $row['cat_name'];
	$cat_slug = $row['cat_slug'];
	$subcat_name = $row['subcat_name'];
	$subcat_slug = $row['subcat_slug'];
	$type = $row['ar_type'];
	$subject = $row['ar_subject'];
	$slug = $row['ar_slug'];
	$author = $row['ar_author'];
	$date = datetime($row['ar_date']);
	$icon = $row['ar_icon'];	
	$comments = $row['ar_comments'];

	if (!empty($get_subcat)) { // article
		$link = af_affelius_path . $row['cat_slug'] . '/' . $row['subcat_slug'] . '/' . $row['ar_slug'];
		$disqus = 'http://affeli.us/' . $row['cat_slug'] . '/' . $row['subcat_slug'] . '/' . $row['ar_slug'];
	} elseif (empty($get_subcat)) { // page
		$link = af_affelius_path . $row['cat_slug'] . '/' . $row['ar_slug'];
		$disqus = 'http://affeli.us/' . $row['cat_slug'] . '/' . $row['ar_slug'];
	}

	if ((!empty($get_subcat)) && (empty($get_slug))) { // category
		$content = substr($row['ar_content'], 0, strpos($row['ar_content'], '</p>'));
		$content .= "\n<p><a class=\"read-more\" href=\"".$link."\">Read more... <span class=\"fa fa-chevron-right\"></span></a></p>";
	}
	else $content = $row['ar_content'];
	
	$content = autotab($content);

	$all = array($id, $cat_name, $cat_slug, $subcat_name, $subcat_slug, $type, $subject, $slug, $author, $date, $icon, $content, $comments, $link, $disqus);

	return $all;
}

/**
 * Initialize database connection and retrieve latest news article
 *
 * @return string handle $sth
 */
function get_latest_news() {
	$dbh = connect_to_db();

	$query = "SELECT `c`.`cat_name`, `c`.`cat_slug`, `ar`.* FROM `categories` AS `c`, `archive` AS `ar` WHERE `ar`.`ar_cat` = `c`.`cat_id` AND `c`.`cat_slug` = 'news' ORDER BY `ar`.`ar_date` DESC LIMIT 0,1";
	$sth = $dbh->query($query);

	return $sth;
}

/**
 * Initialize database connection for ten (10) latest writings
 *
 * @return string handle $sth
 */
function get_latest_writings() {
	$dbh = connect_to_db();

	$query = "SELECT `c`.`cat_name`, `c`.`cat_slug`, `s`.`subcat_name`, `s`.`subcat_slug`, `ar`.* FROM `categories` AS `c`, `subcategories` AS `s`, `archive` AS `ar` WHERE `ar`.`ar_cat` = 5 AND `ar`.`ar_subcat` = `s`.`subcat_id` AND `s`.`cat_id` = `c`.`cat_id` ORDER BY `ar_date` DESC LIMIT 0,5";
	$sth = $dbh->query($query);
	$sth->setFetchMode(PDO::FETCH_ASSOC);

	return $sth;
}

?>