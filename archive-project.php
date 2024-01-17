<?php
get_header();
?>

<main id="primary" class="site-main mainView">
		<div class="mainIntroSectionParent">
			<h1>پروژه ها</h1>
			<div class="categorySecParent highMargined">
				<?php
				$categories = get_terms( array(
					'taxonomy' => 'project-cat',
					'hide_empty' => true,
					'exclude'=>array('1')
				) );
				foreach($categories as $category) {
				echo '<a class="categoryItem" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
				}
				?>
			</div>
			<?php if ( have_posts() ) : ?>

				<!-- <header class="page-header"> -->
					<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				<!-- </header>.page-header -->
				<div class="mainArchiveGridWrapper">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', 'projects' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>
	</div>
	</main><!-- #main -->

<?php
get_footer();
?>