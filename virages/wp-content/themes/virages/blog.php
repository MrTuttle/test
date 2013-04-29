<?php
/*
Template Name: Blog
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
				<?php get_template_part('menu_pagesInternes');?>
			</div>
			<div class="span9">
				<div class="row-fluid show-grid">
					<?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;  
					$postslist = query_posts("posts_per_page=10&paged=$paged"); 
					foreach ($postslist as $post) :  setup_postdata($post); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content actu clearfix">
								<h4 class="bebas"><?php the_title(); ?></h4>
								<p class="the_date"><?php the_date(); the_time(); ?></p>
								<?php the_content(); ?>
							</div><!-- .entry-content -->
						</div><!-- #post-## -->
					<?php endforeach; ?>
					<?php wp_simple_pagination(); ?>
				</div>
			</div>
		</div>
		<?php get_template_part('newsletter');?>
	</div><!--/span-->
	</div><!--/row-->
	</div><!--/.fluid-container-->
<?php// get_sidebar(); ?>
<?php get_footer(); ?>