<?php

include 'static/init.php';

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="theme-color" content="#855741" />
	<meta name="description" content="Affelius is Lysianthus's creative repository, which showcases writings, designs, resources, tools, and labs." />
	<meta property="og:title" content="Affelius" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://affeli.us" />
	<meta property="og:description" content="Affelius is Lysianthus's creative repository, which showcases writings, designs, resources, tools, and labs." />

	<title>Contact | Affelius &mdash; Lysianthus’s Creative Repository</title>

	<link rel="shortcut icon" href="<?php echo af_affelius_path; ?>assets/images/favicon.ico?describe=pure-purple-square" />

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" />
	
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/lib/prism.css" />
	
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/typefaces-2dee79445b.css" />
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/affelius-0779bcb724.css" />
</head>

<body>
	<header id="menu-wrapper">
		<nav id="main-menu" class="main-menu">
			<ul id="sitely-menu" class="sitely-menu">
				<li><a href="<?php echo af_affelius_path; ?>about/">About</a></li>
				<li><a href="<?php echo af_affelius_path; ?>about/services">Services</a></li>
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
						<li><a href="<?php echo af_affelius_path; ?>about/services">Services</a></li>
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
					<li><a target="_blank" href="http://lysianth.us"><span class="fa fa-user"></span></a></li>
				</ul> <!-- .social-menu__list -->
			</nav> <!-- #social -->
		</header> <!-- #header -->

		<main id="content">
			<div class="posts">
				<h1 class="heading"><span>Contact</span></h1>
				<h2 class="subheading">Letters of Love</h2>
				<div class="articles">
					<article class="form">
						<form action="#" method="post">
							<ol class="form__list">
<?php

								if (isset($_POST['send'])) :
									$security = $_POST['security'];

									if ($security == 'yellow') :
										$name = stripslashes($_POST['name']);
										$email = $_POST['email'];
										$url = $_POST['url'];
										$subject = $_POST['subject'];
										$message = stripslashes($_POST['message']);
										$fav = stripslashes($_POST['fav']);

										$to = 'hello@affeli.us';
										$subject = "[Affelius] $subject";
										$body = "Name: $name\nE-mail Address: $email\nWebsite URL: $url\n\nMessage:\n\n$message\n\nFavorite Color: $fav\n\n---\n\nThis message was sent via Affelius > Contact.";
										$header = "From: $name <$email>";

										mail($to, $subject, $body, $header);

?>
								<li>
									<p>Holla, <?php echo $name; ?>!</p>
									<p>Thank you so much for taking the time to send a message. I always check my inbox, so your e-mail will most likely be read in no time (within the week, at most)! Replies might take some time, though; I get tongue-tied easily. <img</p>
									<p>I hope you enjoy browsing. Have a nice day! <img alt="" src="/+smilies/dotty/dotty-fartheart.gif" /></p>
								</li>
<?php

									else :

?>
								<li>
									<p>Whoops! I think you thought too hard on the question! The answer is simply “yellow”. <img alt="" src="/+smilies/lamb/tumblr_inline_mpgf9tddKO1qz4rgp.gif" /></p>
									<p><a href="javascript:history.go(-1)"><span class="fa fa-chevron-left"></span> Go back to restore your message</a>, or simply press <kbd>BACKSPACE</kbd> on your keyboard.</p>
								</li>
<?php

									endif;
								endif;

?>
								<li>
									<input name="security" id="security" type="text" required placeholder="Hint: yellow" />
									<label for="security"><span class="fa fa-question"></span> What is the color of yellow?</label>
								</li>
								<li>
									<input name="name" id="name" type="text" required placeholder="Lysianthus" />
									<label for="name"><span class="fa fa-user"></span> What is your name?</label>
								</li>
								<li>
									<input name="email" id="email" type="email" required placeholder="hello@affeli.us" />
									<label for="email"><span class="fa fa-envelope"></span> What is your e-mail address?</label>
								</li>
								<li>
									<input name="url" id="url" type="url" placeholder="https://affeli.us" />
									<label for="url"><span class="fa fa-link"></span> Give me a link to your website! <small>(optional)</small></label>
								</li>
								<li>
									<select name="subject" id="subject" required>
										<option>Sitely Matters</option>
										<option>Personal Matters</option>
										<option value="Request for Services">Help Me Get a Taxi</option>
										<option value="Affiliation">Cat, into the bag!</option>
										<option value="Link Exchange">Cat, out of the bag!</option>
										<option>Error Reporting</option>
										<option>Other Concerns</option>
									</select>
									<label for="subject"><span class="fa fa-arrow-up"></span> Choose the appropriate subject line.</label>
									<div class="info">
										<p><span class="fa fa-info-circle"></span> Confused which subject line to use? That means you haven't read the rules! Tsk tsk.</p>
									</div> <!-- .info -->
								</li>
								<li>
									<textarea name="message" id="message" required placeholder="Say what you wanna say." rows="5"></textarea>
									<label for="message"><span class="fa fa-pencil"></span> Disrobe yourself.</label>
								</li>
								<li>
									<input name="fav" id="favcolor" placeholder="turqouise" />
									<label for="fav"><span class="fa fa-paw"></span> What is your favorite color? <small>(optional)</small></label>
								</li>
								<li class="align-center">
									<button name="send" type="submit"><span class="fa fa-send-o"></span> Send Message</button>
								</li>
							</ol> <!-- .form__list -->
						</form>
					</article> <!-- .form -->
				</div> <!-- .articles -->
			</div> <!-- .posts -->
		</main> <!-- #content -->
		
<?php

inc_footer();

?>