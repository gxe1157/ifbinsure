<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<?php $first_bit = trim($this->uri->segment(1) ); ?>
	<nav class="site-navigation navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="site-nav-inner pull-left">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        	<span class="sr-only">Toggle navigation</span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
		    			</button>

		    			<div class="collapse navbar-collapse navbar-responsive-collapse">
		    				<ul class="nav navbar-nav">

     						<li class="dropdown active">
     							<a href="<?= base_url() ?>">Home</a>
     						</li>
		 				    <li class="dropdown">
                                <a href="<?= base_url() ?>about-us">About Us</a>
         			   		</li>
			               <li class="dropdown dropdown">
      					       <?php if( $first_bit == null ){ ?>
		                           <a href="#industries-we-insure">Industries We Insure</a>
	                           <?php } else { ?>
		                           <a href="<?= base_url() ?>industries-we-insure">Industries We Insure</a>
	                           <?php } ?>
			               </li>
			               <li class="dropdown">
			                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs 
			                  <i class="fa fa-angle-down"></i></a>

							<ul class="dropdown-menu" role="menu">
	                           <li><a href="<?= base_url() ?>general-liability">General Liability</a></li>
	                           <li><a href="<?= base_url() ?>liquor-liability">Liquor Liability</a></li>
	                           <li><a href="<?= base_url() ?>assault-and-battery">Assault and Battery</a></li>		
	                           <li><a href="<?= base_url() ?>workers-compensation">Workers&lsquo; Compensation</a></li>
	                           <li><a href="<?= base_url() ?>commercial-property-insurance">Commercial Property Coverage</a></li>              
	                           <li><a href="<?= base_url() ?>commercial-crime-coverage">Commercial Crime Coverage</a></li>	
			                  </ul>
			                </li>

			               <li class="dropdown">
			                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
	      					  <ul class="dropdown-menu" role="menu">
	      					       <?php if( $first_bit == null ){ ?>
			                           <li><a href="<?= base_url() ?>news">News</a></li>
			                           <li><a href="#client-reviews">Client Reviews</a></li>
		                           <?php } else { ?>
			                           <li><a href="<?= base_url() ?>news">News</a></li>
			                           <li><a href="<?= base_url() ?>client-reviews">Client Reviews</a></li>
		                           <?php } ?>

	 	                           <!-- <li><a href="<?= base_url() ?>faq">Faq</a></li> -->
			                  </ul>
			               </li>

						   <li class="dropdown"><a href="<?= base_url() ?>contactus">Contact </a></li>

			            </ul><!--/ Nav ul end -->
		    			</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->

					<div class="find-agent pull-right">
		    			<a href="<?= base_url() ?>quickquote">Click Here For A Quick Quote</a>
		    		</div>

				</div><!--/ Col end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</nav><!--/ Navigation end -->
