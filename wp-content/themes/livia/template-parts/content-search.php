<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package livia
 */

?>

<div class="col-12 col-sm-4">
        <?php if ( has_post_thumbnail() ) { ?>
           <div class="thumnails">
             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
           </div>
         <?php } ?>
        
            <h4>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
        <div class="articlecontent">
          <?php the_excerpt(); ?>
          <div class="row">
            <div class="col-lg-6">
                <div class="btn btn-outline-success">
                  <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
            <div class="col-lg-6">
              <i class="fas fa-share-alt"></i>
              <?php echo do_shortcode('[Sassy_Social_Share]');?>
            </div>
          </div>
        </div>
</div><!-- #post-<?php the_ID(); ?> -->
