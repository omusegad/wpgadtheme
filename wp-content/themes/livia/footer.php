<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package livia
 */

?>


<footer class="mainfooter">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="footer-content">
          <h3>Quick links</h3>
		      <?php 
				wp_nav_menu( array(
				    'menu'           => 'quicklinksmenu', // Do not fall back to first non-empty menu.
				    'theme_location' => 'quicklinks',
				    'fallback_cb'    => false // Do not fall back to wp_page_menu()
				) );
		      ?>
        </div>
      </div>
      <div class="col-md-3" >
        <div class="footer-content">
          <h3>About Livia</h3>
          <?php 
				wp_nav_menu( array(
				    'menu'           => 'product-menu', // Do not fall back to first non-empty menu.
				    'theme_location' => 'products',
				    'fallback_cb'    => false // Do not fall back to wp_page_menu()
				) );
		      ?>
        </div>
      </div>
      <div class="col-md-3" >
        <div class="footer-content">
              <h3>Physical Address</h3>
           <p>Neotech Kenya Ltd.<br/>
                 Links Plaza, 5th Floor, <br/>
                 Links Road, Mombasa<br/>
                 Kenya
               </p>
        	 
        </div>
      </div>
      <div class="col-md-3" >
        <div class="footer-content">
         <!--  <h3>Policies</h3> -->
      
           <h3>Contacts</h3>
          <p>Phone: +254 743 685 423 <br/>
            Email:  <a href="mailto:support@liviaapp.com" target="_top">support@liviaapp.com</a>
          </p>
          <?php 
            // wp_nav_menu( array(
            //     'menu'           => 'resource-menu', // Do not fall back to first non-empty menu.
            //     'theme_location' => 'resource',
            //     'fallback_cb'    => false // Do not fall back to wp_page_menu()
            // ) );
          ?>
          <?php 
        wp_nav_menu( array(
            'menu'           => 'company-menu', // Do not fall back to first non-empty menu.
            'theme_location' => 'company',
            'fallback_cb'    => false // Do not fall back to wp_page_menu()
        ) );
          ?>
        </div>
      </div>
    </div>
  </div>
</footer>
<footer class="btm-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
      <ul class="social-network social-circle float-left">
          <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
      </ul>
    </div>
    <div class="col-sm-8">
      <div class="footerInfo float-right">
        <p>4th Floor, Links Plaza, Links Road, Nyail, Mambasa, Kenya © All right Reversed.Livia</a></p>
      </div>
    </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="<?php echo get_stylesheet_directory_uri()?>/js/main.js" type="text/Javascript"></script> 
<script type="text/javascript">
</script>

<?php wp_footer(); ?>
</body>
</html>
