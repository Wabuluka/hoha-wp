<?php
    /**
     * Program Front Template 
     */
?>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Projects Completed </h2>
            <p></p>
            </div>
        </div>
        <div class="row  ">
            <?php 
                $args = array(
                    'post_type'         => 'post',
                    'post_status'       => 'publish',
                    'category_name'     => 'project',
                    'posts_per_page'    => '3'    
                );
                $arr_posts = new WP_Query($args);
                if ( $arr_posts->have_posts() ) {
                    while ( $arr_posts->have_posts() ) {
                        $arr_posts->the_post(); 
                        ?>
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
                                <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo $backgroundImg[0]; ?>');"></a>
                                <div class="text p-4 d-block">
                                <div class="meta mb-3">
                                    <div>
                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
                                    </div>
                                    <!-- <div><a href="#">Admin</a></div> -->
                                    <!-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                                </div>
                                <h3 class="heading mt-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php //echo wp_strip_all_tags( get_the_excerpt(), true ); ?></p>
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