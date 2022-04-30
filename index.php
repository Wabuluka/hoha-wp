<?php
/**
 * Main template file
 * 
 * @package hoha
 */
get_header( ); ?>

<div class="hero-wrap" style="background-image: url('<?php echo HOHA_DIR_URI .'/src/images/bg_12.jpg'; ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Welcome to Hands of Hope Africa Family</h1>
            </div>
        </div>
    </div>
</div>
<?php
    get_template_part( 'template/front-body/board' );
?>

<section class="ftco-section ">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Welcome to HOHA</h2>
            <p>With immense gratitude, HOHA Family would like to wholeheartedly applaud the indispensable technical and financial support provided 
                by Individual sponsors, staff, support teams, groups, ministries, organizations and partners, in Building a 
                Vibrant resilient and self-reliant sustainable communities throughout the years.</p>
                <p><a href="#" class="btn btn-white px-3 py-2 mt-2">About Us</a></p>
          </div>
        </div>
    </div>
</section>

<?php
    get_template_part( 'template/front-body/missions' );
?>

<?php
    get_template_part( 'template/front-body/projects' );
?>
<?php
    get_template_part( 'template/front-body/programs' );
?>

<section class="ftco-gallery">
    	<div class="d-md-flex">
	    	<a href="<?php echo HOHA_DIR_URI .'/src/images/bg_12.jpg'; ?>" 
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"   
                style="background-image: url(<?php echo HOHA_DIR_URI .'/src/images/bg_12.jpg'; ?>);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="<?php echo HOHA_DIR_URI .'/src/images/hohafamily.jpg'; ?>" 
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" 
                style="background-image: url(<?php echo HOHA_DIR_URI .'/src/images/hohafamily.jpg'; ?>);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="<?php echo HOHA_DIR_URI .'/src/images/hohababy.jpg'; ?>" 
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" 
                style="background-image: url(<?php echo HOHA_DIR_URI .'/src/images/hohababy.jpg'; ?>);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="<?php echo HOHA_DIR_URI .'/src/images/hohatailoring.jpg'; ?>" 
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" 
                style="background-image: url(<?php echo HOHA_DIR_URI .'/src/images/hohatailoring.jpg'; ?>);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
    	</div>
    	<div class="d-md-flex">
	    	<a href="<?php echo HOHA_DIR_URI .'/src/images/sanitary.png'; ?>" 
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"   
                style="background-image: url(<?php echo HOHA_DIR_URI .'/src/images/sanitary.png'; ?>);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="<?php echo HOHA_DIR_URI .'/src/images/hohatvegetables.jpg'; ?>"    
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" 
                style="background-image: url(<?php echo HOHA_DIR_URI .'/src/images/hohavegetables.jpg'; ?>);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="<?php echo HOHA_DIR_URI .'/src/images/hohagirl.jpg'; ?>" 
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" 
                style="background-image: url(<?php echo HOHA_DIR_URI .'/src/images/hohagirl.jpg'; ?>">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="<?php echo HOHA_DIR_URI .'/src/images/hohaclass.jpg'; ?>" 
                class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" 
                style="background-image: url(<?php echo HOHA_DIR_URI .'/src/images/hohaclass.jpg'; ?>);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    </div>
    </section>


<?php get_footer();