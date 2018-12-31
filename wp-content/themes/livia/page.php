<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package livia
 */

get_header();
?>

<?php 
if ( has_post_thumbnail() ) { ?>
	<div id="topbanner" class="container-fluid">
      <div class="row">
	<?php the_post_thumbnail('featured-banner'); ?>
		<div class="breadbox">
			<h3><?php the_title(); ?></h3>
			<?php if(function_exists('bcn_display'))
				{
				    bcn_display();
				}
			?>
	    	</div>
	     </div>
      </div>
<?php } else{ ?>
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
<?php }?>

<div class="clearfix"></div>
	<div id="" class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;

				endwhile; // End of the loop.
				?>
          </div>
		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
