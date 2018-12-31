<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package livia
 */

get_header();
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
<div id="" class="container">
	<div class="row mainarticle">
			<?php
			    $new_loop = new WP_Query( array(
			    'post_type' => 'post',
			    'posts_per_page' => 1
			    ) );
			?>
			<?php if ( $new_loop->have_posts() ) :
				 while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
				 	<div class="col-sm-4">
				 		<h1 class="firstitle">
	                     <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
	                    </h1>
						<div class="topcontent">
	                 </div><?php the_excerpt(); ?>
	               </div>
	               <div class="col-sm-8">
	               	 <?php if ( has_post_thumbnail() ) { ?>
	               	 	  <div class="toparticleimg">
				             <a href="<?php echo the_permalink(); ?>">
				             	<?php the_post_thumbnail('blog-main-thumb'); ?>
				             </a>
				          </div>
				      <?php } ?>
	               </div>
				  <?php endwhile; else: ?>
			    No posts found
			<?php endif; ?>
			<?php wp_reset_query(); ?>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h3 class="blogsect">Top Stories</h3>
		</div>
	</div>
	<div class="row">
			<?php
			    $new_loop = new WP_Query( array(
			    'post_type'      => 'post',
			    'category__in'   =>19, 
			    'offset'         =>1, 
			    'posts_per_page' => 7
			    ) );
			?>
			<div class="col-6 col-sm-6">
			   <?php if ( $new_loop->have_posts() ) :
				$count=0;
				 while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
				 	<?php if ( $new_loop->current_post ==0 ) : ?>
				 		<div class="toparticle">
				 			<?php if ( has_post_thumbnail() ) { ?>
		               	 	  <div class="topimg">
					             <a href="<?php echo the_permalink(); ?>">
					             	<?php the_post_thumbnail('top-blog-main-thumbb'); ?></a>
					          </div>
				           <?php } ?>
				          
				           	<h3>
		                     <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
		                    </h3>
		                    <?php the_excerpt(); ?>
				 		</div>
	               <?php endif; ?>
					  <?php endwhile; else: ?>
				    No posts found
				  <?php endif; ?>
			  <?php wp_reset_query(); ?>
		   </div>
		     <div class="col-6 col-sm-6">
			   <div class="row">
					<?php if ( $new_loop->have_posts() ) :
						$count=0;
						 while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
						 	<?php if ( $new_loop->current_post >0 ) : ?>
						 	<div class="col-4 toparticle">
						 			<?php if ( has_post_thumbnail() ) { ?>
				               	 	  <div class="topimg">
							             <a href="<?php echo the_permalink(); ?>">
							             	<?php the_post_thumbnail(''); ?></a>
							          </div>
						           <?php } ?>
						           	<h5>
				                     <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
				                    </h5>
			               	</div>
			               <?php endif; ?>
						  <?php endwhile; else: ?>
					    No posts found
					<?php endif; ?>
				<?php wp_reset_query(); ?>
		    </div>
	    </div>
    </div>
</div>

<div class="container">
	<hr>
	<div class="row">
		<div class="col-12 tendtop">
			<h3>Trending Topics</h3>
		</div>
		  <div class="topstories">
			<?php
			    $new_loop = new WP_Query( array(
			    'post_type'      => 'post',
			    'category__in'   =>20, 
			    'offset'         =>1, 
			    'posts_per_page' => 11
			    ) );
			?>
			<div class="col-12 col-sm-12">	
				<div class="row trendtitle">
					<?php $countt = 1 ?>
			      <?php if ( $new_loop->have_posts() ) :
				     while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
		                    <div class="col-sm-3">
		                    	<div class="cont"><?php echo $countt++ ?></div>
		                    	<a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
		                    </div>
					  <?php endwhile; else: ?>
				    No posts found
				  <?php endif; ?>
				  </div>
			     <?php wp_reset_query(); ?>
			 
		   </div>
	    </div>
      </div>
      <hr>
 </div>

<div id="" class="container healthlives">
	<div class="row">
			<div class="col-12">
			  <h3>Healthy Living</h3>
			</div>
	</div><!-- #primary -->
    <div class="row">
			  <?php 
			  $categories =  get_categories('child_of=22&hide_empty=0&number=6');  
				foreach  ($categories as $category) { ?>
				
				  <?php foreach (get_posts('cat='.$category->term_id.'&posts_per_page=1') as $post) {
				        setup_postdata( $post ); ?>
                        <div class="col-sm-3">
				 				<div class="healtyimg">
					 			<?php if ( has_post_thumbnail() ) { ?>
						              <a href="<?php echo the_permalink(); ?>">
						             	<?php the_post_thumbnail(); ?>
						             	</a>
					             <?php } ?>
				               </div>
				               	 <small><?php echo $category->name; ?></small>
					             <h4>
			                        <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
			                    </h4>
		                  </div>
				       <?php  }  ?>
				  <?php } ?>
		   </div>
</div>


<?php
//get_sidebar();
get_footer();
