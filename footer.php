<?php
/**
 * Main Footer file
 * 
 * @package hoha
 */
?>
    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">

        <div class="row">
          <div class="col-md-12 text-center mb-5">
            <img src="<?php echo HOHA_DIR_URI .'/src/images/hohalogo.jpg'; ?>" alt="">
          
          </div>
        </div>


        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Registration NO. JJA/12/2020/00473 is a women led community Organisation acting for social cohesion and local development in Uganda and Africa at large.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>

            
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Projects</h2>
              <?php 
                $args = array(
                    'post_type'         => 'post',
                    'post_status'       => 'publish',
                    'category_name'     => 'project',
                    'posts_per_page'    => 2    
                );
                $arr_posts = new WP_Query($args);
                if ( $arr_posts->have_posts() ) {
                    while ( $arr_posts->have_posts() ) {
                        $arr_posts->the_post(); 
                        ?>
                        <div class="block-21 mb-4 d-flex">
                        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
                          <a class="blog-img mr-4" style="background-image: url(<?php echo $backgroundImg[0]; ?>);"></a>
                          <div class="text">
                            <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="meta">
                              <!-- <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                              <div><a href="#"><span class="icon-chat"></span> 19</a></div> -->
                            </div>
                          </div>
                        </div>
                        <?php
                    } // end while
                } // end if
            ?>
          
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Donate</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
                  <li><div class="gfm-embed" data-url="https://www.gofundme.com/f/one-4-her-campaign-for-1m-sanitary-pads/widget/small/"></div>
                <script defer src="https://www.gofundme.com/static/js/embed.js"></script></li>
	                <!-- <li><span class="icon icon-map-marker"></span><span class="text">Office Location</span></li> -->
	                <!-- <li><a href="#"><span class="icon icon-phone"></span><span class="text">+256 702 658174</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">jane@hoha.org.ug</span></a></li> -->
	              </ul>
                
	            </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



<?php wp_footer();?>    
</body>
</html>