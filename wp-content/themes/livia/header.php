<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package livia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<link href="<?php echo get_stylesheet_directory_uri().'/css/style.css'; ?>" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body>
	<header id="masthead">
	   <?php 
			//wp_nav_menu( array(
			//     'menu'           => 'primary-menu', // Do not fall back to first non-empty menu.
			//     'theme_location' => 'primary',
			//     'fallback_cb'    => false // Do not fall back to wp_page_menu()
			// ) );
	    ?>
	 	
			<?php
			$custom_logo = wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' );
			?>
			<nav class="navbar navbar-expand-lg navmain navbar-light">
				<div class="container">

			  <a id="livialogo" class="navbar-brand" href="<?php echo home_url() ?>">
			    <?php echo $custom_logo ?>
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="navbar-collapse collapse" id="navbarNavDropdown">
			    <?php
			    wp_nav_menu( array(
			        'theme_location'  => 'primary',
			        'depth'           => 2,
			        'container'       => 'div',
			        // 'container_class' => 'collapse navbar-collapse',
			        'menu_class'      => 'nav navbar-nav mainnav ml-auto',
			        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			        'walker'          => new WP_Bootstrap_Navwalker()
			    ) );
			    ?>
			    <div class="float-right ml-auto">
		       	    <form action="/" method="get" id="searchfm" class="form-inline my-2 my-lg-0">
				      <input  type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
				      <button id="searchbx" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
				    </form>
		         </div>
			  </div>
	 </div>
	 </nav>
    </header><!-- #masthead -->
 <div class="clearfix"></div>



