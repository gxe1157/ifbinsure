
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
	$d1 = new DateTime('1993-01-01');
	$d2 = new DateTime(date("Y-m-d"));
	$diff = $d2->diff($d1);
?>


	<div id="banner-area" class="banner-area" style="background-image:url(public/images/banner/banner5.jpg)">
		<!-- Subpage title start -->
		<div class="banner-text text-center banner-text-shadow">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="banner-title">Health Insurance</h1>
	        			</div>
			        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Health Insurance</li>
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
						<div class="post-body">
							<div class="entry-header">
								<h2 class="entry-title">
									Health Insurance
								</h2>
							</div>
							
							<div class="entry-content">

							</div>

						</div><!-- post-body end -->
					</div><!-- 1st post end -->

				</div><!-- Content Col end -->

    	  		<?php $this->load->view('html_sidebar-right.php'); ?>

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
