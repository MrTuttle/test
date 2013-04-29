<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>

	<footer>
		<div id="pieddepage">
			<div class="row-fluid">
				<div class="span6">
					<img src="http://virages.agencealbum.com/wp-content/themes/virages/img/logoViragesFooter.png" id="logofooter" />
					<div class="row-fluid">
						<p id="textlogofooter" class="span10">VIRAGES propose des formations à la thérapie Brève et au coaching stratégique en&nbsp;petits groupes et avec un suivi individualisé de votre projet personnel.</p>
					</div>
				</div>
				<div class="span2">
					<h5>QUI SOMMES <br>NOUS&nbsp;<span>→</span></h5>
					<ul class="unstyled">
						<li><a href="http://virages.agencealbum.com/pourquoi-choisir-virages/">A propos de VIRAGES</a></li>
						<li><a href="http://virages.agencealbum.com/blog/">Le blog de VIRAGES</a></li>
						<li><a href="">Articles de presse</a></li>
						<li><a href="">Publications</a></li>
						<li><a href="">Mentions légales</a></li>
					</ul>
				</div>
				<div class="span2">
					<h5>NOTRE OFFRE <br>COMPLETE&nbsp;<span>→</span></h5>
					<ul class="unstyled">
						<li><a href="http://virages.agencealbum.com/formations/">Formation</a></li>
						<li><a href="http://virages.agencealbum.com/formations/">Accompagnement</a></li>
						<li><a href="http://virages.agencealbum.com/formations/">Conférence</a></li>
						<li><a href="http://virages.agencealbum.com/formations/">Supervision</a></li>
					</ul>
				</div>
				<div class="span2">
					<h5>ENTRER EN <br>CONTACT&nbsp;<span>→</span></h5>
					<ul class="unstyled">
						<li><a href="http://virages.agencealbum.com/contact/">Email de contact</a></li>
						<li>03 85 00 00 00</li>
					</ul>
				</div>
			</div>
			<div class="row-fluid" id="copyright">
				<div class="span6">
					<div class="row-fluid">
						<p>2013 Centre de recherche et d'études sur la souffrance en entreprise.</p>
					</div>
				</div>
				<div class="span6" id="agencealbum">
					<p>2013 agencealbum.com</p>
				</div>
			</div>
		</div>
       <div class="container-fluid" id="bandeaufooter">
	   </div>
    </footer>

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	//wp_footer();
?>
</body>
</html>
