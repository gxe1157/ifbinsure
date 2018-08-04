<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<section class="footer-top no-padding">
		<div class="container">
			<div class="footer-top-bg row">
				<div class="col-md-4 footer-box one">
					<i class="fa fa-map-marker">&nbsp;</i>
					<div class="footer-box-content">
						<p>165 Passaic Ave Suite 204<br> Fairfield, NJ 07004</p>
					</div>
				</div><!--/ Box 1 end -->

				<div class="col-md-4 footer-box two">
					<i class="fa fa-phone">&nbsp;</i>
					<div class="footer-box-content">
						<P>Phone: 201-460-8465</P>
						<P>Fax: 201-460-8467</P>
					</div>
				</div><!--/ Box 2 end -->
				
				<div class="col-md-4 footer-box three">
					<i class="fa fa-envelope-o">&nbsp;</i>
					<div class="footer-box-content">
						<p style="margin-top: 10px;">info@ifbinsure.com</p>
					</div>
				</div><!--/ Box 3 end -->
				
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Footer top end -->
	
	<!-- Footer start -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 footer-widget footer-about">
					<div class="footer-logo">
						<img class="img-responsive"
						 src="<?= base_url() ?>public/images/jkingsley/IFB_logo_whitesm.png" width="340" height="120" alt="IFB_logo">
					</div>

					<p>Independent Food and Beverage Insurance Brokers, Inc. has been catering to the restaurant, tavern and beverage insurance industries since 1993, servicing over hundreds of customers.
					Even though you probably have insurance already, it's important that you have a highly experienced insurance professional to review your policy.</p>
					<p><strong>Mon/Friday</strong> 8:30 am - 4:30 pm</p>
				</div><!-- About us end -->

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget-title">Important Links</h3>
						<ul class="list-arrow" >
                           <li><a href="<?= base_url() ?>general-liability">General Liability</a></li>
                           <li><a href="<?= base_url() ?>liquor-liability">Liquor Liability</a></li>
                           <li><a href="<?= base_url() ?>assault-and-battery">Assault and Battery</a></li>		
                           <li><a href="<?= base_url() ?>workers-compensation">Workers&lsquo; Compensation</a></li>
                           <li><a href="<?= base_url() ?>commercial-property-insurance">Commercial Property Insurance</a></li>              
                           <li><a href="<?= base_url() ?>commercial-crime-coverage">Commercial Crime Coverage</a></li>	
	                  </ul>			

				</div>

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget-title">Subscribe to our newsletter</h3>
					<div class="newsletter-introtext">
						Subscribe to our newsletter and receive our lastest updates.
					</div>

					<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
					<style type="text/css">
						#mc_embed_signup{background:#25272E; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
						/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
						   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
					</style>

					<div id="mc_embed_signup">
					<form action="//ifbinsure.us16.list-manage.com/subscribe/post?u=5f706064be6c2d94e39d14147&amp;id=7bf1337c1a" method="post"
						 id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
						 class="validate" target="_blank" novalidate>

					    <div id="mc_embed_signup_scroll">
						<!-- <label for="mce-EMAIL">Subscribe to our mailing list</label> -->
						<input type="email" value="" name="EMAIL"
							   class="email" id="mce-EMAIL"
							   placeholder="email address" required>

					    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true">
						    <input type="text" name="b_5f706064be6c2d94e39d14147_7bf1337c1a"
						    	   tabindex="-1" value="">
					    </div>
					    <div class="clear"><br>
					    	<input type="submit" value="Subscribe"
					    	   name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
					    </div>
					    </div>
					</form>
					</div>
					<div class="footer-social">
						<h3 class="widget-title">Stay Connected</h3>
						<ul>
		                    <li>
	    	                    <a title="Facebook" href="http://www.facebook.com/independentinsure" target="_blank">
                                <span class="social-icon"><i class="fa fa-facebook"></i></span></a>   
                            </li>
                            <li>    
	                            <a title="Twitter" href="http://www.twitter.com/indep_insure" target="_blank">
                                <span class="social-icon"><i class="fa fa-twitter"></i></span></a>
                            </li>
                            
<!--                             <a title="Google+" href="#">
                                <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                            </a>
                            <a title="Linkdin" href="#">
                                <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                            </a>
 -->                        
 							<li>	    
 								<a title="instagram" href="http://www.instagram.com/independentinsurance" target="_blank">
                                <span class="social-icon"><i class="fa fa-instagram"></i></span></a>
                        	</li>
					</ul>
					</div><!-- Footer social end -->
				</div>
			</div><!--/ Content row end -->

			<div class="row copyright">
				<div class="col-xs-12 col-sm-5">
					<div class="copyright-info">
						<span>Copyright © <?php echo date("Y");?> IFBinsure.com. All Rights Reserved.</span>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-push-1">
					<div class="footer-menu">
						<ul class="nav unstyled">
							<li><a href="<?= base_url() ?>legal">Legal</a></li>
							<li><a href="<?= base_url() ?>privacy-statement">Privacy Statement</a></li>
						</ul>
					</div>
				</div>
			</div><!-- Copyright end -->

			<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<button class="btn btn-primary" title="Back to Top">
					<i class="fa fa-angle-double-up"></i>
				</button>
			</div>

		</div><!--/ Container end -->
	</footer><!-- Footer end -->

	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="<?= base_url() ?>public/js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="<?= base_url() ?>public/js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?= base_url() ?>public/js/owl.carousel.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="<?= base_url() ?>public/js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="<?= base_url() ?>public/js/waypoints.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="<?= base_url() ?>public/js/jquery.colorbox.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="<?= base_url() ?>public/js/isotope.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>public/js/ini.isotope.js"></script>

	<!-- Template custom -->
	<script type="text/javascript" src="<?= base_url() ?>public/js/custom.js"></script>
	
	</div><!-- Body inner end -->
</body>
</html>