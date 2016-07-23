<?php

include 'static/init.php';

inc_header();

?>

		<main id="content">
			<div class="showcase">
				<h1 class="heading"><span><?php $heading = get_heading(); echo $heading; ?></span></h1>
				<h2 class="subheading"><?php $info = get_subcat_info(); echo $info; ?></h2>
				<article class="showcase__blurb">
					<h3 class="showcase__blurb__heading">Things to Remember</h3>
					<div class="showcase__blurb__content">
						<p><a rel="license" target="_blank" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img class="bordered" alt="Creative Commons License" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a></p>
						<p><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Any Affelius design</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="//affeli.us" property="cc:attributionName" rel="cc:attributionURL">Lysianthus</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.</p>
						<p>This means you have to credit; you are not allowed to use the work for commercial purposes; and you are not allowed to distribute a modified version of the work.</p>
						<p>If you have any questions, you can read the <a href="/about/faq">FAQ</a> for answers or <a href="/contact">directly approach us</a>!</p>
						<p><button id="agree"><span class="fa fa-check"></span> I understand and agree to these terms</button></p>
					</div> <!-- .showcase__blurb__content -->
				</article> <!-- .showcase__blurb -->
				<div class="showcase__grid">
<?php

					$sth = showcase_content_init();

					while ($row = $sth->fetch()) :
						list($id, $cat_name, $cat_slug, $cat_link, $subcat_name, $subcat_slug, $subcat_link, $thumb, $title, $slug, $date, $describe, $preview, $download, $ext, $link) = showcase_content($row);

?>
					<figure class="showcase__item">
						<a target="_blank" href="<?php echo $link; ?>"><img class="showcase__item__preview" alt="" src="<?php echo $thumb; ?>" /></a>
						<figcaption class="showcase__item__info">
							<p class="showcase__item__title"><a target="_blank" href="<?php echo $link ?>"><?php echo $title; ?></a></p>
							<p class="showcase__item__description"><?php echo $describe; ?></p>
							<p class="showcase__item__category"><span class="fa fa-folder"></span> <a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a> &rsaquo; <a href="<?php echo $subcat_link; ?>"><?php echo $subcat_name; ?></a></p>
							<p class="showcase__item__date"><span class="fa fa-calendar"></span> <?php echo $date; ?></p>
						</figcaption> <!-- .showcase__item__info -->
					</figure> <!-- .showcase__item -->
<?php
					endwhile;

?>
				</div> <!-- .showcase__grid -->
			</div> <!-- .showcase -->
		</main> <!-- #content -->
		
<?php

inc_footer();

?>