<?php
/*
Template Name: Template Virage
*/

get_header(); ?>

	<div class="container">
	<div class="row-fluid">
	<div class="span12" id="accueil">
	  <div class="row-fluid show-grid lignes">
		<div class="span4" onclick="$(location).attr('href','http://virages.agencealbum.com/pourquoi-choisir-virages/')">
		  <h2 class="title-accueil vert"><img class="smallimg" src="<?php bloginfo( 'template_directory' ); ?>/img/icoVirages_big.png" /><span>POURQUOI CHOISIR<br/> VIRAGES ?</span></h2>
		  <p class="para-accueil">VIRAGES est né d'une envie de partager passion et compétences de la thérapie brève avec ceux et celles qui seraient intéressés d'en faire leur profession, mais également avec ceux qui souhaitent découvrir une nouvelle vision de la vie...<a href="http://virages.agencealbum.com/pourquoi-choisir-virages/" class="suite"><span>→</span> SUITE</a></p>
		</div><!--/span-->
		<div class="span4" onclick="$(location).attr('href','http://virages.agencealbum.com/des-formations-certifiantes/')">
		  <h2 class="title-accueil jaune"><img class="smallimg" src="<?php bloginfo( 'template_directory' ); ?>/img/ico_formation_big.png" / class="suite"><span>DES FORMATIONS<br/> CERTIFIANTES ?</span></h2>
		  <p class="para-accueil">La formation VIRAGES est scindée en deux parties. 
			Une formation de base (initiation et explorations) qui aboutit à une évaluation permettant de poursuivre avec les étapes d'approfondissement (perfectionnement et consolidation).<a href="http://virages.agencealbum.com/des-formations-certifiantes/" class="suite"><span>→</span> SUITE</a></p>
		</div><!--/span-->
		<div class="span4" onclick="$(location).attr('href','http://virages.agencealbum.com/pour-qui/')">
		  <h2 class="title-accueil bleu"><img class="smallimg" src="<?php bloginfo( 'template_directory' ); ?>/img/icoQui_big.png" /><span>POUR QUI ?</span></h2>
		  <p class="para-accueil">Cette formation s’adresse à vous si…<br/>
			Vous exercez dans un contexte qui vous confronte à des problèmes humains : dans le champs médico-psycho-social ou dans le domaine de l'entreprise ou d'une institution.<a href="http://virages.agencealbum.com/pour-qui/" class="suite"><span>→</span> SUITE</a>
		</p>
		</div><!--/span-->
	  </div><!--/row-->
	  <div class="row-fluid show-grid lignes">
		<div class="span4" onclick="$(location).attr('href','http://virages.agencealbum.com/virages-sur-mesure/')">
		  <h2 class="title-accueil2 beige"><img class="smallimg" src="<?php bloginfo( 'template_directory' ); ?>/img/icoTherapy_big.png" /><span>VIRAGES SUR MESURE</span></h2>
		  <p class="para-accueil">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte.<a href="http://virages.agencealbum.com/virages-sur-mesure/" class="suite"><span>→</span> SUITE</a></p>
		</div><!--/span-->
		<div class="span4" onclick="$(location).attr('href','http://virages.agencealbum.com/qui-intervient/')">
		  <h2 class="title-accueil2 ciel"><img class="smallimg" src="<?php bloginfo( 'template_directory' ); ?>/img/icoIntervenants_big.png" / class="suite"><span>QUI INTERVIENT ?</span></h2>
		  <p class="para-accueil">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. <a href="http://virages.agencealbum.com/qui-intervient/" class="suite"><span>→</span> SUITE</a></p>
		</div><!--/span-->
		<div class="span4" onclick="$(location).attr('href','http://virages.agencealbum.com/blog/')">
		  <h2 class="title-accueil2 rose"><img class="smallimg" src="<?php bloginfo( 'template_directory' ); ?>/img/icoBlog_big.png" /><span>BLOG</span></h2>
		  <p class="para-accueil">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. <a href="http://virages.agencealbum.com/blog/" class="suite"><span>→</span> SUITE</a></p>
		</div><!--/span-->
	  </div><!--/row-->
		<?php get_template_part('newsletter-accueil');?>
	</div><!--/span-->
	</div><!--/row-->
	</div><!--/.fluid-container-->	
<?php// get_sidebar(); ?>
<?php get_footer(); ?>
