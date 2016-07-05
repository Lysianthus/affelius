<?php

/**
 * Initialize database connection and retrieve live title
 *
 * @return string $title
 */
function get_live_title() {
	list($get_cat, $get_subcat, $get_slug) = get_from_url();
	
	$dbh = connect_to_db();
	
	$query = "SELECT `c`.`cat_name`, `s`.`subcat_name`, `sh`.`sh_title` FROM `categories` AS `c`, `subcategories` AS `s`, `showcase` AS `sh` WHERE `sh`.`sh_subcat` = `s`.`subcat_id` AND `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `s`.`subcat_slug` = :get_subcat AND `sh`.`sh_slug` = :get_slug";
	$sth = $dbh->prepare($query);
	$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
	$sth->bindParam(':get_subcat', $get_subcat, PDO::PARAM_STR);
	$sth->bindParam(':get_slug', $get_slug, PDO::PARAM_STR);
	$sth->execute();
	$sth->setFetchMode(PDO::FETCH_ASSOC);
	$records = $sth->fetch();

	$title_cat = $records['cat_name'];
	$title_subcat = $records['subcat_name'];
	$title_name = $records['sh_title'];
	
	$title = "$title_name | Affelius &rsaquo; $title_cat &rsaquo; $title_subcat";
	
	$title .= ' '."&mdash; Lysianthus's Creative Repository";
	
	return $title;
}

/**
 * Initialize database connection and retrieve download information:
 * Link, permissions, extension
 *
 * @return array $all
 */
function get_download() {
	list($get_cat, $get_subcat, $get_slug) = get_from_url();

	$dbh = connect_to_db();

	$query = "SELECT `sh`.*, `c`.`cat_slug`, `s`.`subcat_slug` FROM `categories` AS `c`, `subcategories` AS `s`, `showcase` AS `sh` WHERE `c`.`cat_slug` = :get_cat AND `s`.`subcat_slug` = :get_subcat AND `sh`.`sh_slug` = :get_slug";
	$sth = $dbh->prepare($query);
	$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
	$sth->bindParam(':get_subcat', $get_subcat, PDO::PARAM_STR);
	$sth->bindParam(':get_slug', $get_slug, PDO::PARAM_STR);
	$sth->execute();
	$sth->setFetchMode(PDO::FETCH_ASSOC);
	$records = $sth->fetch();

	$cat = $records['cat_slug'];
	$subcat = $records['subcat_slug'];
	$slug = $records['sh_slug'];
	$perm = $records['sh_download'];
	$ext = $records['sh_ext'];

	if ($records['sh_file_src'] == '')
		$file = af_affelius_path.af_download_path.$cat.'/'.$subcat.'/'.$slug.$ext;
	else
		$file = af_affelius_path.af_download_path.$cat.'/'.$subcat.'/'.$records['sh_file_src'].$ext;

	return $all = array($file, $perm, $ext);
}

/**
 * Initialize database connection and retrieve item description
 *
 * @return string $describe
 */
function get_showcase_item_description() {
	list($get_cat, $get_subcat, $get_slug) = get_from_url();

	$dbh = connect_to_db();

	$query = "SELECT `sh`.`sh_describe` FROM `showcase` AS `sh`, `categories` AS `cat`, `subcategories` AS `subcat` WHERE `sh_slug` = :get_slug AND `subcat`.`subcat_slug` = :get_subcat AND `cat`.`cat_slug` = :get_cat AND `sh`.`sh_subcat` = `subcat`.`subcat_id` AND `subcat`.`cat_id` = `cat`.`cat_id`";
	$sth = $dbh->prepare($query);
	$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
	$sth->bindParam(':get_subcat', $get_subcat, PDO::PARAM_STR);
	$sth->bindParam(':get_slug', $get_slug, PDO::PARAM_STR);
	$sth->execute();
	$sth->setFetchMode(PDO::FETCH_ASSOC);
	$row = $sth->fetch();

	$describe = $row['sh_describe'];

	return $describe;
}

?>