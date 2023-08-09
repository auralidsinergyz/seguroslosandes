<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package dazzling
 */

get_header(); ?>
	

	<div id="content" class="site-content content-fluid">
		<!-- ***********************Slider********************************* -->
		<div class="top-section">
			<?php dazzling_featured_slider(); ?>

			<?php dazzling_call_for_action(); ?>
		</div>
		<!-- *********************** Fin Slider********************************* -->
		<!-- ***************************************Division de Seccion********************************* -->
		
<!-- ***************************************02/06/2017 Luis Carrillo REQ. 837, se comenta el widgets de los navegadores ya que no se usan actualmente********************************* -->

        <!--<div id="navegadores">
			<div style="float:left; width:18%">
				<a class="info-home-title" target="_blank" title="Firefox" href="https://www.mozilla.org/es-ES/firefox/new/"><img src="http://www.seguroslosandes.com/wp-content/themes/SLA/inc/images/firefox.png" width="40" height="40" alt="Descargar Firefox"/></a>
				<a class="info-home-title" target="_blank" title="Chrome" href="https://www.google.com.mx/chrome/browser/desktop/"><img src="http://www.seguroslosandes.com/wp-content/themes/SLA/inc/images/chrome.png" width="40" height="40"  alt="Descargar Chrome"/></a>
				<a class="info-home-title" target="_blank" title="Opera" href="http://www.opera.com/es"><img src="http://www.seguroslosandes.com/wp-content/themes/SLA/inc/images/opera.png" width="40" height="40" alt="Descargar Opera" /></a>
			</div>
			<div id="text-navegadores">Para una mejor experiencia, recomendamos el uso de estos navegadores.<br/> Descárgalo gratis aquí. <br/><span class="fa fa-mobile fa-2x" style="color: #fff;"></span>&nbsp;&nbsp;&nbsp;Página 100% Adaptable a Móvil.</div>			
		</div>-->
		<div class="row sections" id="row-primary"> 
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 section-page"></div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 logo-section" style="text-align:center;">
				<img src="http://www.seguroslosandes.com/wp-content/themes/SLA/inc/images/logo_section.png"  alt="Seguros Los Andes, Siempre Seguros" />
				Nuestros Productos
			</div>
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 section-page"></div>
		</div>
		<div class="row sections" id="row-primary-mobile"> 
			<div class="col-xs-3 col-sm-4 col-md-4 col-lg-4 section-page"></div>
			<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 logo-section" id="logo-section-mobile" style="text-align:center;">
				<img src="http://www.seguroslosandes.com/wp-content/themes/SLA/inc/images/logo_section.png"  alt="Seguros Los Andes, Siempre Seguros" /><br/>
				Nuestros Productos
			</div>
			<div class="col-xs-3 col-sm-4 col-md-4 col-lg-4 section-page"></div>
		</div>
		<!-- ***************************************Fin Division de Seccion********************************* -->
		<!-- ***************************************Seccion de Productos********************************* -->
		<div class="row">
		  <?php $my_query = new WP_Query('category_name=carousel&showposts=1'); $i=0; ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; $i=0; $permalink = get_permalink($post->ID);?>
				<?php the_content(); ?>
			<?php $i++; endwhile; ?>
		</div>
		<!-- ***************************************Fin Seccion Productos********************************* -->
		<!-- ***************************************Division de Seccion********************************* -->
		<div class="row sections"> 
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 section-page"></div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 logo-section" style="text-align:center;">
				<img src="http://www.seguroslosandes.com/wp-content/themes/SLA/inc/images/logo_section.png"  alt="Seguros los Andes, Siempre Seguros"/>
			</div>
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 section-page"></div>
		</div>
		<!-- ***************************************Fin Division de Seccion********************************* -->
		<!-- ***************************************Seccion Publicidad********************************* -->
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<a title="Requisitos a Consignar" href="http://www.seguroslosandes.com/?page_id=569"><img class="block-inter" src="http://www.seguroslosandes.com/wp-content/uploads/2015/04/Equipo_intermediarios_SLA.jpg" style="width=100%; height=100%;" alt="Unete a nuestra Fuerza de Produccion"/></a>
			</div>
			<!--<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<img class="block-inter" src="http://www.seguroslosandes.com/wp-content/uploads/2015/04/cotizacion.jpg" width="100%" height="100%" />
			</div>-->
		</div>
		<!-- ***************************************Fin Seccion publicidad********************************* -->
		<!-- ***************************************Division de Seccion********************************* -->
		<div class="row sections"> 
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 section-page"></div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 logo-section" style="text-align:center;">
				<img src="http://www.seguroslosandes.com/wp-content/themes/SLA/inc/images/logo_section.png" alt="Seguros los Andes, Siempre Seguros" />
			</div>
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 section-page"></div>
		</div>
		<!-- ***************************************fin Division de Seccion********************************* -->
		<!-- ***************************************Seccion Enlaces de Interes********************************* -->
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="info-home" style="text-align:center; background-color:#EF8339;">
					<a class="info-home-title" title="Cont&aacute;ctenos" href="https://seguroslosandes.myservy.com/polizas/contactanos/">
						<span class="fa fa-phone">
						<h3 class="large">Cont&aacute;ctenos</h3>
						</a>
						<p>Estamos disponibles los 365 d&iacute;as del a&ntilde;o <br/> Línea 800 una respuesta efectiva.</p>
					</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="info-home" style="text-align:center; background-color:#184C74;">
					<a class="info-home-title" title="Nuestras Oficinas" href="https://seguroslosandes.myservy.com/polizas/oficinas/">
						<span class="fa fa-building">
						<h3 class="large" >Nuestras Oficinas</h3>
						</a>
						<p>Nuestras oficinas est&aacute;n distribuidas <br/> en el Territorio Nacional.</p>
					</a>	
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="info-home" style="text-align:center; background-color:#00583C;">
					<a class="info-home-title" title="Notificaci&oacute;n de Siniestros" href="https://www.seguroslosandes.com/pls/apex/f?p=113:1:3244345870623854" target="_blank">
						<span class="fa fa-exclamation-circle">
						<h3 class="large">Notificaci&oacute;n de Siniestros</h3>
						</a>
						<p>Ahora es m&aacute;s f&aacute;cil notificar un Siniestro.</p>
					</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="info-home" style="text-align:center; background-color:#FF4D4D;">
					<a class="info-home-title" title="Planillas de Solicitud" href="http://www.seguroslosandes.com/?page_id=625">
						<span class="fa fa-download">
						<h3 class="large">Planillas de Solicitud</h3>
						</a>
						<p>Ingresa y descarga las Planillas de <br/> Solicitud de p&oacute;lizas.</p>
					</a>
				</div>
			</div>
		</div>
		<!-- *************************************** Fin Seccion Enlaces de Interes********************************* -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>