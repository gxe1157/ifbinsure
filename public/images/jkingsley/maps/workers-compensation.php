
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
	        				<h1 class="banner-title">Workers' Compensation</h1>
	        			</div>
			        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Workers' Compensation</li>
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
									Workers Compensation Coverages
								</h2>
							</div>
							
							<div class="entry-content">
								<p><strong>Workers Compensation Insurance</strong><BR>
				                  This coverage agreement obligates   the insurer to pay all compensation and other benefits required of the insured   by the workers compensation law or occupational disease law of any state listed   in the policy. The coverage applies to bodily injury by accident and by   disease.</p>
				                <p>Coverage (A) shows no dollar limit for the benefits provided since any   applicable limits would be those established within the law. Benefits under   coverage (A) are paid to the employee without regard to fault.</p>
				                <p><strong>Employers Liability</strong><BR>
				                  This coverage protects employers for their   legal liability for bodily injury by accident or disease to an employee arising   out of and in the course of the employee's employment when not covered under the   workers compensation law. Before benefits are paid under this coverage, the   employee must prove the employer is liable for the injury.</p>
				                <p><strong>Bodily Injury By Accident</strong><BR>
				                  This amount is the most an insurer will   pay under coverage (B) for all claims arising from any one accident, regardless   of how many employees are involved in the accident. The standard limit is   $100,000 for any one accident, which can be increased.</p>
				                <p><strong>Bodily Injury By Disease (Policy Limit)</strong><BR>
				                  This is the aggregate limit   the insurer will pay under coverage (B) for all claims sustaining bodily injury   by disease during the policy period. The standard policy limit is $500,000,   which can be increased.</p>
				                <p><strong>Bodily Injury By Disease (Each Employee)</strong><BR>
				                  This amount is the most an   insurer will pay under coverage (B) for damages due to bodily injury by disease   to any one employee. The standard limit of liability for each employee is   $100,000, which can be increased.</p>
				                <p><strong>Other States Insurance</strong><BR>
				                  This provides workers compensation   coverage's if the insured expands operations into other states not declared at   the time the policy is issued or renewed. If the insured elects this coverage   and operations begin in a state listed under other states, the insurer provides   the same coverage as if the state was declared in the policy at the time of   policy issuance.</p>
				                <p><strong>Voluntary Compensation Endorsement</strong><BR>
				                  Workers compensation laws of   most states exempt some types of employment from workers compensation benefits.   This endorsement amends the standard policy to provide coverage for employees   with exempted occupations from the workers compensation act. When the   endorsement is added it does not make employees subject to the workers   compensation law, but it obligates the insurance company to pay on behalf of the   insured, an amount equal to the compensation benefits that would be payable to   those employees if they were subject to the workers compensation law of that   state.</p>
				                <p><strong>United States Long shore &amp; Harbor Workers Endorsement   (USL&amp;HW)</strong><BR>
				                  This is a federal act, which is similar to the state workers   compensation act. The federal act was designed to provide workers compensation   benefits to employees who work in maritime employment upon the navigable waters   of the United States and who are usually considered outside the scope of state   workers compensation laws. When the USL&amp;HWA endorsement is added to the   standard policy it applies to work done in the states scheduled on the policy   and extends the definition of the workers compensation law to include the   USL&amp;HWCA.</p>
				                <p><strong>Executive Officers, Partners Exclusion Endorsement</strong><BR>
				                  In some states,   workers compensation law allows an insured to include or exclude Executive   Officers and Partners, or both, from coverage. Adding this endorsement can   designate the individuals not covered under the policy.</p>
				                <p><strong>Experience Modification</strong><BR>
				                This is a factor that deals with the rating   of the policy. The Experience Modification figure is based on the insured's loss   experience. The factor is used to increase or decrease the manual rates of insurance.</p>

							</div>

						</div><!-- post-body end -->
					</div><!-- 1st post end -->

				</div><!-- Content Col end -->

    	  		<?php $this->load->view('html_sidebar-right.php'); ?>

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
