<?php
/**
 * Main template file
 * 
 * @package hoha
 */
get_header( ); ?>


<?php
    // Start the loop.
    while ( have_posts() ) : the_post(); 
?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<div class="hero-wrap" style="background-image: url('<?php echo $backgroundImg[0]; ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <!-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Blog Details</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog Details</h1> -->
        </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ftco-animate">
                <h2 class="mb-3"><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        </div> <!-- .col-md-8 -->
    </div>
</section>


<?php
    // End the loop.
    endwhile;
?>

<?php get_footer();