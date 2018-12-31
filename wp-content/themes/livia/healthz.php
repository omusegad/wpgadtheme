<?php
/**
 * Template Name: Health A-Z Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
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
  <div class="container">
      <div class="row">
      	<hr>
        <div class="col-lg-12">
                <ul class="taglistpg">
                <?php
                    $posttags =  get_tags(array('get'=>'all'));
                    $count=0; $sep='';
                    if ($posttags) { ?>
                      <?php  foreach($posttags as $tag) {
                        $count++;
                        echo $sep . '<li><a href="'.get_term_link($tag).'">'.$tag->name.'</a></li>';
                        $sep = '';
                        if( $count > 27 ) break; } ?>
                   
                     <?php }?>
                 </ul>
        </div>
      </div>
 </div>


<?php get_footer(); ?>