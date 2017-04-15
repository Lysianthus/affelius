<?php

include 'static/init.php';

inc_header();

?>

		<main id="content">
			<div class="posts">
				<h1 class="heading"><span><?php $heading = get_heading(); echo $heading; ?></span></h1>
				<div class="articles">
<?php

				$sth = archive_init();

				while ($row = $sth->fetch()) :
					list($id, $cat_name, $cat_slug, $subcat_name, $subcat_slug, $type, $privacy, $subject, $slug, $author, $date, $icon, $content, $comments, $link, $disqus) = archive($row);

					$is_subcategory_page = is_subcategory_page();

?>
					<article class="article">
						<div class="article__meta">
							<?php if ($type == 'article') : ?>
							<p class="article__date"><span class="fa fa-calendar"></span> <?php echo $date ?></p>
							<p class="article__author"><span class="fa fa-pencil"></span> Penned by <?php echo $author; ?></p>
							<?php endif; ?>
							<?php if ($comments == 1) : ?>
							<p class="article__comments-link"><a href="<?php echo $link ?>#disqus_thread" data-disqus-identifier="<?php echo $id ?>"><span class="fa fa-comments"></span> Comments</a></p>
							<?php endif; ?>
						</div> <!-- .article__meta -->
						<div class="article__avatar"><img alt="" src="/content/auxiliaries/icons/icon.php" /></div>
						<h2 class="article__subject"><a href="<?php echo $link; ?>"><?php echo $subject; ?></a></h2>
						<div class="article__content">

							<?php echo $content; ?>
						
						</div> <!-- .article__content -->
					</article> <!-- .article -->
<?php

					if (!empty($_GET['slug']) && ($comments == 1)) :

?>
					<div id="discuss">
						<div id="disqus_thread"></div>
						<script>
							var disqus_config = function () {
								this.page.url = '<?php echo $disqus ?>';
								this.page.identifier = '<?php echo $id ?>';
							};

							(function() {
								var d = document, s = d.createElement('script');

								s.src = '//afffelius.disqus.com/embed.js';

								s.setAttribute('data-timestamp', +new Date());
								(d.head || d.body).appendChild(s);
							})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
					</div> <!-- #discuss -->
<?php

					endif;

				endwhile;

?>
				</div> <!-- .articles -->

<?php

				$is_subcategory_page = is_subcategory_page();

				if ($is_subcategory_page == true) :
					list($from, $to, $page) = get_page_links();

?>
				<nav class="pagination">
					<ul class="pagination__list">
<?php

						if ($page != 1) :

?>
						<li class="pagination__list__item previous"><a href="<?php echo $from ?>">Newer</a></li>
<?php

						endif;

						$display_next = display_next();
						
						if ($display_next == true) : 

?>
						<li class="pagination__list__item next"><a href="<?php echo $to ?>">Older</a></li>
<?php

						endif;

?>
					</ul> <!-- .pagination__list -->
				</nav> <!-- .pagination -->
<?php

				endif;

?>
			</div> <!-- .posts -->
		</main> <!-- #content -->
		
<?php

inc_footer();

?>