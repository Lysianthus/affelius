<?php

include 'static/init.php';

inc_header();

?>

		<main id="content">
			<div class="showcase">
				<h1 class="heading showcase__heading"><span>Latest on the Showcase</span></h1>
				<div class="showcase__grid">
<?php

					$sth = get_latest_from_showcase();

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

			<div class="posts">
				<h1 class="heading posts__heading"><span>Latest News and Updates</span></h1>
				<div class="articles">
<?php

				$sth = get_latest_news();

				while ($row = $sth->fetch()) :
					list($id, $cat_name, $cat_slug, $subcat_name, $subcat_slug, $type, $subject, $slug, $author, $date, $icon, $content, $comments, $link, $disqus) = archive($row);

?>
					<article class="article">
						<div class="article__meta">
							<?php if ($type == article) : ?>
							<p class="article__date"><span class="fa fa-calendar"></span> <?php echo $date ?></p>
							<p class="article__author"><span class="fa fa-pencil"></span> Penned by <?php echo $author; ?></p>
							<?php endif; ?>
							<?php if ($comments == 1) : ?>
							<p class="article__comments-link"><a href="<?php echo $link ?>#disqus_thread" data-disqus-identifier="<?php echo $id ?>"><span class="fa fa-comments"></span> Comments</a></p>
							<?php endif; ?>
						</div> <!-- .article__meta -->
						<h2 class="article__subject"><a href="<?php echo $link; ?>"><?php echo $subject; ?></a></h2>
						<div class="article__content">

							<?php echo $content; ?>
						
						</div> <!-- .article__content -->
					</article> <!-- .article -->
<?php

				endwhile;

?>
				</div> <!-- .articles -->
			</div> <!-- .posts -->

			<div class="quick-feed">
				<h1 class="quick-feed__heading">Latest Writings</h1>
				<ul class="quick-feed__list">
<?php

					$sth = get_latest_writings();

					while ($row = $sth->fetch()) :
						list($id, $cat_name, $cat_slug, $subcat_name, $subcat_slug, $type, $subject, $slug, $author, $date, $icon, $content, $comments, $link, $disqus) = archive($row);

?>
					<li><?php echo $subcat_name; ?> / <a href="<?php echo $link; ?>"><?php echo $subject; ?></a> / <?php echo $date; ?></li>
<?php

					endwhile;

?>
				</ul> <!-- .quick-feed__list -->
			</div> <!-- .quick-feed -->

			<div class="showcase">
				<h1 class="heading showcase__heading"><span>Latest on the Playground</span></h1>
				<div class="showcase__grid">
<?php

					$sth = get_latest_from_labs();

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