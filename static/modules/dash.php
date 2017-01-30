<?php

/**
 * Insert new entry to table `archive`
 * 
 * @param int $ar_cat, $ar_subcat, $ar_icon, $ar_comments
 * @param  string $ar_type, $ar_privacy, $ar_subject, $ar_slug, $ar_author, $ar_date, $ar_content 
 */
function new_archive_item($ar_cat, $ar_subcat, $ar_type, $ar_privacy, $ar_subject, $ar_slug, $ar_author, $ar_date, $ar_icon, $ar_content, $ar_comments) {
	$dbh = connect_to_db();

	$query = "INSERT INTO `archive`(`ar_id`, `ar_cat`, `ar_subcat`, `ar_type`, `ar_privacy`, `ar_subject`, `ar_slug`, `ar_author`, `ar_date`, `ar_icon`, `ar_content`, `ar_comments`) VALUES (NULL, :ar_cat, :ar_subcat, :ar_type, :ar_privacy, :ar_subject, :ar_slug, :ar_author, :ar_date, :ar_icon, :ar_content, :ar_comments)";

	$sth = $dbh->prepare($query);
	$sth->bindParam(':ar_cat', $ar_cat, PDO::PARAM_INT);
	$sth->bindParam(':ar_subcat', $ar_subcat, PDO::PARAM_INT);
	$sth->bindParam(':ar_type', $ar_type, PDO::PARAM_STR);
	$sth->bindParam(':ar_privacy', $ar_privacy, PDO::PARAM_STR);
	$sth->bindParam(':ar_subject', $ar_subject, PDO::PARAM_STR);
	$sth->bindParam(':ar_slug', $ar_slug, PDO::PARAM_STR);
	$sth->bindParam(':ar_author', $ar_author, PDO::PARAM_STR);
	$sth->bindParam(':ar_date', $ar_date, PDO::PARAM_STR);
	$sth->bindParam(':ar_icon', $ar_icon, PDO::PARAM_INT);
	$sth->bindParam(':ar_content', $ar_content, PDO::PARAM_STR);
	$sth->bindParam(':ar_comments', $ar_comments, PDO::PARAM_INT);
	$sth->execute();
}

/**
 * Update existing entry in table `archive`
 * 
 * @param int $ar_cat, $ar_subcat, $ar_icon, $ar_comments
 * @param  string $ar_type, $ar_privacy, $ar_subject, $ar_slug, $ar_author, $ar_date, $ar_content, $ar_old_subject
 */
function update_archive_item($ar_cat, $ar_subcat, $ar_type, $ar_privacy, $ar_subject, $ar_slug, $ar_author, $ar_date, $ar_icon, $ar_content, $ar_comments) {
	$dbh = connect_to_db();

	$query = "UPDATE `archive` SET `ar_cat` = :ar_cat, `ar_subcat` = :ar_subcat, `ar_type` = :ar_type, `ar_privacy` = :ar_privacy, `ar_subject` = :ar_subject, `ar_slug` = :ar_slug, `ar_author` = :ar_author, `ar_date` = :ar_date, `ar_icon` = :ar_icon, `ar_content` = :ar_content, `ar_comments` = :ar_comments WHERE `ar_subject` LIKE :ar_old_subject";

	$sth = $dbh->prepare($query);
	$sth->bindParam(':ar_cat', $ar_cat, PDO::PARAM_INT);
	$sth->bindParam(':ar_subcat', $ar_subcat, PDO::PARAM_INT);
	$sth->bindParam(':ar_type', $ar_type, PDO::PARAM_STR);
	$sth->bindParam(':ar_privacy', $ar_privacy, PDO::PARAM_STR);
	$sth->bindParam(':ar_subject', $ar_subject, PDO::PARAM_STR);
	$sth->bindParam(':ar_slug', $ar_slug, PDO::PARAM_STR);
	$sth->bindParam(':ar_author', $ar_author, PDO::PARAM_STR);
	$sth->bindParam(':ar_date', $ar_date, PDO::PARAM_STR);
	$sth->bindParam(':ar_icon', $ar_icon, PDO::PARAM_INT);
	$sth->bindParam(':ar_content', $ar_content, PDO::PARAM_STR);
	$sth->bindParam(':ar_comments', $ar_comments, PDO::PARAM_INT);
	$sth->bindParam(':ar_old_subject', $ar_old_subject, PDO::PARAM_STR);
	$sth->execute();
}

/** 
 * Insert new entry to table `showcase`
 *
 * @param  int $sh_cat, $sh_subcat, $sh_download
 * @param  str $sh_thumb_src, $sh_title, $sh_slug, $sh_date, $sh_describe, $sh_preview, $sh_file_src, $sh_pledge, $sh_ext
 */
function new_showcase_item($sh_cat, $sh_subcat, $sh_thumb_src, $sh_title, $sh_slug, $sh_date, $sh_describe, $sh_preview, $sh_file_src, $sh_download, $sh_pledge, $sh_ext) {
	$dbh = connect_to_db();

	$query = "INSERT INTO `showcase`(`sh_id`, `sh_cat`, `sh_subcat`, `sh_thumb_src`, `sh_title`, `sh_slug`, `sh_date`, `sh_describe`, `sh_preview`, `sh_file_src`, `sh_download`, `sh_pledge`, `sh_ext`) VALUES (NULL, :sh_cat, :sh_subcat, :sh_thumb_src, :sh_title, :sh_slug, :sh_date, :sh_describe, :sh_preview, :sh_file_src, :sh_download, :sh_pledge, :sh_ext)";

	$sth = $dbh->prepare($query);
	$sth->bindParam(':sh_cat', $sh_cat, PDO::PARAM_INT);
	$sth->bindParam(':sh_subcat', $sh_subcat, PDO::PARAM_INT);
	$sth->bindParam(':sh_thumb_src', $sh_thumb_src, PDO::PARAM_STR);
	$sth->bindParam(':sh_title', $sh_title, PDO::PARAM_STR);
	$sth->bindParam(':sh_slug', $sh_slug, PDO::PARAM_STR);
	$sth->bindParam(':sh_date', $sh_date, PDO::PARAM_STR);
	$sth->bindParam(':sh_describe', $sh_describe, PDO::PARAM_STR);
	$sth->bindParam(':sh_preview', $sh_preview, PDO::PARAM_STR);
	$sth->bindParam(':sh_file_src', $sh_file_src, PDO::PARAM_STR);
	$sth->bindParam(':sh_download', $sh_download, PDO::PARAM_INT);
	$sth->bindParam(':sh_pledge', $sh_pledge, PDO::PARAM_STR);
	$sth->bindParam(':sh_ext', $sh_ext, PDO::PARAM_STR);
	$sth->execute();

}

/**
 * Retrieves categories from database
 *
 * @return $sth string handle
 */
function list_categories() {
	$dbh = connect_to_db();

	$query = "SELECT * FROM `categories` ORDER BY `cat_id` ASC";
	$sth = $dbh->query($query);
	$sth->setFetchMode(PDO::FETCH_ASSOC);

	return $sth;
}

/**
 * Retrieves subcategories from database
 *
 * @return $sth string handle
 */
function list_subcategories() {
	$dbh = connect_to_db();

	$query = "SELECT `s`.*, `c`.* FROM `subcategories` AS `s`, `categories` AS `c` ORDER BY `s`.`subcat_id` ASC";
	$sth = $dbh->query($query);
	$sth->setFetchMode(PDO::FETCH_ASSOC);

	return $sth;
}

/**
 * Retrieve existing entry from table `archive`
 * 
 * @param  str $subject
 * @return $sth string handle
 */
function load_archive_item($subject) {
	$dbh = connect_to_db();

	$query = "SELECT * FROM `archive` WHERE `ar_subject` LIKE :subject";

	$sth = $dbh->prepare($query);
	$sth->bindParam(':subject', $subject, PDO::PARAM_STR);
	$sth->execute();
	$sth->setFetchMode(PDO::FETCH_ASSOC);

	return $sth;
}