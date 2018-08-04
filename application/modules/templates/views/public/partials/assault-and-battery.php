
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
	$d1 = new DateTime('1993-01-01');
	$d2 = new DateTime(date("Y-m-d"));
	$diff = $d2->diff($d1);
?>


	<div id="banner-area" class="banner-area" style="background-image:url(
	public/images/jkingsley/banner_assaultandbattery.jpg)">
		<!-- Subpage title start -->
		<div class="banner-text text-center banner-text-shadow">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading" >
	        				<h1 class="banner-title">Assault and Battery</h1>
	        			</div>
			        	<ul class="breadcrumb" >
			            <li>Home</li>
			            <li>Assault and Battery</li>
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
									Assault and Battery
								</h2>
							</div>
							
							<div class="entry-content">
Around 60 percent of claims placed against
bars and nightclubs are a result of assault
and battery. The claims can range from customers
or employees fights, to customers claiming that
the security personnel in the bar or nightclub used
unreasonable force dealing with them.
<ul>
	<li>Do You know about fight Coverage</li>
	<li>Employee vs. Customer Who Will Pay?</li>
	<li>Does your bartender drink while working with customers?</li>
</ul>


<h4>Why do we ask?!</h4>

<b>How ARE THEY TO KNOW IF CUSTOMERS ARE</b> too drunk to drive?
<p>
Let us Help!<br>

Today 800-336-6121<br>

For Faster Service Contact Mike Direct at: 201-320-1200

Or E-mail us at: info@ifbinsure.com
</p>

							</div>

						</div><!-- post-body end -->
					</div><!-- 1st post end -->



				</div><!-- Content Col end -->

    	  		<?php $this->load->view('html_sidebar-right.php'); ?>

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
