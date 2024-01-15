<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package khane_zar
*/
?>

<a href="<?php echo esc_url(get_permalink()) ?>" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" id="post-<?php the_ID(); ?>" <?php post_class('cardsArchiveParent'); ?>>
	<div class="archiveCardImg"><?php the_post_thumbnail() ?></div>
	<header class="entry-header">
		<?php if ( is_home() && ! is_front_page() ){ ?>
			<h2 class="entry-title"><?php echo get_the_title() ?></h2>
		<?php } else{ ?>
			<h3 class="entry-title"><?php echo get_the_title() ?></h3>
		<?php } ?>
	</header><!-- .entry-header -->
    <div class="archivePostDetail">
		<span class="archiveCardDate"><?php echo get_the_date('j F') ?> ماه</span>
		<span class="archiveCardAuthor"><?php echo get_the_author() ?></span>
	</div>
	<div class="archiveCardExcerpt"><?php the_excerpt(); ?></div>
</a><!-- #post-<?php the_ID(); ?> -->