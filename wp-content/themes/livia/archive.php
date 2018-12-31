<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package livia
 */get_header();
?>
<div class="container">
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
	</div>
<div class="paged container">
	<div class="row mainarticle">
			<?php
			    $new_loop = new WP_Query( array(
			    'post_type'      => 'post',
			    'posts_per_page' => 2
			    ) );
			?>
			<div class="col-9">
				<div class="row">
			   <?php if ( $new_loop->have_posts() ) :
				$count=0;
				 while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
				 	<?php if ( $new_loop->current_post ==0 ) : ?>
				 	
				 		<div class="col-sm-4"> 
				 		    <h3 class="topheader">
		                     <a  href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
		                    </h3>
		                    <?php the_excerpt();?>
		                </div>
		                <div class="col-sm-8">
				 			<?php if ( has_post_thumbnail() ) { ?>
		               	 	  <div class="topimg">
					             <a href="<?php echo the_permalink(); ?>">
					             	<?php the_post_thumbnail(); ?></a>
					          </div>
				           <?php } ?>
				          </div>
				 		
	               <?php endif; ?>
					  <?php endwhile; else: ?>
				    No posts found
				  <?php endif; ?>
			  <?php wp_reset_query(); ?>
			  </div>
		   </div>

			<div class="col-sm-3">
					<?php if ( $new_loop->have_posts() ) :
						$count=0;
						 while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
						 	<?php if ( $new_loop->current_post >0 ) : ?>
						 	<div class="">
						 		<?php if ( has_post_thumbnail() ) { ?>
		               	 	  <div class="topimg">
					             <a href="<?php echo the_permalink(); ?>">
					             	<?php the_post_thumbnail(); ?></a>
					          </div>
				           <?php } ?>
			               		<h4 class="topheader"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
			               		<?php the_excerpt(); ?>
			               	</div>
			               <?php endif; ?>
						  <?php endwhile; else: ?>
					    No posts found
					<?php endif; ?>
					<?php wp_reset_query(); ?>
      </div>
    </div>
</div>

<div id="" class="container">
	<div id="" class="row">
	<?php
			    $new_loop = new WP_Query( array(
			    'post_type'      => 'post',
			    'offset'         =>2,
			    'posts_per_page' => -1
			    ) );
			?>
			   <?php if ( $new_loop->have_posts() ) :
				$count=0;
				 while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
				 	<?php if ( $new_loop->current_post ==0 ) : ?>
				 	  <div class="col-sm-3">
				 			<?php if ( has_post_thumbnail() ) { ?>
		               	 	  <div class="topimg">
					             <a href="<?php echo the_permalink(); ?>">
					             	<?php the_post_thumbnail(); ?></a>
					          </div>
				           <?php } ?>
				 		    <h3 class="topheader">
		                     <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
		                    </h3>
		                    <?php the_excerpt();?>
		                    <div class="sharbtn">
		                    	<div class="shar">
		                    	  <i class="fas fa-share-alt"></i> 
		                    	</div>
		                    	<div class="shar">
		                    	<?php echo do_shortcode('[Sassy_Social_Share]'); ?>
		                        </div>
		                    </div>
		                </div>
	               <?php endif; ?>
					  <?php endwhile; else: ?>
				    No posts found
				  <?php endif; ?>
			  <?php wp_reset_query(); ?>
	</div><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
