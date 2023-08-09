<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dazzling
 */
?>
	</div><!-- #content -->
    <div class="border-bottom"></div>
	<div id="footer-area">
		<!--<div class="container footer-inner">
			<?php //get_sidebar( 'footer' ); ?>
		</div>-->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<?php //dazzling_social(); ?>
				<!--<nav role="navigation" class="col-md-6">
					<?php //dazzling_footer_links(); ?>
				</nav>-->
				<div class="copyright row">
					<div class="area-footer col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="title-footer"> Portales </div>
						<ul class="nav-item-footer" style="text-align: left !important;">
							<li><i class="fa fa-user fa-lg" style="color= #f99e1c;"></i><a href="https://www.seguroslosandes.com/pls/apex/f?p=129:30" target="_blank" title="Portal de Intermediarios" >     Portal de Intermediarios<a/></li>
							<li><i class="fa fa-users fa-lg" style="color= #dd9933;"></i><a href="https://www.seguroslosandes.com/pls/apex/f?p=105:101" target="_blank" title="Portal de Clientes" >    Portal de Clientes<a/></li>
							</i><li><i class="fa fa-hospital-o fa-lg" style="color= #dd9933;"></i><a href="https://www.seguroslosandes.com/pls/apex/f?p=109:7" target="_blank" title="Portal de Cl&iacute;nicas" >     Portal de Cl&iacute;nicas<a/></li>
							</i><li><i class="fa fa-car fa-lg" style="color= #dd9933;"></i><a href="https://www.seguroslosandes.com/pls/apex/f?p=142:1" target="_blank" title="Portal de Talleres" >    Portal de Talleres<a/></li>
						</ul>
					</div>
					<div class="area-footer col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="title-footer"> Enlaces de Inter&eacute;s</div>
						<ul class="nav-item-footer" style="text-align: left !important;">
							<li><i class="fa fa-university fa-lg" style="color= #dd9933;"></i><a href="http://www.sudeseg.gob.ve/" target="_blank" title="Superintendencia de la Actividad Aseguradora" >     SUDEASEG<a/></li>
							<li><i class="fa fa-hospital-o fa-lg" style="color= #dd9933;"></i><a href="http://www.seguroslosandes.com/wp-content/themes/SLA/inc/doc/Aviso-Publico-Sala-SUDEASEG.pdf" target="_blank" title="Sala  Situacional de Salud" >     Sala  Situacional de Salud<a/></li>
							<li><i class="fa fa-thumbs-o-up fa-lg" style="color= #dd9933;"></i><a href="http://www.seguroslosandes.com/?page_id=94" title="Unidad de Prevenci&oacute;n y Control de Legitimaci&oacute;n de Capitales y FT" >     UPCLC/FT<a/></li>
							<li><i class="fa fa-credit-card fa-lg" style="color= #dd9933;"></i><a href="http://www.seguroslosandes.com/?page_id=130" title="Tipos de Pago" >     Tipos de Pago<a/></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="ssl-box-inf">
						<div class="img-footer">
							<img src="http://www.seguroslosandes.com/wp-content/themes/SLA/inc/images/reconocimiento-ORACLE-SLA.png" title="Reconocimiento ORACLE" alt="Reconocimiento ORACLE" width="100" height="78"/>
						</div>
						<div class="img-footer">
							<script type="text/javascript" src="https://seal.verisign.com/getseal?host_name=www.seguroslosandes.com&amp;size=M&amp;use_flash=NO&amp;use_transparent=NO&amp;lang=es"></script><br />
							<a href="http://www.verisign.es/products-services/security-services/ssl/ssl-information-center/" target="_blank"  style="color:#000000; text-decoration:none; font:bold 7px verdana,sans-serif; letter-spacing:.5px; text-align:center; margin:0px; padding:0px;">Acerca de los certificados SSL<a/>
							
						</div>
						</div>
						<div class="contacto-footer">
							Dirección: Av. Las Pilas. Urb. Santa Inés, Edificio Seguros Los Andes.</br>
							San Cristóbal, Edo. Táchira.</br>
							Telf.: (0276) 3402611.</br>
							Fax: (0276) 3402612 / 2621.</br>
							<a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B584248123221&text&type=phone_number&app_absent=0">WhatsApp: (424) 8123221.</a></br>
<!-- 							
						</div>
					</div>
				</div>
				<div class="copyright row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						Seguros Los Andes, C.A., Inscrita en la Superintendencia de la Actividad Aseguradora, Ministerio del Poder Popular Economía y Finanzas,<br>
						bajo el Número 44, Miembro de la Cámara Aseguradora de Venezuela.<br>
						RIF J-07001737-6.<br>
						
					</div>
					<?php //echo of_get_option( 'custom_footer_text', 'dazzling' ); ?>
					<?php //dazzling_footer_info(); ?>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>