<?php

include 'static/init.php';

inc_header();

?>

		<main id="content">
			<div class="showcase">
				<h1 class="heading"><span><?php $heading = get_heading(); echo $heading; ?></span></h1>
				<h2 class="subheading">All the subcategories</h2>
				<ul class="subcategory__list">
<?php

					$sth = showcase_subcats_init();

					while ($row = $sth->fetch()) :
						list($id, $cat_id, $cat_name, $cat_slug, $cat_link, $subcat_id, $subcat_name, $subcat_slug, $subcat_link, $thumb, $info) = showcase_subcats($row);

?>
					<li class="subcategory">
						<a href="<?php echo $subcat_link; ?>">
							<h3 class="subcategory__name"><?php echo $subcat_name; ?></h3>
							<p class="subcategory__description"><?php echo $info; ?></p>
						</a>
					</li> <!-- .subcategory -->
<?php

					endwhile;

?>
				</ul> <!-- .subcategory__list -->
			</div> <!-- .showcase -->
		</main> <!-- #content -->
		
<?php

inc_footer();

?>