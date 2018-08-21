<?php

/**
 * Check if showcase content exists
 */
function check_if_showcase_content_exists() {
	$sth = showcase_content_init();
	$row = $sth->fetch();

	if ($row == false) {
		header('Location:' . af_affelius_path . 'oops/404');
		exit;
	}
}

/**
 * Initialize database connection for showcase subcategory
 *
 * @return $sth string handle
 */
function showcase_subcats_init() {
	list($get_cat, $get_subcat) = get_from_url();

	$dbh = connect_to_db();

	$query = "SELECT `c`.*, `s`.* FROM `categories` AS `c`, `subcategories` AS `s` WHERE `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat ORDER BY `s`.`subcat_name` ASC";

	$sth = $dbh->prepare($query);
	$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
	$sth->execute();
	$sth->setFetchMode(PDO::FETCH_ASSOC);

	return $sth;
}

/**
 * Retrieve showcase subcategory variables
 *
 * @param array $row database row
 * @return array $all
 */
function showcase_subcats($row) {
	$id = $row['subcat_id'];
	$cat_id = $row['cat_id'];
	$cat_name = $row['cat_name'];
	$cat_slug = $row['cat_slug'];
	$cat_link = af_affelius_path . $row['cat_slug'] . '/';
	$subcat_id = $row['subcat_id'];
	$subcat_name = $row['subcat_name'];
	$subcat_slug = $row['subcat_slug'];
	$subcat_link = af_affelius_path . $row['cat_slug'] . '/' . $row['subcat_slug'] . '/';
	$thumb = af_affelius_path . af_thumbnails_path . $row['subcat_thumb_src'];
	$info = $row['subcat_info'];

	$all = array($id, $cat_id, $cat_name, $cat_slug, $cat_link, $subcat_id, $subcat_name, $subcat_slug, $subcat_link, $thumb, $info);

	return $all;
}

/**
 * Initialize database connection for showcase item
 *
 * @return $sth string handle
 */
function showcase_content_init() {
	list($get_cat, $get_subcat, $get_slug) = get_from_url();

	$dbh = connect_to_db();

	if (empty($get_slug)) {

		$query = "SELECT `c`.`cat_name`, `c`.`cat_slug`, `s`.`subcat_name`, `s`.`subcat_slug`, `sh`.* FROM `categories` AS `c`, `subcategories` AS `s`, `showcase` AS `sh` WHERE `sh`.`sh_subcat` = `s`.`subcat_id` AND `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `s`.`subcat_slug` = :get_subcat ORDER BY `sh`.`sh_date` DESC";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
		$sth->bindParam(':get_subcat', $get_subcat, PDO::PARAM_STR);

	} elseif (!empty($get_slug)) {

		$query = "SELECT `c`.`cat_name`, `c`.`cat_slug`, `s`.`subcat_name`, `s`.`subcat_slug`, `sh`.* FROM `categories` AS `c`, `subcategories` AS `s`, `showcase` AS `sh` WHERE `sh`.`sh_subcat` = `s`.`subcat_id` AND `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_slug` = :get_cat AND `s`.`subcat_slug` = :get_subcat AND `sh`.`sh_slug` = :get_slug ORDER BY `sh`.`sh_date` DESC";

		$sth = $dbh->prepare($query);
		$sth->bindParam(':get_cat', $get_cat, PDO::PARAM_STR);
		$sth->bindParam(':get_subcat', $get_subcat, PDO::PARAM_STR);
		$sth->bindParam(':get_slug', $get_slug, PDO::PARAM_STR);

	}

	$sth->execute();
	$sth->setFetchMode(PDO::FETCH_ASSOC);

	return $sth;
}

/**
 * Retrieve showcase item variables
 *
 * @param array $row database row
 * @return array $all
 */
function showcase_content($row) {
	$id = $row['sh_id'];
	$cat_name = $row['cat_name'];
	$cat_slug = $row['cat_slug'];
	$cat_link = af_affelius_path . $cat_slug . '/';
	$subcat_name = $row['subcat_name'];
	$subcat_slug = $row['subcat_slug'];
	$subcat_link = af_affelius_path . $cat_slug . '/' . $subcat_slug . '/';
	$thumb = af_affelius_path . af_thumbnails_path . $row['sh_thumb_src'];
	$title = $row['sh_title'];
	$slug = $row['sh_slug'];
	$date = datetime($row['sh_date']);
	$describe = $row['sh_describe'];
	$preview = $row['sh_preview'];
	$download = $row['sh_download'];
	$pledge = $row['sh_pledge'];
	$ext = $row['sh_ext'];
	//$link = af_affelius_path . $row['cat_slug'] . '/' . $row['subcat_slug'] . '/' . $row['sh_slug'];
	$link = $preview;

	$all = array($id, $cat_name, $cat_slug, $cat_link, $subcat_name, $subcat_slug, $subcat_link, $thumb, $title, $slug, $date, $describe, $preview, $download, $pledge, $ext, $link);

	return $all;
}

/**
 * Initialize database connection for three (3) latest showcase items
 *
 * @return $sth string handle
 */
function get_latest_from_showcase() {
	list($get_cat, $get_subcat) = get_from_url();

	$dbh = connect_to_db();

	$query = "SELECT `c`.`cat_name`, `c`.`cat_slug`, `s`.`subcat_name`, `s`.`subcat_slug`, `sh`.* FROM `categories` AS `c`, `subcategories` AS `s`, `showcase` AS `sh` WHERE `sh`.`sh_subcat` = `s`.`subcat_id` AND `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_id` != 10 ORDER BY `sh`.`sh_date` DESC LIMIT 0,3";
	$sth = $dbh->query($query);
	$sth->setFetchMode(PDO::FETCH_ASSOC);

	return $sth;
}

/**
 * Initialize database connection for three (3) latest labs items
 *
 * @return $sth string handle
 */
function get_latest_from_labs() {
	list($get_cat, $get_subcat) = get_from_url();

	$dbh = connect_to_db();

	$query = "SELECT `c`.`cat_name`, `c`.`cat_slug`, `s`.`subcat_name`, `s`.`subcat_slug`, `sh`.* FROM `categories` AS `c`, `subcategories` AS `s`, `showcase` AS `sh` WHERE `sh`.`sh_subcat` = `s`.`subcat_id` AND `s`.`cat_id` = `c`.`cat_id` AND `c`.`cat_id` = 10 ORDER BY `sh`.`sh_date` DESC LIMIT 0,3";
	$sth = $dbh->query($query);
	$sth->setFetchMode(PDO::FETCH_ASSOC);

	return $sth;
}

/**
 * Initialize database connection and retrieve subcategory description
 *
 * @return string $info
 */
function get_subcat_info() {
	list($get_cat, $get_subcat) = get_from_url();

	$dbh = connect_to_db();

	$query = "SELECT * FROM `subcategories` WHERE `subcat_slug` LIKE :get_subcat";

	$sth = $dbh->prepare($query);
	$sth->bindParam(':get_subcat', $get_subcat, PDO::PARAM_STR);
	$sth->execute();
	$sth->setFetchMode(PDO::FETCH_ASSOC);

	$row = $sth->fetch();
	$info = $row['subcat_info'];

	return $info;
}

?>