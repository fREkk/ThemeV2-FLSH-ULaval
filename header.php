<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width">
	<meta name="robots" content="index,follow" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/site-style.css" />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="entete">
<?php


	  $example_position = get_theme_mod( 'choix_entete' );
    if( $example_position != '' ) {
	   switch ( $example_position ) {
            case 'option1':
                ?>	
				<div id="backgroundVisionneuse" style="background-image: url('<?php header_image(); ?>' )">
					<span id="degradeVisionneuse"></span>
						<?php echo get_search_form(); ?>
				</div>
				<div id="menu">
					<div id="btMenuMobile" >Menu</div>
					<ul id="containerMenu">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?></a>
					</ul>
				</div>
				<?php
                break;
            case 'option2':
				?>
				<div id="PIV" style="margin-bottom:20px;">
					<span id="barreRouge"></span>
					<span id="barreJaune"></span>
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo_elul.gif" alt="logo Université laval" id="logoUniversite" />
					<div id="containerPIV">		
							<h1> <?php  echo get_bloginfo('name'); ?></h1>
							<?php wp_nav_menu( array( 'theme_location' => 'piv_ulaval', 'menu_class' => 'menu-ulaval' ) ); ?>
					</div>	
				</div>
				<div id="menu">
					<div id="btMenuMobile" >Menu</div>
					<ul id="containerMenu">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?></a>
					</ul>
				</div>
				<?php
				
                break;
            case 'option3':
                ?>
				<div id="PIV">
					<span id="barreRouge"></span>
					<span id="barreJaune"></span>
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo_elul.gif" alt="logo Université laval" id="logoUniversite" />
					<div id="containerPIV">		
							<h1> <?php  echo get_bloginfo('name'); ?></h1>
							<?php wp_nav_menu( array( 'theme_location' => 'piv_ulaval', 'menu_class' => 'menu-ulaval' ) ); ?>
					</div>	
				</div>
				<div id="backgroundVisionneuse" style="background-image: url('<?php header_image(); ?>' )">
					<span id="degradeVisionneuse"></span>
						<?php echo get_search_form(); ?>
				</div>
				<div id="menu">
					<div id="btMenuMobile" >Menu</div>
					<ul id="containerMenu">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?></a>
					</ul>
				</div>
				<?php
                break;
        }
    }

?>


</div>