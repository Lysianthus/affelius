<?php

require_once '/home/affeli/libraries/swiftmailer/lib/swift_required.php';
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
	<meta name="twitter:title" content="Contact | Affelius — Lysianthus’s Creative Repository" />
	<meta name="twitter:description" content="Affelius is Lysianthus’s creative repository, which showcases writings, designs, resources, tools, and labs." />

	<title>Contact | Affelius &mdash; Lysianthus’s Creative Repository</title>

	<link rel="shortcut icon" href="<?php echo af_affelius_path; ?>assets/images/favicon.ico?describe=pure-metallicseaweed-square" />

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" />
	
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/lib/prism.css" />
	
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/typefaces-2dee79445b.css" />
	<link rel="stylesheet" href="<?php echo af_affelius_path; ?>assets/css/affelius-1f1f0a5544.css" />
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

										$body = "<p><b>Name:</b> $name</p>
<p><b>Email Address:</b> $email</p>
<p><b>Website:</b> $url</p>
<p><b>Message:</b></p>
<p>$message</p>
<p><b>Favorite Color:</b> $fav</p>
<hr />
<p>This message was sent through the contact form on Affelius.</p>";

										// Swiftmailer

										$transport = Swift_SmtpTransport::newInstance('mail.affeli.us', 25);
										$mailer = Swift_Mailer::newInstance($transport);

										$message = Swift_Message::newInstance();

										$message->setSubject("[Affelius] $subject");
										$message->setBody($body, 'text/html');
										$message->setTo('hello@affeli.us');
										$message->setFrom(array($email => $name));

										$numSent = $mailer->send($message);

?>
								<li>
									<p>Holla, <?php echo $name; ?>!</p>
									<p>Thank you so much for taking the time to send a message. I always check my inbox, so your email will most likely be read in no time (within the week, at most)! Replies might take some time, though; I get tongue-tied easily. <img</p>
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
									<label for="security"><span class="fa fa-question"></span> What is the color of yellow?</label>
									<input name="security" id="security" type="text" required placeholder="Hint: yellow" />
								</li>
								<li>
									<label for="name"><span class="fa fa-user"></span> What is your name?</label>
									<input name="name" id="name" type="text" required placeholder="Lysianthus" />
								</li>
								<li>
									<label for="email"><span class="fa fa-envelope"></span> What is your email address?</label>
									<input name="email" id="email" type="email" required placeholder="hello@affeli.us" />
								</li>
								<li>
									<label for="url"><span class="fa fa-link"></span> Give me a link to your website! <small>(optional)</small></label>
									<input name="url" id="url" type="url" placeholder="https://affeli.us" />
								</li>
								<li>
									<label for="subject"><span class="fa fa-arrow-up"></span> Choose the appropriate subject line.</label>
									<select name="subject" id="subject" required>
										<option>Sitely Matters</option>
										<option>Personal Matters</option>
										<option value="Request for Services">Help Me Get a Taxi</option>
										<option value="Affiliation">Cat, into the bag!</option>
										<option value="Link Exchange">Cat, out of the bag!</option>
										<option>Error Reporting</option>
										<option>Other Concerns</option>
									</select>
									<div class="info">
										<p><span class="fa fa-info-circle"></span> Confused which subject line to use? That means you haven't read the rules! Tsk tsk.</p>
									</div> <!-- .info -->
								</li>
								<li>
									<label for="message"><span class="fa fa-pencil"></span> Disrobe yourself.</label>
									<textarea name="message" id="message" required placeholder="Say what you wanna say." rows="5"></textarea>
								</li>
								<li>
									<label for="fav"><span class="fa fa-paw"></span> What is your favorite color? <small>(optional)</small></label>
									<input name="fav" id="favcolor" placeholder="turqouise" />
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