<?php

session_start();

if ($_SESSION['dash'] == null || ($_SESSION != true)) {
	header('Location: /dash/login');
	exit;
}

include '../static/init.php';
include '../static/modules/dash.php';

if (isset($_POST['dash'])) {
	$sh_cat = $_POST['category'];
	$sh_subcat = $_POST['subcategory'];
	$sh_thumb_src = $_POST['thumb_src'];
	$sh_title = $_POST['title'];
	$sh_slug = $_POST['slug'];
	$sh_date = $_POST['date'];
	$sh_describe = $_POST['describe'];
	$sh_preview = $_POST['preview'];
	$sh_file_src = $_POST['file_src'];
	$sh_download = $_POST['download'];
	$sh_pledge = $_POST['pledge'];
	$sh_ext = $_POST['ext'];

	update_showcase_item($sh_cat, $sh_subcat, $sh_thumb_src, $sh_title, $sh_slug, $sh_date, $sh_describe, $sh_preview, $sh_file_src, $sh_download, $sh_pledge, $sh_ext);
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>???</title>

	<link rel="shortcut icon" href="/assets/images/favicon.ico" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

	<style>
		body { padding: 50px 0; }
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>
						!
					</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form role="form" action="#" method="post">
					<div class="form-group">						 
						<label for="category">
							Category
						</label>
						<input name="category" type="text" class="form-control" id="category" />
					</div>
					<div class="form-group">						 
						<label for="subcategory">
							Subcategory
						</label>
						<input name="subcategory" type="text" class="form-control" id="subcategory" />
					</div>
					<div class="form-group">						 
						<label for="thumb_src">
							Thumb Source
						</label>
						<input name="thumb_src" type="text" class="form-control" id="thumb_src" />
					</div>
					<div class="form-group">						 
						<label for="title">
							Title
						</label>
						<input name="title" type="text" class="form-control" id="title" />
					</div>
					<div class="form-group">						 
						<label for="slug">
							Slug
						</label>
						<input name="slug" type="text" class="form-control" id="slug" />
					</div>
					<div class="form-group">						 
						<label for="date">
							Date
						</label>
						<input name="date" type="text" class="form-control" id="date" />
					</div>
					<div class="form-group">						 
						<label for="describe">
							Description
						</label>
						<textarea name="describe" class="form-control" id="describe" rows="10"></textarea>
					</div>
					<div class="form-group">						 
						<label for="preview">
							Preview
						</label>
						<input name="preview" type="text" class="form-control" id="preview" />
					</div>
					<div class="form-group">						 
						<label for="file_src">
							File Source
						</label>
						<input name="file_src" type="text" class="form-control" id="file_src" />
					</div>
					<div class="form-group">						 
						<label for="download">
							Download
						</label>
						<input name="download" type="text" class="form-control" id="download" />
					</div>
					<div class="form-group">						 
						<label for="pledge">
							Pledge
						</label>
						<input name="pledge" type="text" class="form-control" id="pledge" />
					</div>
					<div class="form-group">						 
						<label for="ext">
							Extension
						</label>
						<input name="ext" type="text" class="form-control" id="ext" />
					</div>
					<button name="dash" type="submit" class="btn btn-default">
						Dash!
					</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://affeli.us/assets/js/affelius-209a68d844.js"></script>
</body>

</html>