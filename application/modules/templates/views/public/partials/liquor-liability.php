
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
	$d1 = new DateTime('1993-01-01');
	$d2 = new DateTime(date("Y-m-d"));
	$diff = $d2->diff($d1);
?>


	<div id="banner-area" class="banner-area" style="background-image:url(public/images/jkingsley/banner_liquorliability.jpg)">
		<!-- Subpage title start -->
		<div class="banner-text text-center banner-text-shadow">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="banner-title">Liquor Liability</h1>
	        			</div>
			        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Liquor Liability</li>
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
								<h3 class="entry-title">
									Why Buy Liquor Liability Insurance?
								</h3>
								<h2 class="entry-title">
									Coverage Up to $1,000,000!
								</h2>
							</div>
							
							<div class="entry-content">
								<p>Consider the following scenarios:</p>
				                <p>After having several drinks at another bar, a patron walks into a Liquor   establishment and is served one drink. While driving home, she enters the   opposing lane and collides head-on with another vehicle. The drive and   passengers of the other vehicle sustain serious injuries and sue your   establishment for contributing to the intoxication of the patron who caused the   accident.</p>
				                <p>A patron is served alcohol at an establishment, and while walking home is   struck and killed by an automobile. The estate of the deceased patron sues,   alleging the negligent service of alcohol directly contributed to the accident.   Two of your patrons are involved in a fight. One patron sustains injuries and   sues your establishment, alleging the negligent service of alcohol caused the   fight.</p>
				                <p>A caterer serves alcohol at a party and one of your guests becomes   intoxicated. After the party, the intoxicated guest is involved in an auto   accident and injures a third party. The third party sues the caterer, alleging   negligence in providing alcohol to an obviously intoxicated person.</p>
				                <p>Your establishment may be held liable in the above scenarios! Liquor-related   injuries can be very severe. The resulting claims can produce substantial jury   verdicts or settlements. Even frivolous lawsuits must be defended and can cost   thousands of dollars in attorney fees.</p>
				                <p>Protect the financial interest of the business by purchasing our Liquor   Liability coverage today!</p>
				                <UL>
				                  <LI>Bars, Taverns, Adult Entertainment Clubs and Nightclubs   
				                  <LI>Restaurants   
				                  <LI>Banquet Facilities   
				                  <LI>Country Clubs, Private and Fraternal Clubs   
				                  <LI>Retail Stores, Retail and Wholesale Distributors   
				                  <LI>Unique operations such as Off-Premises Caterers, Concessionaires, Breweries,   Vineyards and Importers</LI>
				                </UL>
							</div>
						</div><!-- post-body end -->
					</div><!-- 1st post end -->

				</div><!-- Content Col end -->

    	  		<?php $this->load->view('html_sidebar-right.php'); ?>

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
