
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
	$d1 = new DateTime('1993-01-01');
	$d2 = new DateTime(date("Y-m-d"));
	$diff = $d2->diff($d1);
?>


	<div id="banner-area" class="banner-area" style="background-image:url(public/images/jkingsley/homepage_barinsurance.jpg)">
		<!-- Subpage title start -->
		<div class="banner-text text-center banner-text-shadow">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="banner-title">Bar Insurance</h1>
	        			</div>
			        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Bar Insurance</li>
		          	</ul>
	        		</div>
	        	</div>
       	</div>
    	</div><!-- Subpage title end -->
	</div><!-- Banner area end --> 

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

					<div class="post">
						<div class="entry-header">
							<h3 class="entry-title">
								Click below to learn about insurance needs<br> for your business.
							</h3><br>
						</div>

						<div class="post-media post-image">
							<img src="public/images/jkingsley/generalliability.jpg"
							 class="img-responsive" alt=""
							 style=" border:2px solid #ccc; width: 600px;">
						</div>							
						<div class="post-body">
							<div class="entry-header" style="width: 80%; border: 0px red solid; text-align: center; font-size:2em;">
								General Liabilty
								<span id="btn-read_more">
									<a href="<?= base_url() ?>general-liability"
									 class="btn btn-primary btn-sm">Learn More</a>
								</span>
							</div>
						</div><!-- post-body end -->
					</div><!-- 1st post end -->

					<div class="post">
						<div class="post-media post-image">
							<img src="public/images/jkingsley/liquorliability.jpg"
							 class="img-responsive" alt=""
							 style=" border:2px solid #ccc; width: 600px;">
						</div>							
						<div class="post-body">
							<div class="entry-header" style="width: 80%; border: 0px red solid; text-align: center; font-size:2em;">
								Liquor Liability
								<span id="btn-read_more">
									<a href="<?= base_url() ?>liquor-liability"
									 class="btn btn-primary btn-sm">Learn More</a>
								</span>
							</div>
						</div><!-- post-body end -->
					</div><!-- 1st post end -->

					<div class="post">
						<div class="post-media post-image">
							<img src="public/images/jkingsley/assaultandbattery.jpg"
							 class="img-responsive" alt=""
							 style=" border:2px solid #ccc; width: 600px;">
						</div>							
						<div class="post-body">
							<div class="entry-header" style="width: 80%; border: 0px red solid; text-align: center; font-size:2em;">
								Assault and Battery
								<span id="btn-read_more">
									<a href="<?= base_url() ?>assault-and-battery"
									 class="btn btn-primary btn-sm">Learn More</a>
								</span>
							</div>
						</div><!-- post-body end -->
					</div><!-- 1st post end -->

					<div class="post">
						<div class="post-media post-image">
							<img src="public/images/jkingsley/workerscompensation.jpg"
							 class="img-responsive" alt=""
							 style=" border:2px solid #ccc; width: 600px;">
						</div>							
						<div class="post-body">
							<div class="entry-header" style="width: 80%; border: 0px red solid; text-align: center; font-size:2em;">
								Worker's Compensation
								<span id="btn-read_more">
									<a href="<?= base_url() ?>workers-compensation"
									 class="btn btn-primary btn-sm">Learn More</a>
								</span>
							</div>
						</div><!-- post-body end -->
					</div><!-- 1st post end -->

					<div class="post">
						<div class="post-media post-image">
							<img src="public/images/jkingsley/commercialpropertyinsurance.jpg"
							 class="img-responsive" alt=""
							 style=" border:2px solid #ccc; width: 600px;">
						</div>							
						<div class="post-body">
							<div class="entry-header" style="width: 80%; border: 0px red solid; text-align: center; font-size:2em;">
								Commercial Property Insurance
								<span id="btn-read_more">
									<a href="<?= base_url() ?>commercial-property-insurance"
									 class="btn btn-primary btn-sm">Learn More</a>
								</span>
							</div>
						</div><!-- post-body end -->
					</div><!-- 1st post end -->

					<div class="post">
						<div class="post-media post-image">
							<img src="public/images/jkingsley/commercialcrimecoverage.jpg"
							 class="img-responsive" alt=""
							 style=" border:2px solid #ccc; width: 600px;">
						</div>							
						<div class="post-body">
							<div class="entry-header" style="width: 80%; border: 0px red solid; text-align: center; font-size:2em;">
								Commercial Crime Coverage
								<span id="btn-read_more">
									<a href="<?= base_url() ?>commercial-crime-coverage"
									 class="btn btn-primary btn-sm">Learn More</a>
								</span>
							</div>
						</div><!-- post-body end -->
					</div><!-- 1st post end -->

				</div><!-- Content Col end -->

    	  		<?php $this->load->view('html_sidebar-right.php'); ?>

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->


<!--  -->
