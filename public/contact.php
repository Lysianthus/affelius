<?php

include 'static/init.php';

inc_header();

?>

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