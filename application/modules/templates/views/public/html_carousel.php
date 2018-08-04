<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<!-- Carousel -->
 	<div id="main-slide" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ol class="carousel-indicators visible-lg visible-md">
		  	<li data-target="#main-slide" data-slide-to="0" class="active"></li>
		   <li data-target="#main-slide" data-slide-to="1"></li>
		</ol><!--/ Indicators end-->

		<!-- Carousel inner -->
		<div class="carousel-inner">
		<!-- public/images/jkingsley/photodune-19068088.jpg -->
			<div class="item active" style="background-image:url(public/images/jkingsley/photodune-19068088.jpg)">
           	<div class="slider-content banner-text-shadow">
               <div class="col-md-12 text-center">
                   <h2 class="slide-title animated4"> Who We Are</h2>
                   <h3 class="slide-sub-title animated5">33 years of experience in the Restaurant,<br> Entertainment & Hospitality Industry</h3>	
                   <p class="animated6">
                   	<a href="<?= base_url() ?>about-us" class="slider btn btn-primary">Learn More</a>
                   	<!-- <a href="#" class="slider btn btn-primary border">Get a Quote</a> -->
                   </p>	     
               </div>
           	</div>
		   </div><!--/ Carousel item end -->


		   <div class="item" style="background-image:url(public/images/jkingsley/1495473942000.jpg)">
            <div class="slider-content banner-text-shadow">
              	<div class="col-md-12 text-center">
              		<!-- <div class="slider-text "> -->
					 <h3 class="slide-sub-title animated1">Do you know about</h3>
                     <h2 class="slide-title animated2"> Fight Coverage</h2>
                   	 <h3 class="slide-sub-title animated3">Employee vs Customer... Who Will Pay?</h3>

                   	<p class="animated6"><a href="<?= base_url() ?>assault-and-battery" class="slider btn btn-primary">Learn More</a></p>
                  </div>
              	<!-- </div> -->
            </div>
		    </div><!--/ Carousel item end -->
		    
		</div><!-- Carousel inner end-->

		<!-- Controllers -->
		<a class="left carousel-control" href="#main-slide" data-slide="prev">
	    	<span><i class="fa fa-angle-left"></i></span>
		</a>
		<a class="right carousel-control" href="#main-slide" data-slide="next">
	    	<span><i class="fa fa-angle-right"></i></span>
		</a>

		<span class="down-arrow-transparent"></span>

	</div><!--/ Carousel end -->  
