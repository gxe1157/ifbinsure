<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
	$this->load->view('html_carousel.php');
?>

	<section id="ts-features" class="ts-features">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="intro">
						<h2 class="intro-title">
							<span class="title-head"> WELCOME TO IFBINSURE.COM</span>
						</h2>
						<p class="intro-text" style="font-size: 1.2em;">
							Independent Food and Beverage Insurance Brokers, Inc. has been catering to the restaurant, tavern and beverage insurance industries since 1993, servicing over hundreds of customers.
							<br>Even though you probably have insurance already, it's important that you have a highly experienced insurance professional to review your policy.
						</p>
					</div><!-- Intro end -->

				</div><!-- Col end -->

				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="quote-form">
						<h3>Submit Application Online</h3>
						<p>Thank you for your interest in Independent Food and Beverage Insurance Brokers, Inc. Please submit the information below and someone will contact you shortly.</p> 

						<a href="<?= base_url() ?>app_form"><img src="<?= base_url() ?>public/images/jkingsley/Quote.jpg" class="img-responsive"></a>

		      
					 	<div class="form-group">
							<a href="<?= base_url() ?>app_form">
							<input class="button btn btn-primary" type="button" value="Yes, I would like a quote."></a>
						</div>
					</div><!-- Quote form end -->

				</div><!-- Col end -->

<a name="industries-we-insure"></a>

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- About us end -->

	<section id="product-area" class="product-area" style="background-image:url(
	<?= base_url() ?>public/images/jkingsley/3706.jpg)">
	
		<div class="container">
			<div class="row text-center banner-text-shadow">
				<h2 class="title">
					We've Got You Covered
					<span class="title-head">Industries We Insure</span>
				</h2>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-12">
					<div id="product-slide" class="owl-carousel owl-theme product-slide">
						<div class="item">
					      <div class="product-item">
								<img class="img-responsive" src="<?= base_url() ?>public/images/jkingsley/homepage_restaurant.jpg" class="img-responsive" alt="Restaurant Insurance">
								<h4 class="product-title">Restaurant Insurance</h4>
							<p><a href="<?= base_url() ?>restaurant-insurance" class="btn btn-primary">Learn More</a></p>
							</div><!-- Product item end -->
			      	</div><!-- Item 1 end -->

			      	<div class="item">
					      <div class="product-item">
								<img class="img-responsive" src="<?= base_url() ?>public/images/jkingsley/homepage_barinsurance.jpg" alt="Bar Insurance">
								<h4 class="product-title">Bar Insurance</h4>
							<p><a href="<?= base_url() ?>bar-insurance" class="btn btn-primary">Learn More</a></p>
						  </div><!-- Product item end -->
			      	</div><!-- Item 2 end -->

			      	<div class="item">
					      <div class="product-item">
								<img class="img-responsive" src="<?= base_url() ?>public/images/jkingsley/homepage_nightclubinsurance.jpg" class="img-responsive" alt="Night Club Insurance">
								<h4 class="product-title">Night Club Insurance</h4>
							<p><a href="<?= base_url() ?>night-club-insurance" class="btn btn-primary">Learn More</a></p>
						  </div><!-- Product item end -->
			      	</div><!-- Item 3 end -->
			      	<div class="item">
					      <div class="product-item">
								<img class="img-responsive" src="<?= base_url() ?>public/images/jkingsley/homepage_businessinsurance.jpg" class="img-responsive" alt="Business Insurance">
								<h4 class="product-title">Business Insurance</h4>
							<p><a href="<?= base_url() ?>business-insurance" class="btn btn-primary">Learn More</a></p>
						  </div><!-- Product item end -->
			      	</div><!-- Item 4 end -->
<a name="client-reviews"></a>				
					</div><!-- Product slide -->
				</div><!-- Col end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
		<div class="down-arrow-white"></div>
	</section><!-- Product area end -->

	<section id="testimonial" class="testimonial">
		<div class="container">
			<div class="row text-center">
				<h3 class="title">
					We Love To Hear
					<span class="title-head">Words From Our Customers</span>
				</h3>
			</div><!--/ Title row end -->

			<div class="row">
				<div id="testimonial-slide" class="owl-carousel owl-theme testimonial-slide">
				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="<?= base_url() ?>public/images/clients/testimonial1.png" alt="testimonial">
				         <span class="quote-text">
				           Coming Soon
				         </span><br>
				         <span class="quotes-author">Leslie R. Kelley,</span>
				         <span class="quotes-subtext">Manager, Luina Private Firm</span>
				       	
				     </div>
				  </div><!--/ Item 1 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="<?= base_url() ?>public/images/clients/testimonial2.png" alt="testimonial">
				         <span class="quote-text">
				           Coming Soon
				         </span><br>
				         <span class="quotes-author">Kevin Dixon,</span>
				         <span class="quotes-subtext">Govt. Official</span>
				       	
				     </div>
				  </div><!--/ Item 2 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="<?= base_url() ?>public/images/clients/testimonial3.png" alt="testimonial">
				         <span class="quote-text">
				           Coming Soon
				         </span><br>
				         <span class="quotes-author">Michael J. Higgins,</span>
				         <span class="quotes-subtext">Rtd. Army Officer</span>
				       	
				     </div>
				  </div><!--/ Item 3 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="<?= base_url() ?>public/images/clients/testimonial4.png" alt="testimonial">
				         <span class="quote-text">
				           Coming Soon
				         </span><br>
				         <span class="quotes-author">Tara Gray,</span>
				         <span class="quotes-subtext">Accountant, Private Firm</span>
				       	
				     </div>
				  </div><!--/ Item 4 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="<?= base_url() ?>public/images/clients/testimonial5.png" alt="testimonial">
				         <span class="quote-text">
				           Coming Soon
				         </span><br>
				         <span class="quotes-author">Connie Tinker,</span>
				         <span class="quotes-subtext">Govt. Official</span>
				       	
				     </div>
				  </div><!--/ Item 5 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="<?= base_url() ?>public/images/clients/testimonial6.png" alt="testimonial">
				         <span class="quote-text">
				           Coming Soon
				         </span><br>
				         <span class="quotes-author">Glen E. Green,</span>
				         <span class="quotes-subtext">School Teacher</span>
				       	
				     </div>
				  </div><!--/ Item 6 end -->

				</div><!--/ Testimonial carousel end-->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Testimonial end -->

	<section id="facts" class="facts no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 fact-text">
					<h2 class="" style="font-size: 2.5em; color: #fff;">
						<span class="title-head"> States Available </span>
					</h2>
					<p style="font-size: 1.5em;">Independent Food and Beverage Insurance Brokers, Inc.<br>is licensed to do business in:
					<ul style="font-size: 1.2em;">
						<li>New Jersey</li>
						<li>New York</li>
	  					<li>Pennsylvania</li>
						<li>Connecticut</li>
						<li>North Carolina</li>
	  					<li>Florida</li>
					</ul>	
					</p>
				</div><!-- Col end -->
				<div class="col-md-6 fact-text">
    				<img class="img-responsive" 
    					 src="<?= base_url() ?>public/images/jkingsley/usmap.png"
    					 width="100%">

				</div><!-- Col end -->

			</div><!--/ Content row end -->
<a name="new-news"></a>						
		</div><!--/ Container end -->
	</section><!-- Facts end -->

	<section id="news" class="news">
		<div class="container">
			<div class="down-arrow-color"></div>
			<div class="row text-center">
				<h3 class="title">
					Get Up to Date
					<span class="title-head">Latest Update From News</span>
				</h3>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<img class="img-responsive" src="<?= base_url() ?>public/images/jkingsley/Essex County Map.png" alt="img">
						<div class="post-body">
							<h4 class="post-title">
								<a href="<?= base_url() ?>news#news-pos1">IFB SAVED</a>
								<span style="font-size: .8em;">a white table cloth restaurant $2,100 in Essex County with Alcohol</span>
							</h4>
							<span class="post-item-date">
								<i class="fa fa-clock-o"></i>
							</span>
							<span class="post-item-author">
								<i class="fa fa-user"></i> Admin
							</span>
						</div>	
						<a href="<?= base_url() ?>news#news-pos1" class="btn btn-primary">Read More</a>
					</div><!-- Latest post end -->
				</div><!-- 1st post col end -->

				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<img class="img-responsive" src="<?= base_url() ?>public/images/jkingsley/Essex County Map.png" alt="img">
						<div class="post-body">
							<h4 class="post-title">
								<a href="<?= base_url() ?>news#news-pos2">IFB SAVED</a>
								<span style="font-size: .8em;">a lounge with entertainment $7,500 in Essex County including $1,000,000 Assault & Battery</span>
							</h4>
							<span class="post-item-date">
								<i class="fa fa-clock-o"></i>
							</span>
							<span class="post-item-author">
								<i class="fa fa-user"></i> Admin
							</span>
						</div>	

						<a href="<?= base_url() ?>news#news-pos2" class="btn btn-primary">Read More</a>
					</div><!-- Latest post end -->
				</div><!-- 2nd post col end -->

				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<img class="img-responsive" src="<?= base_url() ?>public/images/jkingsley/Monmouth Cointy Map.png" alt="img">
						<div class="post-body">
							<h4 class="post-title">
								<a href="<?= base_url() ?>news#news-pos3">IFB SAVED</a>
								<span style="font-size: .8em;">a night club $8,000 in Monmouth County including $1,000,000 Liquor and Assault & Battery</span>
							</h4>
							<span class="post-item-date">
								<i class="fa fa-clock-o"></i>
							</span>
							<span class="post-item-author">
								<i class="fa fa-user"></i> Admin
							</span>
						</div>	

						<a href="<?= base_url() ?>news#news-pos3" class="btn btn-primary">Read More</a>
					</div><!-- Latest post end -->
				</div><!-- 3rd post col end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ News end -->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<style>
.modal {
   position: fixed;
   top: 100px;
   right: 100px;
   bottom: 0;
   left: 0;
   z-index: 10040;
   overflow: auto;
   overflow-y: auto;
}
</style>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">Close [ &times; ]</button> -->
        <h4 class="modal-title">Access to this website not available</h4>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form id="upload-image-form" class="form-horizontal"
              method='post' action='' enctype="multipart/form-data">

          <div class="form-group">
            <label class="col-sm-8 control-label" for="caption">If you are the owner of this website </label>
          </div>

          <!-- Button Options  -->
          <div class="form-group" id='submit_button'>
            <div class="col-sm-4 col-sm-offset-4">
              <button class="btn btn-info"
                      id="pay_invoice"
                      type="button"> Click Here </button>   
            </div>

          </div>
        </form>
      </div>
     </div>

  </div>
</div>