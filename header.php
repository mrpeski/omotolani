<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
		 <h3 class="logo pull-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
		 <nav>
		 	<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php // esc_html_e( 'Primary Menu', 'omotolani' ); ?></button> -->
		  <?php 
		    wp_nav_menu(array(
        		'container' => false,                           // Remove nav container
        		'menu_class' => 'nav pull-left',       // wraping ul
        		'menu_id' => '',
        		//'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        		'theme_location' => 'primary',        			// Where it's located in the theme
        		'depth' => 1,                                   // Limit the depth of the nav
        		'fallback_cb' => false,                         // Fallback function (see below)
        		'walker' => new Topbar_Menu_Walker()
    		)); 

			class Topbar_Menu_Walker extends Walker_Nav_Menu {
			    function start_lvl(&$output, $depth = 0, $args = Array() ) {
			        //$indent = str_repeat("\t", $depth);
			        $output .= "\n<ul class=\"menu\">\n";
			    }

			    // function start_el(&$output, $depth = 0, $args = Array() ){
			    // 	$output
			    // }
			    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        			$output .= sprintf( "\n<li class='nav__items'><a href='%s'%s>%s</a></li>\n", $item->url, ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
           			 $item->title
        		);
    			}
			}
			?>
		  <li class="nav__items"><a href="#" class="search__link">Search</a></li>
		  <input type="search" class="search">
		</nav>
		<div class="search__block">
		    <input type="search" class="search__input" placeholder="Type your search here">
		</div>
</header>

<div class="content">