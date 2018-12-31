<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package livia
 */

get_header();
?>

<div id="" class="container">
		<div class="row">
		<div class="col">
			<div class="breadnormal">
				<?php if(function_exists('bcn_display'))
					{
					    bcn_display();
					}
				?>
		     </div>
	       </div>				
		</div>
		<div class="row">
		<?php
		while ( have_posts() ) :
			the_post(); ?>		
			<div id="post" class="col-sm-8">
				<header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h3 class="entry-title">', '</h3>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							livia_posted_on();
							livia_posted_by();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->
				
					<?php if ( has_post_thumbnail() ) { ?>
               	 	  <div class="singleimg">
			             <a href="<?php echo the_permalink(); ?>">
			             	<?php the_post_thumbnail('single-thumb'); ?>
			             </a>
					<h6 class="catname">
					   <?php
						$category = get_the_category();
						$first_category = $category[0];
						echo sprintf( '<a href="%s">%s</a>', get_category_link( $first_category ), $first_category->name );?> 
					</h6>
			          </div>
				    <?php } ?>
				<div class="entry-content">
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'livia' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					?>
				</div><!-- .entry-content -->
			

	        	<?php // the_post_navigation();
					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;

				endwhile; ?>
			<div class="row">
				<div class="col-12">
                   <hr>
					<h4>
					<?php
						$category = get_the_category();
						$first_category = $category[0];
						echo sprintf( '<a href="%s">%s</a>', get_category_link( $first_category ), $first_category->name );?> 
					</h4>
				</div>
			</div>
		   <div class="row">
			<?php
			$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 6, 'post__not_in' => array($post->ID) ) );
			if( $related ) foreach( $related as $post ) {
			setup_postdata($post); ?>
			    <div class="col-sm-4 relatedbx">
             	<?php if ( has_post_thumbnail() ) { ?>
               	 	  <div class="relatedimg">
			             <a href="<?php echo the_permalink(); ?>">
			             	<?php the_post_thumbnail(); ?></a>
			          </div>
				    <?php } ?>
					<div class=relatedcon">
						 <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
						<?php the_excerpt(); ?>
			    	</div>
				 </div>
			<?php }
			wp_reset_postdata(); ?>
		</div>

		</div>
		<div class="col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
