<?php get_header();?>
<div class="container">
	<div class="row">
		<?php if ( have_posts() ) : ?>
		<div class="item col-sm-4">
		      <div class="inner insight list_block">
		       <?php 
		        	while ( have_posts() ) :
		        		the_post();
		        ?>
		        <div class="list_block_heading clearfix">
		        <?php if ( has_post_thumbnail() ) { ?>
		           <div class="thumnails">
		             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumnail'); ?></a>
		           </div>
		         <?php } ?>
		        
		            <h2>
		              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		            </h2>
		        </div>
		        <div class="articlecontent">
		          <?php the_excerpt(); ?>
		          <div class="row">
		            <div class="col-sm-6">
		                <div class="btn btn-outline-success">
		                  <a href="<?php the_permalink(); ?>">Read More</a>
		                </div>
		            </div>
		            <div class="col-sm-6">
		              <i class="fas fa-share-alt"></i>
		              <?php echo do_shortcode('[Sassy_Social_Share]');?>
		            </div>
		          </div>
		        </div>
		     <?php endwhile; endif; ?>
		 </div>
    </div>
	</div>
</div>
<?php get_footer();?>