<?php get_header(); ?>
  <div class="mainbanner container-fluid">
    <div class="row">
      <div class="liviaslider">
        <?php echo do_shortcode('[twabc-carousel showindicator="numbered"]');?>
      </div>
  </div>
  </div>


<section class="featuresSection">
  <div class="container">
      <div class="row">
        <div class="serviceBlock col-lg-12 text-center">
          <h1>Our Solutions</h1>
          <p><?php echo get_field('our_serce_description'); ?></p>
      </div>
              <div class="col-lg-4">
                <div class="block-icon-classic">
                  <div class="icon">
                    <i class="fas fa-tablets"></i>
                  </div>
                  <div class="media-body"> 
                    <h5><a href="<?php echo home_url() ?>/livia-dawa"> Livia Dawa</a></h5>
                    <p><?php echo get_field('_livia_dawa'); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="block-icon-classic">
                   <div class="icon">
                    <i class="fas fa-plus-square"></i>
                  </div>
                  <div class="media-body">
                    <h5><a href="<?php echo home_url() ?>/livia-chemist">Livia Chemist</a></h5>
                    <p><?php echo get_field('livia_chemist'); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="block-icon-classic">
                   <div class="icon">
                   <i class="fas fa-user-md"></i>
                  </div>
                  <div class="media-body">
                    <h5><a href="<?php echo home_url() ?>/livia-md">Livia MD</a></h5>
                    <p><?php echo get_field('livia_md'); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="block-icon-classic">
                  <div class="icon">
                    <i class="fas fa-briefcase-medical"></i>
                  </div>
                  <div class="media-body"> 
                    <h5><a href="<?php echo home_url() ?>/livia-insurance">Livia Insurance</a></h5>
                    <p><?php echo get_field('livia_insurance'); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="block-icon-classic">
                   <div class="icon">
                    <i class="fas fa-stethoscope"></i>
                  </div>
                  <div class="media-body">
                    <h5><a href="<?php echo home_url() ?>/livia-tech-hub">Livia Tech Hub</a></h5>
                    <p><?php echo get_field('livia_tech_hub'); ?></p>
                  </div>
                </div>
              </div>
            </div>
 </div>
  </div>
</section>

<div class="container">
      <hr>
  <div class="row">
    <div class="col-12 text-center">
      <div class="convheader">
      <h1>Your medicine at the best price possible, with the utmost convenience!</h1>
      </div>
    </div>
    <div class="col-sm-4">
        <div class="convbx">
           <div class="iconx">
            <i class="fas fa-3x fa-award"></i>
           </div>
          <h2>Price</h2>
          <p>Get the best medicines at the best available prices through our reverse didding process</p>
      </div>
    </div>
    <div class="col-sm-4">
       <div class="convbx">
         <div class="iconx">
        <i class="fas fa-3x fa-lock"></i>
        </div>
        <h2>Security</h2>
<!--         <p>Only  app in Kenya to have the data and functionality on a HIPAA certified server</p>
 -->        <p>Only app that offers best and timely <br/> information</p>
      </div>
    </div>
    <div class="col-sm-4">
       <div class="convbx">
         <div class="iconx">
          <i class="fas fa-3x fa-people-carry"></i>
         </div>
        <h2>Convenience</h2>
        <P>Consult with a doctor, get prescription, and order for medicine delivered to where you are</P>
       </div>
    </div>

  </div>
</div>

<section class="maincont">
<div class="container">
  <div id="" class="row">
    <div class="col-md-9 expertsbx">
      <div class="row">
        <header class="xheader col-12">
           <h3>Health Experts Take </h3>
         </header>
         <div class="clearfix"></div>
         <?php 
          $the_query = new WP_Query(array(
                'posts_per_page' => 6,
                'category_name' => 'our-experts', // this is the category SLUG
            ));
         ?>
            <?php if ( $the_query->have_posts() ) :
             while ( $the_query->have_posts() ) : $the_query->the_post(); ?>          
             <div class="col-6">
              <div class="xpertbx">
                <div class="row">
                  <div class="col-sm-6">
                    <?php if ( has_post_thumbnail() ) { ?>
                       <div class="xpertthumb">
                         <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail('expert-thumb'); ?>
                          </a>
                       </div>
                     <?php } ?>
                  </div>
                  <div class="col-sm-6">
                     <div class="xcontent">
                      <h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h4>
                         </div>
                       <div class="xmore">
                         <i class="fas fa-long-arrow-alt-right"></i>
                          <a href="<?php the_permalink(); ?>">Learn More</a>
                       </div>
                  </div>
                </div>
              </div>
           </div>
            <?php endwhile; else: ?>
            No posts found
          <?php endif; ?>
           <?php wp_reset_query(); ?>
         </div>
    </div>
    <div class="col-md-3">
        <div class="inner sidebarbx">
                <div class="tile">
                      <?php if ( is_active_sidebar( 'clients_advisors' ) ) : ?>
                        <div id="tile">
                           <?php dynamic_sidebar( 'clients_advisors' ); ?>
                        </div>
                      <?php endif; ?>
                </div><!-- /tile -->

                <div class="tile">
                   <?php if ( is_active_sidebar( 'physicians' ) ) : ?>
                        <div id="tile">
                           <?php dynamic_sidebar( 'physicians' ); ?>
                        </div>
                      <?php endif; ?>
                </div><!-- /tile -->

                <div class="tile">
                    <?php if ( is_active_sidebar( 'pharmacists' ) ) : ?>
                        <div id="tile">
                           <?php dynamic_sidebar( 'pharmacists' ); ?>
                        </div>
                      <?php endif; ?>
                </div><!-- /tile -->
        
                <div class="tile">
                    <?php if ( is_active_sidebar( 'careers' ) ) : ?>
                        <div id="tile">
                           <?php dynamic_sidebar( 'careers' ); ?>
                        </div>
                      <?php endif; ?>                  
                </div><!-- /tile -->
      </div>
    </div>
  </div>
</div>
</section>



<!--Download Area Start-->
<div class="download-area download-blue">
    <div class="download-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h1>Download Our <span>App</span></h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon/title-icon-white.png" alt="">
                    <p>Livia is only available for download in Kenya.<br> We are working hard to be present in other Countries.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="download-button-wrapper">
                    <a href="" class="download-btn">
                       <i class="fab fa-google-play"></i>
                        <div class="icontext">Available on the <span class="large-text">Play Store</span></div>
                    </a>
                </div>    
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

