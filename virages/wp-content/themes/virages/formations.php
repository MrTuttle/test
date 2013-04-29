<?php
/*
Template Name: Formations
*/

get_header(); ?>

	<div class="container">
	<div class="row-fluid">
	<div class="span12">
		<div class="span12 entetepageinterne">
			<div class="row-fluid">
				<div class="span2">
				</div>
				<div class="span10">
					<h2 class="title-pageinterne">FORMATIONS</h2>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span2">
				<?php get_template_part('menu_pagesInternes');?>
			</div>
			<div class="span10">
				<div class="row-fluid show-grid">
					<div class="span4">
					<?php
					/* Run the loop to output the page.
					 * If you want to overload this in a child theme then include a file
					 * called loop-page.php and that will be used instead.
					 */

					query_posts( array ( 'post_type' => 'formationsdebase', 'orderby' => 'wpcf-numero-de-formation', 'order' => 'ASC') );
					$compteur = 1;
					while ( have_posts() ) : the_post();
					?>
						<div id="post-<?php the_ID(); ?>" class="listing-formation">
						<span class="sub-title">FORMATION DE BASE</span>
						<h2 class="post-title"><span class="numeros_formation"><?php echo $compteur; ?></span> <a href="<? $url_site?>?p=<? the_ID();?>" rel="bookmark" title="<?php printf(__('%s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
						<div class="listing-text">
							<div class="description-formation">
							<?php 
							the_excerpt();
							?>
							</div>
							<div class="infos_formation">
								<div class="span3"><?php echo types_render_field( "numero-de-formation",''); ?> <p>Journées</p></div>
								<div class="span4"><?php echo types_render_field( "nombre-de-participants",''); ?> <p>Participants</p></div>
								<div class="span5"><a href="<? $url_site?>?p=<? the_ID();?>" rel="bookmark" title="<?php printf(__('%s', 'responsive'), the_title_attribute('echo=0')); ?>" class="btn btn-brown">savoir +</a></div>
							</div>
							<div style="clear:both;"></div>
						</div><!-- end of .post-entry -->
						</div>
					<?php 
						$compteur++;
					endwhile; ?>
					</div>
					<div class="span4">
					<?php
					/* Run the loop to output the page.
					 * If you want to overload this in a child theme then include a file
					 * called loop-page.php and that will be used instead.
					 */
					query_posts( array ( 'post_type' => 'approfondissement', 'orderby' => 'wpcf-numero-de-formation', 'order' => 'ASC') );
					$compteur = 1;
					while ( have_posts() ) : the_post();	;?>
						<div id="post-<?php the_ID(); ?>" class="listing-approfondissement">
						<span class="sub-title">APPROFONDISSEMENT</span>
						<h2 class="post-title"><span class="numeros_formation"><?php echo $compteur; ?></span> <a href="<? $url_site?>?p=<? the_ID();?>" rel="bookmark" title="<?php printf(__('%s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
						<div class="listing-text">
							<div class="description-formation">
							<?php 
							the_excerpt();
							?>
							</div>
							<div class="infos_formation">
								<div class="span3"><?php echo types_render_field( "numero-de-formation",''); ?><p>Journées</p></div>
								<div class="span4"><?php echo types_render_field( "nombre-de-participants",''); ?><p>Participants</p></div>
								<div class="span5"><a href="<? $url_site?>?p=<? the_ID();?>" rel="bookmark" title="<?php printf(__('%s', 'responsive'), the_title_attribute('echo=0')); ?>" class="btn btn-brown">savoir +</a></div>
							</div>
							<div style="clear:both;"></div>
						</div><!-- end of .post-entry -->
						</div>
					<?php 
						$compteur++;
					endwhile; ?>
					</div>
					<div class="span4">
					<?php
					/* Run the loop to output the page.
					 * If you want to overload this in a child theme then include a file
					 * called loop-page.php and that will be used instead.
					 */
					query_posts( array ( 'post_type' => 'consolidation', 'orderby' => 'wpcf-numero-de-formation', 'order' => 'ASC') );
					$compteur = 1;
					while ( have_posts() ) : the_post();	;?>
						<div id="post-<?php the_ID(); ?>" class="listing-consolidation">
						<span class="sub-title">CONSOLIDATION</span>
						<h2 class="post-title"><span class="numeros_formation"><?php echo $compteur; ?></span> <a href="<? $url_site?>?p=<? the_ID();?>" rel="bookmark" title="<?php printf(__('%s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
						<div class="listing-text">
							<div class="description-formation">
							<?php 
							the_excerpt();
							?>
							</div>
							<div class="infos_formation">
								<div class="span3"><?php echo types_render_field( "numero-de-formation",''); ?><p>Journées</p></div>
								<div class="span4"><?php echo types_render_field( "nombre-de-participants",''); ?><p>Participants</p></div>
								<div class="span5"><a href="<? $url_site?>?p=<? the_ID();?>" rel="bookmark" title="<?php printf(__('%s', 'responsive'), the_title_attribute('echo=0')); ?>" class="btn btn-brown">savoir +</a></div>
							</div>
							<div style="clear:both;"></div>
						</div><!-- end of .post-entry -->
						</div>
					<?php 
						$compteur++;
					endwhile; ?>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('newsletter');?>
	</div><!--/span-->
	</div><!--/row-->
	</div><!--/.fluid-container-->	
<?php// get_sidebar(); ?>
<?php get_footer(); ?>
