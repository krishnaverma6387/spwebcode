
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	
	<head>
		<meta charset="UTF-8">
		<title><?= $this->termsdata->terms_title?></title>
		<meta name="description" content="<?= $this->termsdata->terms_description?>">
		<meta name="keywords" content="<?= $this->termsdata->terms_keyword?>">
		<meta name="author" content="">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include('include/cssLinks.php') ?>
		<style>
			.icon {
			font-size: 2rem;
			}	
			.slide-toggle{
			display:none!important;
			}
			
			</style>
		
	</head>
    
    <body>  
		<!-- Paste this code after body tag -->
		
		
		<!-- //Header Style One -->
		
		<?php include('include/header.php') ?>
		
		<div class="container-fuild">
			<nav aria-label="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= base_url(); ?>"><i class="bi bi-house-door"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Term And Conditions</li>
					</ol>
				</div>
			</nav>
		</div> 
		
		
		<section class="pro-content login-content">
			<div class="container"> 
				
				
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<?= $this->termsdata->terms_condition;?>
						<!--h1 class="pageheading">Term & Condition for slickpattern</h1>
						
						<p class="text-justify">At slickpattern, accessible from http://slickpattern.digitalcoders.in/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by slickpattern and how we use it.</p>
						
						<p class="text-justify">If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
						
						<p class="text-justify">This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in slickpattern. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.termsfeed.com/privacy-policy-generator/">Free Privacy Policy Generator</a>.</p>
						
						<h2>Consent</h2>
						
						<p class="text-justify">By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
						
						<h2>Information we collect</h2>
						
						<p class="text-justify">The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
						<p class="text-justify">If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
						<p class="text-justify">When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
						
						<h2>How we use your information</h2>
						
						<p class="text-justify">We use the information we collect in various ways, including to:</p>
						
						<ul>
							<li>Provide, operate, and maintain our website</li>
							<li>Improve, personalize, and expand our website</li>
							<li>Understand and analyze how you use our website</li>
							<li>Develop new products, services, features, and functionality</li>
							<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
							<li>Send you emails</li>
							<li>Find and prevent fraud</li>
						</ul>
						
						<h2>Log Files</h2>
						
						<p class="text-justify">slickpattern follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>
						
						<h2>Cookies and Web Beacons</h2>
						
						<p class="text-justify">Like any other website, slickpattern uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>
						
						<p class="text-justify">For more general information on cookies, please read <a href="https://www.termsfeed.com/blog/sample-cookies-policy-template/#What_Are_Cookies">the Cookies article on TermsFeed website</a>.</p>
						
						
						
						<h2>Advertising Partners Privacy Policies</h2>
						
						<p class="text-justify">You may consult this list to find the Privacy Policy for each of the advertising partners of slickpattern.</p>
						
						<p class="text-justify">Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on slickpattern, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
						
						<p class="text-justify">Note that slickpattern has no access to or control over these cookies that are used by third-party advertisers.</p>
						
						<h2>Third Party Privacy Policies</h2>
						
						<p class="text-justify">slickpattern's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>
						
						<p class="text-justify">You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>
						
						<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>
						
						<p class="text-justify">Under the CCPA, among other rights, California consumers have the right to:</p>
						<p class="text-justify">Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
						<p class="text-justify">Request that a business delete any personal data about the consumer that a business has collected.</p>
						<p class="text-justify">Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
						<p class="text-justify">If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
						
						<h2>GDPR Data Protection Rights</h2>
						
						<p class="text-justify">We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
						<p class="text-justify">The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
						<p class="text-justify">The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
						<p class="text-justify">The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
						<p class="text-justify">The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
						<p class="text-justify">The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
						<p class="text-justify">The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
						<p class="text-justify">If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
						
						<h2>Children's Information</h2>
						
						<p class="text-justify">Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
						
						<p class="text-justify">slickpattern does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p-->
						
					</div>
				</div>
				
			</div>
		</section>
		
		
		
		
		
		
		<?php include('include/footer.php'); ?>
		
		
		
		<?php include('include/jsLinks.php'); ?>
		
	</body>
</html>																						