<?php
    /**
     * Template Name: Projects 
     */
?>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-10 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Programs</h2>
            <!-- <p>AFRICA’S GREATEST RESOURCE IS HER WOMEN, EMPOWERED <br>
                The harsh reality is that many women in Africa have been left to bear the brunt of war, poverty and disease. Millions of our sisters have been abandoned and robbed of all dignity. Uneducated and unemployable, they are left to suffer alone.
            </p> -->
            <!-- <p>But together, we’re changing this by providing adult literacy classes, discipleship, business skills training and job opportunities. As we embrace these women with God’s love, they find hope and purpose.</p> -->
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
                        <div class="col-md-4  ftco-animate">
                            <div class="blog-entry ">
                                <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
                                <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo $backgroundImg[0]; ?>'); cover"></a>
                                <div class="text p-4 d-block">
                                <div class="meta mb-3">
                                    <div>
                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
                                    </div>
                                </div>
                                <h3 class="heading mt-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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