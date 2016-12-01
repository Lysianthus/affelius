<?php

/**
 * Define all constants here.
 */

// Database
define('af_username', '***');
define('af_password', '***');
define('af_server', '***');
define('af_database_name', '***');

// Paths
define('af_static_path', '/home/affeli/public_html/static/');
define('af_includes_path', af_static_path . 'includes/');
define('af_modules_path', af_static_path . 'modules/');
define('af_classes_path', af_static_path . 'classes/');
define('af_content_path', 'content/');
define('af_thumbnails_path', af_content_path . 'auxiliaries/thumbnails/');
define('af_downloads_path', '/+download/');

define('af_affelius_path', 'https://affeli.us/');

/**
 * Require all modules here.
 */

require_once(af_modules_path . 'database.php');
require_once(af_modules_path . 'global.php');
require_once(af_modules_path . 'archive.php');
require_once(af_modules_path . 'showcase.php');

?>