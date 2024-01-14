<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package khane_zar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<div class="searchOverlay"></div>
<div class="searchParent">
	<div class="closeIcon">
		<svg width="25" height="25" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#fc0000" fill-rule="evenodd" d="M11.293 3.293a1 1 0 1 1 1.414 1.414L9.414 8l3.293 3.293a1 1 0 0 1-1.414 1.414L8 9.414l-3.293 3.293a1 1 0 0 1-1.414-1.414L6.586 8 3.293 4.707a1 1 0 0 1 1.414-1.414L8 6.586l3.293-3.293Z"/></svg>
	</div>
    <form action="/" method="get">
        <button type="submit">
			<svg stroke="#777" width="25px" height="25px" xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><circle cx="11.854" cy="11.854" r="9" fill="none" stroke-miterlimit="10" stroke-width="2"></circle><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M18.451 18.451l7.695 7.695"></path></svg>
		</button>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="دنبال چه میگردید؟" />
		<div class="searchButtonContainer">
			<button type="submit" class="generalButton" fdprocessedid="x887ac">جستجو</button>
			<a class="closeBtn">بستن</a>
		</div>
    </form>
</div>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="mainHeaderBack">
		<div class="mainHeader mainView">
			<a href="#"class="logoSection">
			<svg height="40" fill="#cdb578" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 467 182"><circle cx="74.5" cy="21.5" r="21.5"/><circle cx="234.5" cy="21.5" r="21.5"/><circle cx="337.5" cy="21.5" r="21.5"/><path d="M0 53h43v99c0 16.6-13.4 30-30 30H0V53Zm51.6 0h43v99c0 16.6-13.4 30-30 30h-13V53Zm186.2 0h43v99c0 16.6-13.4 30-30 30h-13V53Zm51.6 0h43v129h-13c-16.6 0-30-13.4-30-30V53Zm-60.2 129v-43h-65c-9.9 0-18-8.1-18-18v-7c0-9.9 8.1-18 18-18h65V53h-65c-33.7 0-61 27.3-61 61v7c0 33.7 27.3 61 61 61h65ZM341 53v43h65c9.9 0 18 8.1 18 18v7c0 9.9-8.1 18-18 18h-65v43h65c33.7 0 61-27.3 61-61v-7c0-33.7-27.3-61-61-61h-65Z"/></svg>
			</a>
			<div class="menuSection">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container_class'=>'mainMenu'
						)
					);
				?>
			</div>
			<div class="signSection">
				<svg class="searchIcon" width="24" height="24" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.917 22.48c-5.829 0-10.563-4.735-10.563-10.563 0-5.829 4.734-10.563 10.563-10.563 5.828 0 10.562 4.734 10.562 10.563 0 5.828-4.734 10.562-10.562 10.562Zm0-19.5c-4.93 0-8.938 4.008-8.938 8.937 0 4.929 4.009 8.937 8.938 8.937s8.937-4.008 8.937-8.937c0-4.93-4.008-8.938-8.937-8.938Zm9.923 21.71c-.087 0-.173-.012-.25-.023-.508-.065-1.43-.411-1.95-1.96-.27-.813-.172-1.625.272-2.243.444-.617 1.191-.964 2.047-.964 1.105 0 1.972.422 2.362 1.17.39.747.281 1.7-.336 2.622-.77 1.159-1.603 1.397-2.145 1.397Zm-.65-2.492c.184.563.444.845.617.866.174.022.499-.184.835-.672.314-.465.335-.801.26-.953-.076-.151-.38-.314-.943-.314-.336 0-.585.108-.726.293-.13.184-.151.465-.043.78Z" fill="#EEE"/></svg>
				<svg width="24" height="24" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.173 12.588h-.087a.585.585 0 0 0-.195 0c-3.141-.097-5.514-2.567-5.514-5.611A5.631 5.631 0 0 1 13 1.354a5.631 5.631 0 0 1 5.622 5.623c-.01 3.044-2.394 5.514-5.417 5.611h-.032ZM13 2.98a4.009 4.009 0 0 0-3.998 3.998c0 2.166 1.69 3.91 3.846 3.986.054-.01.206-.01.347 0a3.99 3.99 0 0 0 3.802-3.986c0-2.2-1.798-3.998-3.997-3.998Zm.184 21.45c-2.124 0-4.258-.543-5.872-1.626-1.506-.996-2.33-2.361-2.33-3.846 0-1.484.824-2.86 2.33-3.867 3.25-2.156 8.515-2.156 11.743 0 1.495.996 2.33 2.362 2.33 3.846s-.824 2.86-2.33 3.867c-1.625 1.084-3.748 1.625-5.871 1.625ZM8.21 16.455c-1.04.693-1.603 1.582-1.603 2.513 0 .921.574 1.81 1.603 2.492 2.698 1.809 7.248 1.809 9.945 0 1.04-.694 1.604-1.582 1.604-2.513 0-.921-.575-1.81-1.604-2.492-2.697-1.798-7.247-1.798-9.945 0Z" fill="#EEE"/></svg>
			</div>
		</div>
	</div>
</div>
