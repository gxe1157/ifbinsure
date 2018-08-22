
	<div id="banner-area" class="banner-area" style="background-image:url(public/images/jkingsley/IFB_ContactUs.jpg)">
		<!-- Subpage title start -->
		<div class="banner-text text-center">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="banner-title">Contact Us</h1>
	        			</div>
			        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Contact</li>
			            <li><a href="#"> Contact Us</a></li>
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

					<div id="map" class="map"></div>

				</div><!-- Content col end -->

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<div class="widget">
							<h3 class="widget-title">Contact us</h3>

							<div class="contact-info-box">
								<i class="fa fa-map-marker">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Address</h4>
									<p>165 Passaic Ave Suite 204 Fairfield, NJ 07004</p>
								</div>
							</div>

							<div class="contact-info-box">
								<i class="fa fa-phone">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Phone</h4>
									<P>Phone: 800-336-6121</P>									
									<P>Phone: 201-460-8465</P>
									<P>Fax: 201-460-8467</P>
								</div>
							</div>

							<div class="contact-info-box">
								<i class="fa fa-envelope">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Email</h4>
									<p>info@ifbinsure.com</p>
								</div>
							</div>

						</div><!-- Widget end -->

					</div><!-- Sidebar end -->
				</div><!-- Sidebar Col end -->
			
			</div><!-- Content row -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

	<section id="contact" class="contact-three">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
	    			<h3 class="contact-form-title">Contact Form</h3>

	    			<form id="contact-form"
	    				  action="contactus/send" 
	    				  method="post" role="form">

	    				<div class="error-container"></div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Name</label>
								    <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
									<?= form_error('name', '<div class="error">', '</div>'); ?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control form-control-email" name="email" id="email" 
									placeholder="" type="email" required>
									<?= form_error('email', '<div class="error">', '</div>'); ?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Subject</label>
									<input class="form-control form-control-subject" name="subject" id="subject" 
									placeholder="" required>
									<?= form_error('subject', '<div class="error">', '</div>'); ?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
							<?= form_error('message', '<div class="error">', '</div>'); ?>
						</div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank"
									type="submit"
							        name="submit"
							        value="Submit">Send Message</button> 
						</div>
					</form>
	    		</div>
			</div>
		</div>
	</section><!-- Cotact form end -->
