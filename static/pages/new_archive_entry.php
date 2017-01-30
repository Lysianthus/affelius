<?php

session_start();

if ($_SESSION['dash'] == null || ($_SESSION != true)) {
	header('Location: /dash/login');
	exit;
}

include '../static/init.php';
include '../static/modules/dash.php';

if (isset($_POST['dash'])) {
	$ar_cat = $_POST['category'];
	$ar_subcat = $_POST['subcategory'];
	$ar_type = $_POST['type'];
	$ar_privacy = $_POST['privacy'];
	$ar_subject = $_POST['subject'];
	$ar_slug = $_POST['slug'];
	$ar_author = $_POST['author'];
	$ar_date = $_POST['date'];
	$ar_icon = $_POST['icon'];
	$ar_content = $_POST['content'];
	$ar_comments = $_POST['comments'];

	new_archive_item($ar_cat, $ar_subcat, $ar_type, $ar_privacy, $ar_subject, $ar_slug, $ar_author, $ar_date, $ar_icon, $ar_content, $ar_comments);
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
						<label for="type">
							Type
						</label>
						<input name="type" type="text" class="form-control" id="type" />
					</div>
					<div class="form-group">						 
						<label for="privacy">
							Privacy
						</label>
						<input name="privacy" type="text" class="form-control" id="privacy" />
					</div>
					<div class="form-group">						 
						<label for="subject">
							Subject
						</label>
						<input name="subject" type="text" class="form-control" id="subject" />
					</div>
					<div class="form-group">						 
						<label for="slug">
							Slug
						</label>
						<input name="slug" type="text" class="form-control" id="slug" />
					</div>
					<div class="form-group">						 
						<label for="author">
							Author
						</label>
						<input name="author" type="text" class="form-control" id="author" />
					</div>
					<div class="form-group">						 
						<label for="date">
							Date
						</label>
						<input name="date" type="text" class="form-control" id="date" />
					</div>
					<div class="form-group">						 
						<label for="icon">
							Icon
						</label>
						<input name="icon" type="text" class="form-control" id="icon" />
					</div>
					<div class="form-group">						 
						<label for="content">
							Content
						</label>
						<textarea name="content" class="form-control" id="content" rows="10"></textarea>
					</div>
					<div class="form-group">						 
						<label for="comments">
							Comments
						</label>
						<input name="comments" type="text" class="form-control" id="comments" />
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