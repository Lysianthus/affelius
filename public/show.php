<?php

include 'static/init.php';

inc_header();

?>

		<main id="content">
			<div class="showcase">
				<h1 class="heading showcase__heading"><span><?php $heading = get_heading(); echo $heading; ?></span></h1>
				<h2 class="showcase__subheading"><?php $info = get_subcat_info(); echo $info; ?></h2>
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