<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

	<div class="paged container">
		<hr>
		<div id="" class="row">

		<?php if ( have_posts() ) : ?>
          <div class="col-12">
				<header class="page-header">
					<h3 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Livia Results : %s', 'livia' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h3>
				</header><!-- .page-header -->
            </div>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
