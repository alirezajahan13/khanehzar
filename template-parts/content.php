<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package khane_zar
 */
?>
<div class="generalSinglePostStyle singleBox">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="singlePostDetailParent">
		<div class="postDate">
			<span class="centerFooter">تاریخ انتشار:</span>
			<span><?php echo get_the_date() ?></span>
		</div>
		<div class="postAuthor">
			<span class="centerFooter">نویسنده:</span>
			<span><?php echo get_the_author() ?></span>
		</div>
		<div class="postTime">
			<span class="centerFooter">مدت مطالعه:</span>
			<span>'<?php echo do_shortcode('[reading_time]') ?></span>
		</div>
	</div>
	<?php khane_zar_post_thumbnail(); ?>
	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'khane_zar' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		// wp_link_pages(
		// 	array(
		// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'khane_zar' ),
		// 		'after'  => '</div>',
		// 	)
		// );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<!-- <div class="likeCount">
			<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)"><path d="M10.8 22.661c-.29 0-.58-.05-.85-.15-1.25-.41-2.05-1.79-1.77-3.07l.49-3.15c.01-.07.01-.17-.06-.25a.28.28 0 0 0-.2-.08h-4c-.98 0-1.83-.41-2.33-1.12-.49-.69-.59-1.6-.27-2.48l2.39-7.28c.37-1.45 1.92-2.62 3.52-2.62h3.8c.56 0 1.78.17 2.43.82l3.03 2.34-.92 1.19-3.1-2.4c-.25-.25-.88-.45-1.44-.45h-3.8c-.9 0-1.87.72-2.07 1.53l-2.42 7.35c-.16.44-.13.84.08 1.13.22.31.62.49 1.11.49h4c.52 0 1 .22 1.33.6.34.39.49.91.41 1.45l-.5 3.21c-.12.56.26 1.19.8 1.37.48.18 1.12-.08 1.34-.4l4.1-6.1 1.24.84-4.1 6.1c-.47.7-1.36 1.13-2.24 1.13Z" fill="#eeeeee"/><path d="M19.62 18.661h-1c-1.85 0-2.75-.87-2.75-2.65v-9.8c0-1.78.9-2.65 2.75-2.65h1c1.85 0 2.75.87 2.75 2.65v9.8c0 1.78-.9 2.65-2.75 2.65Zm-1-13.6c-1.09 0-1.25.26-1.25 1.15v9.8c0 .89.16 1.15 1.25 1.15h1c1.09 0 1.25-.26 1.25-1.15v-9.8c0-.89-.16-1.15-1.25-1.15h-1Z" fill="#eeeeee"/></svg>
			<span>2024 لایک</span>
		</div> -->
		<div class="likeCount">
			<button id="likeButton" onclick="likePost()"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)"><path d="M10.8 22.661c-.29 0-.58-.05-.85-.15-1.25-.41-2.05-1.79-1.77-3.07l.49-3.15c.01-.07.01-.17-.06-.25a.28.28 0 0 0-.2-.08h-4c-.98 0-1.83-.41-2.33-1.12-.49-.69-.59-1.6-.27-2.48l2.39-7.28c.37-1.45 1.92-2.62 3.52-2.62h3.8c.56 0 1.78.17 2.43.82l3.03 2.34-.92 1.19-3.1-2.4c-.25-.25-.88-.45-1.44-.45h-3.8c-.9 0-1.87.72-2.07 1.53l-2.42 7.35c-.16.44-.13.84.08 1.13.22.31.62.49 1.11.49h4c.52 0 1 .22 1.33.6.34.39.49.91.41 1.45l-.5 3.21c-.12.56.26 1.19.8 1.37.48.18 1.12-.08 1.34-.4l4.1-6.1 1.24.84-4.1 6.1c-.47.7-1.36 1.13-2.24 1.13Z" fill="#eeeeee"/><path d="M19.62 18.661h-1c-1.85 0-2.75-.87-2.75-2.65v-9.8c0-1.78.9-2.65 2.75-2.65h1c1.85 0 2.75.87 2.75 2.65v9.8c0 1.78-.9 2.65-2.75 2.65Zm-1-13.6c-1.09 0-1.25.26-1.25 1.15v9.8c0 .89.16 1.15 1.25 1.15h1c1.09 0 1.25-.26 1.25-1.15v-9.8c0-.89-.16-1.15-1.25-1.15h-1Z" fill="#eeeeee"/></svg></button>
    		<span id="likeCounter"><?php echo get_post_meta(get_the_ID(), '_like_count', true) ?: 0; ?></span><span>لایک</span>
		</div>
		<div class="commentsCount">
			<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 23.311H9c-5.43 0-7.75-2.32-7.75-7.75v-6c0-5.43 2.32-7.75 7.75-7.75h2c.41 0 .75.34.75.75s-.34.75-.75.75H9c-4.61 0-6.25 1.64-6.25 6.25v6c0 4.61 1.64 6.25 6.25 6.25h6c4.61 0 6.25-1.64 6.25-6.25v-2c0-.41.34-.75.75-.75s.75.34.75.75v2c0 5.43-2.32 7.75-7.75 7.75Z" fill="#EEE"/><path d="M8.5 18.251c-.61 0-1.17-.22-1.58-.62-.49-.49-.7-1.2-.59-1.95l.43-3.01c.08-.58.46-1.33.87-1.74l7.88-7.88c1.99-1.99 4.01-1.99 6 0 1.09 1.09 1.58 2.2 1.48 3.31-.09.9-.57 1.78-1.48 2.68l-7.88 7.88c-.41.41-1.16.79-1.74.87l-3.01.43c-.13.03-.26.03-.38.03Zm8.07-14.14-7.88 7.88c-.19.19-.41.63-.45.89l-.43 3.01c-.04.29.02.53.17.68.15.15.39.21.68.17l3.01-.43c.26-.04.71-.26.89-.45l7.88-7.88c.65-.65.99-1.23 1.04-1.77.06-.65-.28-1.34-1.04-2.11-1.6-1.6-2.7-1.15-3.87.01Z" fill="#EEE"/><path d="M19.85 10.391c-.07 0-.14-.01-.2-.03a7.937 7.937 0 0 1-5.46-5.46.76.76 0 0 1 .52-.93c.4-.11.81.12.92.52.6 2.13 2.29 3.82 4.42 4.42.4.11.63.53.52.93-.09.34-.39.55-.72.55Z" fill="#EEE"/></svg>
			<span><?php comments_number( '0', '1', '%' ); ?> کامنت</span>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>
