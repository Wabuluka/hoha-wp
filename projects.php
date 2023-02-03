<?php
/**
 * Template Name: Projects
 * 
 * @package hoha
 */
get_header( ); ?>
<div class="hero-wrap" style="background-image: url('<?php echo HOHA_DIR_URI .'/src/images/about.jpg'; ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <!-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> -->
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Projects by HOHA</h1>
            </div>
        </div>
    </div>
</div>

<?php
    get_template_part( 'template/progs/projects' );
?>


<?php get_footer();