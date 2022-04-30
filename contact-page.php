<?php
/**
 * Template Name: Contact Hoha
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
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex ftco-animate">
    				<div class="img img-about align-self-stretch" style="background-image: url('<?php echo HOHA_DIR_URI .'/src/images/sanitary.png'; ?>'); width: 100%;"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 ftco-animate">
    				<h2 class="mb-4">Contact Us</h2>
    				
    				
    			</div>
    		</div>
    	</div>
    </section>

<?php
    get_template_part( 'template/front-body/board' );
?>





<?php get_footer();