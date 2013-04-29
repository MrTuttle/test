<?php
/*
Template Name: Pages Internes
*/

get_header(); ?>

	<div class="container">
	<div class="row-fluid">
	<div class="span12">
		<div class="span12 entetepageinterne">
			<div class="row-fluid">
				<div class="span3">
				</div>
				<div class="span9">
					<h2 class="title-pageinterne"><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span3">
				<?php get_template_part('adresse_pagesInternes');?>
			</div>
			<div class="span9">
				<div class="row-fluid show-grid">
					<?php
						/* Run the loop to output the page.
						 * If you want to overload this in a child theme then include a file
						 * called loop-page.php and that will be used instead.
						 */
						get_template_part( 'loop', 'page' );
						?>
				</div>
			</div>
		</div>
		<?php get_template_part('newsletter');?>
	</div><!--/span-->
	</div><!--/row-->
	</div><!--/.fluid-container-->	
<?php// get_sidebar(); ?>
<?php get_footer(); ?>
