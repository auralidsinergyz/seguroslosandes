<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dazzling
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<META name="description" content="Seguros Los Andes, Siempre Seguros">
<META name="keywords" lang="es" content="Seguros Los Andes,Siempre Seguros,Seguros,Productos,RCV,Personas,Patrimoniales,Servicios,Oficinas,Intermediarios,Talleres,Autómovil,Clínicas,Portal">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
	$(document).ready(function(){
              
		var altura = $("nav").offset().top;
		var navheight=$("nav").css("height");
                     
        $(window).scroll(function(){
                         
			if($(window).scrollTop() >= altura){
                                     
				$("nav").css("margin-top","0px");
                $("nav").css("position","fixed");
				$("nav").css("width","100%");
				$("nav").css("z-index","999");
				$("nav").css("top","0px");
				$("#content").css("margin-top",navheight);   
                               
            }else{
								                         
				$("nav").css("margin-top","0px");
                $("nav").css("position","static");
				$("nav").css("top","0px");
				              
            }
                         
        });
                   
    });
                   
</script>
<!-- favicon -->

<?php if ( of_get_option( 'custom_favicon' ) ) { ?>
<link rel="icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" />
<?php } ?>

<!--[if IE]><?php if ( of_get_option( 'custom_favicon' ) ) { ?><link rel="shortcut icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" /><?php } ?><![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<nav class="navbar navbar-default" role="navigation">
		<!--<img src="http://localhost/www.seguroslosandes.com/wp-content/themes/SLA/inc/images/fondo-header-SLA.png" width="100%" title="Fondo SLA" alt="Fondo SLA"/>-->
		<div class="container fondo-desktop">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
				<?php if( get_header_image() != '' ) : ?>
					<div id="logo">	
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
						<!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="100%" width="100%" alt="<?php bloginfo( 'name' ); ?>"/></a>-->
					</div><!-- end of #logo -->

				<?php endif; // header image was removed ?>

				<?php if( !get_header_image() ) : ?>

					<div id="logo">
						<span class="site-name"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
					</div><!-- end of #logo -->

				<?php endif; // header image was removed (again) ?>

			</div>
				<?php dazzling_header_menu(); ?>
		</div>
		<div class="border-top"> </div>
	</nav><!-- .site-navigation -->
	
	