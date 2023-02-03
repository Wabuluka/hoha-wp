<?php
    /**
     * Services Front Template 
     */
?>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Programs</h2>
            </div>
        </div>
        <div class="row d-flex">
            <?php 
                $args = array(
                    'post_type'         => 'post',
                    'post_status'       => 'publish',
                    'category_name'     => 'programs',
                    'posts_per_page'    => ''    
                );
                $arr_posts = new WP_Query($args);
                if ( $arr_posts->have_posts() ) {
                    while ( $arr_posts->have_posts() ) {
                        $arr_posts->the_post(); 
                        ?>
            <div class="col-lg-4 mb-sm-4 h-100 ftco-animate">
                <div class="staff">
                    <div class="mb-4">
                        <div class="info ml-4">
                        <h3 class="heading mt-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <!-- <span class="position">Donated Just now</span> -->
                            <div class="text">
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            <?php
                    } // end while
                } // end if
            ?>
     
        </div>
    </div>
</section>