<?php

include 'static/init.php';

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="theme-color" content="#02c39a" />

	<meta name="description" content="Affelius is Lysianthus’s creative repository, which showcases writings, designs, resources, tools, and labs." />

	<meta property="og:title" content="Affelius" />
	<meta property="og:site_name" content="Affelius" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://affeli.us" />
	<meta property="og:description" content="Affelius is Lysianthus’s creative repository, which showcases writings, designs, resources, tools, and labs." />

	<meta name="twitter:card" content="Affelius is Lysianthus’s creative repository." />
	<meta name="twitter:site" content="@affelius" />
	<meta name="twitter:creator" content="@lysnths" />
	<meta name="twitter:url" content="https://affeli.us" />
	<meta name="twitter:title" content="Affelius — Lysianthus’s Creative Repository" />
	<meta name="twitter:description" content="Affelius is Lysianthus’s creative repository, which showcases writings, designs, resources, tools, and labs." />

	<title><?php $title = get_title(); echo $title; ?></title>

	<link rel="shortcut icon" href="<?php echo af_affelius_path; ?>assets/images/favicon.ico?describe=pure-metallicseaweed-square" />

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" />
	
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/typefaces-2dee79445b.css" />
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/live-2c5eda2470.css" />
</head>

<body>
<?php

	$sth = showcase_content_init();

	$row = $sth->fetch();
	list($id, $cat_name, $cat_slug, $cat_link, $subcat_name, $subcat_slug, $subcat_link, $thumb, $title, $slug, $date, $describe, $preview, $download, $ext, $link) = showcase_content($row);
	$download_link = '/+download' . $preview . $ext;
	$iframe = af_affelius_path . 'content/showcase/' . $cat_slug . '/' . $slug;

	if ($download == 1) :

?>
	<header id="bar">
		<ul class="bar__list">
			<li class="bar__title"><?php echo $title; ?></li>
			<li class="bar__download"><a href="<?php echo $download_link; ?>"><span class="fa fa-cloud-download"></span> <?php echo $ext; ?></a></li>
		</ul> <!-- .bar__list -->
	</header> <!-- #bar -->
<?php

	endif;

?>

	<main id="content" <?php if ($download == 1) : ?> class="with-bar" <?php else : ?> class="without-bar" <?php endif; ?> >
		<iframe src="<?php echo $iframe; ?>"></iframe>
	</main> <!-- #content -->

	<script src="<?php echo af_affelius_path; ?>assets/js/lib/jquery-2.1.4.min.js"></script>
	<script src="<?php echo af_affelius_path; ?>assets/js/affelius-209a68d844.js"></script>
</body>

</html>