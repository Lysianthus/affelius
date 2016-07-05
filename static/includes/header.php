<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title><?php $title = get_title(); echo $title; ?></title>

	<link rel="shortcut icon" href="<?php echo af_affelius_path; ?>assets/images/favicon.ico" />
	
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/font-awesome.min.css" />
	
	<!-- build:css assets/css/typefaces.css -->
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/flaticon.css" />
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/mercury.css" />
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/sentinel.css" />
	<!-- endbuild -->
	<!-- build:css assets/css/affelius.css -->
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/affelius.css" />
	<!-- endbuild -->
</head>

<body>
	<header id="menu-wrapper">
		<nav id="main-menu" class="main-menu">
			<ul id="sitely-menu" class="sitely-menu">
				<li><a href="<?php echo af_affelius_path; ?>about/">About</a></li>
				<li><a href="<?php echo af_affelius_path; ?>docs/services">Services</a></li>
				<li><a href="<?php echo af_affelius_path; ?>linkage/">Linkage</a></li>
				<li><a href="<?php echo af_affelius_path; ?>contact">Contact</a></li>
			</ul> <!-- #sitely menu .sitely-menu -->
			<ul class="showcase-menu">
				<li id="menu-toggler--text" class="showcase-menu__item">
					<div class="showcase-menu__item__heading">
						<b>Close Menu</b>
					</div> <!-- .showcase-menu__item__heading -->
				</li> <!-- #menu-toggler--text .showcase-menu__item -->
				<li class="showcase-menu__item mobile">
					<div class="showcase-menu__item__heading">
						<span class="flaticon-ideas"></span>
						<b>Information</b>
					</div> <!-- .showcase-menu__item__heading -->
					<ul class="showcase-menu__item__list">
						<li><a href="<?php echo af_affelius_path; ?>about/">About</a></li>
						<li><a href="<?php echo af_affelius_path; ?>docs/services">Services</a></li>
						<li><a href="<?php echo af_affelius_path; ?>linkage/">Linkage</a></li>
						<li><a href="<?php echo af_affelius_path; ?>contact">Contact</a></li>
					</ul> <!-- .showcase-menu__item__list -->
				</li> <!-- .showcase-menu__item -->
				<li class="showcase-menu__item">
					<div class="showcase-menu__item__heading">
						<span class="flaticon-voice1"></span>
						<b>Writings</b>
					</div> <!-- .showcase-menu__item__heading -->
					<ul class="showcase-menu__item__list">
						<li><a href="<?php echo af_affelius_path; ?>writings/poetry/">Poetry</a></li>
						<li><a href="<?php echo af_affelius_path; ?>writings/articles/">Articles</a></li>
						<li><a href="<?php echo af_affelius_path; ?>writings/essays/">Essays</a></li>
						<li><a href="<?php echo af_affelius_path; ?>writings/tutorials/">Tutorials</a></li>
						<li><a href="<?php echo af_affelius_path; ?>writings/fan-fiction/">Fan Fiction</a></li>
						<li><a href="<?php echo af_affelius_path; ?>writings/short-stories/">Short Stories</a></li>
						<li><a href="<?php echo af_affelius_path; ?>writings/novels/">Novels</a></li>
					</ul> <!-- .showcase-menu__item__list -->
				</li> <!-- .showcase-menu__item -->
				<li class="showcase-menu__item">
					<div class="showcase-menu__item__heading">
						<span class="flaticon-flower10"></span>
						<b>Graphics</b>
					</div> <!-- .showcase-menu__item__heading -->
					<ul class="showcase-menu__item__list">
						<li><a href="<?php echo af_affelius_path; ?>graphics/avatars/">Avatars</a></li>
						<li><a href="<?php echo af_affelius_path; ?>graphics/patterns/">Patterns</a></li>
					</ul> <!-- .showcase-menu__item__list -->
				</li> <!-- .showcase-menu__item -->
				<li class="showcase-menu__item">
					<div class="showcase-menu__item__heading">
						<span class="flaticon-small51"></span>
						<b>Designs</b>
					</div> <!-- .showcase-menu__item__heading -->
					<ul class="showcase-menu__item__list">
						<li><a href="<?php echo af_affelius_path; ?>designs/design-concepts/">Design Concepts</a></li>
						<li><a href="<?php echo af_affelius_path; ?>designs/livejournal-layouts/">LiveJournal Layouts</a></li>
						<li><a href="<?php echo af_affelius_path; ?>designs/tumblr-themes/">Tumblr Themes</a></li>
						<li><a href="<?php echo af_affelius_path; ?>designs/website-templates/">Website Templates</a></li>
						<li><a href="<?php echo af_affelius_path; ?>designs/wordpress-themes/">WordPress Themes</a></li>
						<li><a href="<?php echo af_affelius_path; ?>designs/trashed-designs/"><span class="fa fa-trash"></span> Trashed Designs</a></li>
					</ul> <!-- .showcase-menu__item__list -->
				</li> <!-- .showcase-menu__item -->
				<li class="showcase-menu__item">
					<div class="showcase-menu__item__heading">
						<span class="flaticon-white13"></span>
						<b>Resources</b>
					</div> <!-- .showcase-menu__item__heading -->
					<ul class="showcase-menu__item__list">
						<li><a href="<?php echo af_affelius_path; ?>resources/code-snippets/">Code Snippets</a></li>
						<li><a href="<?php echo af_affelius_path; ?>resources/color-palettes/">Color Palettes</a></li>
					</ul> <!-- .showcase-menu__item__list -->
				</li> <!-- .showcase-menu__item -->
				<li class="showcase-menu__item">
					<div class="showcase-menu__item__heading">
						<span class="flaticon-big46"></span>
						<b>Tools</b>
					</div> <!-- .showcase-menu__item__heading -->
					<ul class="showcase-menu__item__list">
						<li><a href="<?php echo af_affelius_path; ?>tools/calculators/">Calculators</a></li>
						<li><a href="<?php echo af_affelius_path; ?>tools/converters/">Converters</a></li>
						<li><a href="<?php echo af_affelius_path; ?>tools/generators/">Generators</a></li>
						<li><a href="<?php echo af_affelius_path; ?>tools/scripts/">Scripts</a></li>
					</ul> <!-- .showcase-menu__item__list -->
				</li> <!-- .showcase-menu__item -->
				<li class="showcase-menu__item">
					<div class="showcase-menu__item__heading">
						<span class="flaticon-filled"></span>
						<b>Labs</b>
					</div> <!-- .showcase-menu__item__heading -->
					<ul class="showcase-menu__item__list">
						<li><a href="<?php echo af_affelius_path; ?>labs/playground/">Playground</a></li>
					</ul> <!-- .showcase-menu__item__list -->
				</li> <!-- .showcase-menu__item -->
			</ul> <!-- .showcase-menu -->
		</nav> <!-- #main-menu .main-menu -->
	</header> <!-- #menu-wrapper -->

	<main id="wrapper">
		<header id="header">
			<button id="menu-toggler--hamburger" class="hamburger">
				<span>Toggle Menu</span>
			</button>
			<div id="site-info">
				<h1 id="site-name"><a href="<?php echo af_affelius_path; ?>" rel="home">Affelius</a></h1>
				<h2 id="site-description">Lysianthus’s Creative Repository</h2>
			</div> <!-- #site-info -->
			<nav id="social">
				<ul class="social-menu__list">
					<li><a target="_blank" href="https://twitter.com/affelius"><span class="fa fa-twitter"></span></a></li>
					<li><a target="_blank" href="https://github.com/Lysianthus/affelius"><span class="fa fa-github"></span></a></li>
					<li><a target="_blank" href="http://asclaria.org"><span class="fa fa-umbrella"></span></a></li>
				</ul> <!-- .social-menu__list -->
			</nav> <!-- #social -->
		</header> <!-- #header -->
