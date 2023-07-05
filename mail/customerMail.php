<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// alert("success");
// die();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'autoload.php';

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$service_code   = $_POST['service_code'];
	$service_name = [
		'001' =>'Contact Us ',
		'002' =>'Nominee Shareholder Service ',
		'003' =>'Offshore Company-Formation ',
		'004' =>'Offshore Bank Account ',
		'005' =>'Employer Identifier Number ',
		'006' =>'S Crop ',
		'007' =>'Corporate Secretrial Service ',
		'008' =>'Account Audit Tax ',
		'009' =>'Doing Business As(DBA)',
		
	];

	$string_convert = $service_code;
	$service_code   = strval($string_convert);
	
	$custmail = new PHPMailer(TRUE);

		// $custmail->isSMTP();
		// // $custmail->Mailer = "smtp";
		// $custmail->SMTPDebug  = 1;
		// $custmail->SMTPAuth   = TRUE;
		// $custmail->SMTPSecure = "ssl";
		// $custmail->Port       = 465;
		// $custmail->Host       = "smtp.gmail.com";
		// $custmail->Username   = "legalraastatech3@gmail.com";
		
		$custmail->isSMTP();
		$custmail->SMTPDebug  = 1;
		$custmail->Host = "smtp.gmail.com";
		$custmail->SMTPAuth = true;
		$custmail->Username   = "testlegal125@gmail.com";
		$custmail->Password ="ilgzsoockkqrkhyc";
		$custmail->Port = 465;
		$custmail->SMTPSecure = "ssl";
		//Email Settings
		$custmail->isHTML(true);
		$custmail->setFrom('testlegal125@gmail.com', 'COR.com');
		$custmail->addAddress($_POST['email'], $_POST['name']);
		$custmail->Subject = ucwords("Thank you For Showing Interest In. $service_name[$service_code]");
        if(isset($_POST['service_code']) && $service_code == '001') {
			$Body='<html>
			<body>
				<div>Dear '.$_POST['name'].'
					<p>We wanted to take a moment to thank you for choosing our '. $service_name[$service_code].'. We appreciate the trust you have placed in Whiteworth, and we are committed to delivering the highest quality service in setting up your business in Dubai. Additionally, we also provide business setup services in Free Zone, Mainland and Offshore areas. <br>
					We are grateful for the opportunity to work with you and for the positive impact that our License services have had on your business. Your satisfaction is Whiteworth’s top priority, and we are dedicated to ensuring that you receive the best possible experience with our company. Click to know about our services and us</p>
				
					<p><strong>About Whiteworth:<br></strong>With over 5 years of experience in company formation in Dubai, we provide a one-stop-shop approach for quick business registration, offering complete services for all incorporation, licensing, and other associated services to<a href="https://test.legalraasta.com/whiteworth/freezone-mainland-uae.html"><strong> Free Zone,</strong></a> <a href="https://test.legalraasta.com/whiteworth/mainland-business-dubai.html"><strong>Mainland</strong></a> & <a href="https://test.legalraasta.com/whiteworth/offshore-company-formation-dubai-uae.html"><strong>offshore</strong></a></p>
					<p>With access to a top pool of chances, we have been assisting Indian businessmen to realize their ambition of company formation in<strong> Dubai</strong>. In order to position themselves for long-term growth and success while avoiding mistakes that could end up costing them time and money, WhiteWorth has been assisting<strong> international business owners</strong> with <strong>company formation in Dubai</strong> in the appropriate jurisdiction and with the appropriate company structure</p>
					<p>Warm regards,<br>Team, WhiteWorth<br><em></em>
					<p>Contact Us</p>
						Call Us: <a href="tel:+971585606800" data-mce-href="tel:+971585606800">+971585606800</a>&nbsp;|&nbsp; <a href="tel:+918882038525">+918882038525</a>  <br> <br>
						Site:<a href="https://test.legalraasta.com/whiteworth" data-mce-href="https://test.legalraasta.com/whiteworth">www.thewhiteworth.com</a><br> <br>
						Dubai Office :<a href="https://goo.gl/maps/T8roTQnp2RtndkPj6"> 801 (02), Latifa Towers, Sheikh Zayed Road , Dubai </a></p>
							
							<a href="https://www.facebook.com/WhiteWorth"
							data-mce-href="https://www.facebook.com/WhiteWorth">Facebook</a>&nbsp;|&nbsp;<a
							href="https://www.linkedin.com/company/80065080/admin/"
							data-mce-href="https://www.linkedin.com/company/80065080/admin/">Linkedin</a>&nbsp;|&nbsp;<a
							href="https://twitter.com/thewhiteworth"
							data-mce-href="https://twitter.com/thewhiteworth">Twitter</a>&nbsp;|&nbsp;<a
							href="https://in.pinterest.com/whiteworthAdvisors/"
							data-mce-href="https://in.pinterest.com/whiteworthAdvisors/">Pinterest</a></p>
				</div>
			</body>
		</html>';
	  	}else if(isset($_POST['service_code']) && $service_code == '002') {
			$Body='<html>
			<body >
				<p class="western">Dear'.$_POST['name']. '</p>
				<p>Greetings from LegalRaasta - India top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Company formation.</p>
				<p><b>Package includes:</b> 2 DIN (Director Identification no)&nbsp;, 1 DSC, 1 RUN/Name, Search &amp;
					Approval,&nbsp; LLP Agreement preparation and filing (Stamp duty not included ), PAN &amp; TAN, Certificate of
					Incorporation, Bank Opening Support, Accounting Software, Bookkeeping (1 month free)</p>
				<p><b>Time required</b>: &lt;15 working days*</p>
				<p><b>Cost</b>: Rs. 7,499 onwards (incl. GST), pay now - https://www.legalraasta.com/payment/</p>
				<p><b>Process:</b><br>Step 1: Fill application form -&nbsp;<a
						href="http://www.legalraasta.com/limited-liability-partnership-llp-application/"
						data-mce-href="http://www.legalraasta.com/limited-liability-partnership-llp-application/">Click here</a><a
						href="https://www.legalraasta.com/private-limited-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a><br><b>Step 2: you may
						Pay Rs. 2,000 now &amp; remaining after name approval:&nbsp;<a href="https://www.legalraasta.com/payment/"
							data-mce-href="https://www.legalraasta.com/payment/">Click here </a>to pay -</b><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents</a></p>
				<p><b>Documents Required: </b>PAN Card of Partners (Copy), ID Proof of Partners (Prefer Aadhaar Card)<b>,
					</b>Passport size photograph of all the Partners<b>, </b>Residential Proof of registered office (Telephone or
					Mobile Bill/ Electricity or Gas Bill)<b>, </b>Landlord NOC (we will provide the format)<b>, </b>Bank
					statement/Utility bill of Partners</p>
				<p>You can also view our Youtube guide on&nbsp;<b><a
							href="https://www.youtube.com/watch?v=mtJUY5BKEuA&amp;feature=emb_title"
							data-mce-href="https://www.youtube.com/watch?v=mtJUY5BKEuA&amp;feature=emb_title">LLP Incorporation</a>
						| <a href="https://drive.google.com/file/d/18RNPmWj_YcZdaYJcAt79aWCddkkNpUGL/view?usp=sharing"
							data-mce-href="https://drive.google.com/file/d/18RNPmWj_YcZdaYJcAt79aWCddkkNpUGL/view?usp=sharing">LLP
							Guidebook</a></b></p>
				<p><b><br>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p>Warm regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
						formation</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a> | <a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/">Accounting</a><br>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>*<a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '007') {
			$Body='<html>
			<body>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">Dear '.$_POST['name'].'</span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">Greetings from LegalRaasta - India’s top financial
									services platform! Every year LegalRaasta helps more than 100+ companies in NBFC
									formation.</span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>Package includes:</b></span></span><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> NBFC registration formalities including Company
									registration, authorized capital increase, </span></span><span style="color: #222222;"
								data-mce-style="color: #222222;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">Application to RBI under section 45 I A,
									Resubmission if required, Correspondence till the registration of
									NBFC&nbsp;</span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>Time required:</b></span></span><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> 2 - 5months*</span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>Cost:</b></span></span><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> Rs. 10,000  onwards (incl. RBI, MCA and
									Professional fee)</span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>Process:<br></b></span></span><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">Step 1: Fill application form - </span></span><a
								href="https://www.legalraasta.com/nbfc-application-form/"
								data-mce-href="https://www.legalraasta.com/nbfc-application-form/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Click here</span></span><span
									style="color: #000000;" data-mce-style="color: #000000;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;"><b><br></b></span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>Step 2: Make payment: </b></span></span><a
								href="https://www.legalraasta.com/payment/"
								data-mce-href="https://www.legalraasta.com/payment/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;"><b>Click here</b></span></span><span
									style="color: #000000;" data-mce-style="color: #000000;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;"><br></span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">Step 3: <a
										href="https://client.legalraasta.com/d.php"
										data-mce-href="https://client.legalraasta.com/d.php">Upload
										Documents</a></span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>Requirements:</b></span></span><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> Passport size photograph of all the director,
									Bank statement of director, Fixed Deposit of INR 2Cr, Finance/ banking background of Directors,
									business plan for 3 to 5 years, banker’s report<br></span></span><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>If you don’t have capital of INR
										2cr</b></span></span><span style="color: #000000;" data-mce-style="color: #000000;"><span
									style="font-family: Calibri, serif;" data-mce-style="font-family: Calibri, serif;">, you can
									consider following alternatives which can be formed with &lt;10lakh capital
									:<br>-</span></span><a href="https://www.legalraasta.com/register-nidhi-company/"
								data-mce-href="https://www.legalraasta.com/register-nidhi-company/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Nidhi Company </span></span><span
									style="color: #000000;" data-mce-style="color: #000000;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;"><br></span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">-</span></span><a
								href="https://www.legalraasta.com/microfinance-company-registration/"
								data-mce-href="https://www.legalraasta.com/microfinance-company-registration/"><span
									style="color: #1155cc;" data-mce-style="color: #1155cc;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Microfinance
										company&nbsp;</span></span></a></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"><b>LegalRaasta in News:</b></span></span> <a
								href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
								data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"><span
									style="color: #1155cc;" data-mce-style="color: #1155cc;"><span
										style="font-family: Calibri, serif;" data-mce-style="font-family: Calibri, serif;">Economic
										times</span></span></a><span style="color: #000000;" data-mce-style="color: #000000;"><span
									style="font-family: Calibri, serif;" data-mce-style="font-family: Calibri, serif;"> |
								</span></span><a
								href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
								data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"><span
									style="color: #1155cc;" data-mce-style="color: #1155cc;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">IndiaTimes</span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> | </span></span><a
								href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
								data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"><span
									style="color: #1155cc;" data-mce-style="color: #1155cc;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">VCCircle</span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> | </span></span><a
								href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
								data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"><span
									style="color: #1155cc;" data-mce-style="color: #1155cc;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">BusinessWorld</span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">&nbsp;</span></span></span></span></p>
				<p><span style="font-family: Times New Roman, serif;" data-mce-style="font-family: Times New Roman, serif;"><span
							style="font-size: medium;" data-mce-style="font-size: medium;"><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">Warm regards,<br>Team,
									LegalRaasta<br></span></span><a
								href="https://www.legalraasta.com/private-limited-company-registration/"
								data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><span
									style="color: #1155cc;" data-mce-style="color: #1155cc;"><span
										style="font-family: Calibri, serif;" data-mce-style="font-family: Calibri, serif;">Company
										formation</span></span></a><span style="color: #000000;"
								data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> | </span></span><a
								href="https://www.legalraasta.com/trademark-registration/"
								data-mce-href="https://www.legalraasta.com/trademark-registration/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Trademark</span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> | </span></span><a
								href="https://www.legalraasta.com/fssai-license/"
								data-mce-href="https://www.legalraasta.com/fssai-license/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Licenses</span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> | </span></span><a
								href="https://www.legalraasta.com/gst-registration/"
								data-mce-href="https://www.legalraasta.com/gst-registration/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">GST</span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;"> | </span></span><a
								href="https://www.legalraasta.com/accounting-bookkeeping/"
								data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Accounting |</span></span></a> <a
								href="https://drive.google.com/file/d/1CMaCZQkPWtJYUIqQeY0R7L3SMy-_-TZj/view?usp=sharing"
								data-mce-href="https://drive.google.com/file/d/1CMaCZQkPWtJYUIqQeY0R7L3SMy-_-TZj/view?usp=sharing">NBFC
								Guide Book</a><span style="color: #000000;" data-mce-style="color: #000000;"><span
									style="font-family: Calibri, serif;" data-mce-style="font-family: Calibri, serif;"><br>M: 875
									000 8585 | </span></span><a href="https://www.legalraasta.com/"
								data-mce-href="https://www.legalraasta.com/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">legalraasta.com</span></span><span
									style="color: #000000;" data-mce-style="color: #000000;"><span
										style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;"><br></span></span></a><span
								style="color: #000000;" data-mce-style="color: #000000;"><span style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">*</span></span><a
								href="https://www.legalraasta.com/terms-and-conditions/"
								data-mce-href="https://www.legalraasta.com/terms-and-conditions/"><span style="color: #1155cc;"
									data-mce-style="color: #1155cc;"><span style="font-family: Calibri, serif;"
										data-mce-style="font-family: Calibri, serif;">Terms &amp; Conditions
										apply</span></span></a><span style="color: #000000;" data-mce-style="color: #000000;"><span
									style="font-family: Calibri, serif;"
									data-mce-style="font-family: Calibri, serif;">&nbsp;</span></span></span></span></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '004') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].' </p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Company formation.</p>
				<p><b>Package includes:</b> 1 DIN (Director Identification no)&nbsp;, 1 DSC, 1 RUN/Name, Search &amp; Approval, MOA/
					AOA Filing, ROC registration Fees (upto 1 lakh capital), PAN &amp; TAN, Certificate of Incorporation, Bank
					Opening Support, Accounting Software, Bookkeeping (1 month free)</p>
				<p><b>Time required</b>: &lt;15 working days*</p>
				<p><b>Cost</b>: Rs. 5,999 onwards (incl. GST)</p>
				<p><b>Process:</b><b><br></b>Step 1: Fill application form -&nbsp;<a
						href="http://www.legalraasta.com/one-person-application-form/"
						data-mce-href="http://www.legalraasta.com/one-person-application-form/">Click here</a><a
						href="https://www.legalraasta.com/private-limited-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a><br><b>Step 2: Pay Rs.
						2,000 now &amp; remaining after name approval:&nbsp;<a href="https://www.legalraasta.com/payment/"
							data-mce-href="https://www.legalraasta.com/payment/">Click here </a></b><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>PAN Card of Directors (Copy),<b> </b>ID Proof of Directors (Prefer Aadhaar Card)<b>,
					</b>Passport size photograph of all the Directors<b>, </b>Residential Proof of registered office (Telephone or
					Mobile Bill/ Electricity or Gas Bill)<b>, </b>Landlord NOC (we will provide the format)<b>, </b>Bank
					statement/Utility bill of Director</p>
				<p>You can also view our Youtube guide on<b>&nbsp;<a
							href="https://www.youtube.com/watch?v=AOY9KJS4wr8&amp;feature=youtu.beOpc"
							data-mce-href="https://www.youtube.com/watch?v=AOY9KJS4wr8&amp;feature=youtu.beOpc">OPC</a><a
							href="https://www.youtube.com/watch?v=AOY9KJS4wr8&amp;feature=youtu.beOpc"
							data-mce-href="https://www.youtube.com/watch?v=AOY9KJS4wr8&amp;feature=youtu.beOpc">&nbsp;Incorporation</a></b>
					| <a href="https://drive.google.com/file/d/1vAjuJ8G0xs3WfJ6MW6I7ypoy6Ld79LG_/view?usp=sharing"
						data-mce-href="https://drive.google.com/file/d/1vAjuJ8G0xs3WfJ6MW6I7ypoy6Ld79LG_/view?usp=sharing">OPC
						Guidebook&lt;/</a></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p>Warm regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
						formation</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a> | <a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/">Accounting</a><br>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>*<a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions apply </a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '011') {
			$Body='This Mail is need to Change and Rewrite';
		}else if(isset($_POST['service_code']) && $service_code == '005') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].'</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Company formation.</p>
				<p><b>Package includes:</b> 2 DIN (Director Identification no)&nbsp;, 1 DSC, 1 RUN/Name, Search &amp; Approval, MOA/
					AOA Filing, ROC registration Fees (upto 1 lakh capital), PAN &amp; TAN, Certificate of Incorporation, Bank
					Opening Support, Accounting Software, Bookkeeping (1 month free)</p>
				<p><b>Time required</b>: &lt;15 working days*</p>
				<p><b>Cost</b>: Rs. 12,999 onwards (incl. GST)</p>
				<p><b>Process</b>:<br>Step 1: Fill application form -&nbsp;<a
						href="http://www.legalraasta.com/section-8-company-application-form/"
						data-mce-href="http://www.legalraasta.com/section-8-company-application-form/">Click here</a><a
						href="https://www.legalraasta.com/private-limited-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a><br><b>Step 2: Make
						payment: Rs. 12,999 onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here </b></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents&nbsp;</a></p>
				<p><b>Documents Required: </b>PAN Card of Directors (Copy),<b> </b>ID Proof of Directors (Prefer Aadhaar Card)<b>,
					</b>Passport size photograph of all the Directors<b>, </b>Residential Proof of registered office (Telephone or
					Mobile Bill/ Electricity or Gas Bill)<b>, </b>Landlord NOC (we will provide the format)<b>, </b>Bank
					statement/Utility bill of Director</p>
				<p>You can also view our Youtube guide on<b>&nbsp;<a href="https://youtu.be/LYMwZ8VEfJk"
							data-mce-href="https://youtu.be/LYMwZ8VEfJk">Section 8 Incorporation</a> | <a
							href="https://drive.google.com/file/d/1zza-1HfTOdrCPyZQtS8WTD-8-kx0-hjc/view?usp=sharing"
							data-mce-href="https://drive.google.com/file/d/1zza-1HfTOdrCPyZQtS8WTD-8-kx0-hjc/view?usp=sharing">Section
							8 Company Guidebook</a> </b></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
						formation</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a> | <a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/">Accounting</a><br>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a></p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '003') {
			$Body='<html>
			<body>
				<p>Dear '.$_POST['name'].',</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 500+
					companies in Company formation.</p>
				<p><b>Package includes:</b> 3 DIN (Director Identification no)&nbsp;, 7 DSC, 1 RUN/Name, Search &amp; Approval, MOA/
					AOA Filing, ROC registration Fees (upto 1 lakh capital), PAN &amp; TAN, Certificate of Incorporation, Bank
					Opening Support, Accounting Software, Bookkeeping (1 month free)</p>
				<p><b>Time required</b>: &lt;15 working days*</p>
				<p><b>Cost</b>:Rs. 24,999  onwards (incl. GST)</p>
				<p><b>Process:</b><br>Step 1: Fill application form -&nbsp;<a
						href="http://www.legalraasta.com/nidhi-co-application-form/"
						data-mce-href="http://www.legalraasta.com/nidhi-co-application-form/">Click here</a><a
						href="https://www.legalraasta.com/private-limited-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-registration/">&nbsp;</a><br><b>Step 2: Make
						payment:Rs. 24,999  onwards:&nbsp;</b><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here </b></a><br>Step 3: <a
						href="https://client.legalraasta.com/d.php" data-mce-href="https://client.legalraasta.com/d.php">Upload
						Documents</a>&nbsp;</p>
				<p><b>Documents Required: </b>PAN Card of Directors (Copy),<b> </b>ID Proof of Directors (Prefer Aadhaar Card)<b>,
					</b>Passport size photograph of all the Directors<b>, </b>Residential Proof of registered office (Telephone or
					Mobile Bill/ Electricity or Gas Bill)<b>, </b>Landlord NOC (we will provide the format)<b>, </b>Bank
					statement/Utility bill of Director</p>
				<p>You can also view our Youtube guide on<b>&nbsp;<a
							href="https://www.youtube.com/watch?v=khADwWFTpo0&amp;feature=youtu.be"
							data-mce-href="https://www.youtube.com/watch?v=khADwWFTpo0&amp;feature=youtu.be">Nidhi Incorporation</a>
						| <a href="https://drive.google.com/file/d/16N8SLbX_tn3J1XXznimGpS_fm3fkkxfT/view?usp=sharing"
							data-mce-href="https://drive.google.com/file/d/16N8SLbX_tn3J1XXznimGpS_fm3fkkxfT/view?usp=sharing">Nidhi
							company Guidebook</a><br></b><b><br>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company
						formation</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a>&nbsp;|&nbsp;<a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a> | <a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/">Accounting</a><br>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>*<a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a>&nbsp;&nbsp;</p>
			</body>
		</html>';
		}else if(isset($_POST['service_code']) && $service_code == '006') {
			$Body='<html>
			<body>
				<p>Hi  '.$_POST['name'].',</p>
				<p>Greetings from LegalRaasta - India’s top financial services platform! Every year LegalRaasta helps more than 100+
					companies in Microfinance Formation.</p>
				<p><b>Package includes: </b>Name search &amp; approval, DSC, DIN, Certificate of Incorporation, Pan card, Bank
					account opening assistance, Accounting software, Bookkeeping (1 month free)</p>
				<p><b>Time required:</b> &lt;15-30 working days</p>
				<p><b>Cost:</b> Rs. 1,90,000 onwards (incl. gst*)</p>
				<p><b>Process:</b> Step 1: Fill application form - <a href="https://www.legalraasta.com/micro-finance-application/"
						data-mce-href="https://www.legalraasta.com/micro-finance-application/">Click here<br><b>Step 2: Make
							payment: </b></a><a href="https://www.legalraasta.com/payment/"
						data-mce-href="https://www.legalraasta.com/payment/"><b>Click here</b><br><b>Step 3:</b> </a><a
						href="https://client.legalraasta.com/d.php/" data-mce-href="https://client.legalraasta.com/d.php/">Upload
						Documents</a></p>
				<p><b>Requirements: </b>Directors Pan, Directors Id proof (Prefer Aadhar Card), Directors photo, Residential Proof
					of registered office (Telephone or Mobile Bill/ Electricity or Gas Bill), Landlord NOC (we will provide the
					format), Bank statement/Utility bill of Director, No approval from RBI required under Section 8.</p>
				<p><b>LegalRaasta in News:</b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>|<a
						href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
				</p>
				<p>Warm regards,<br>Team, LegalRaasta<br><a href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">Company formation | </a><a
						href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/">Trademark</a><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"> | </a><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/">Licenses</a><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"> | </a><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/">GST</a><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"> | </a><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/">Accounting</a><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><br>M: 875 000 8585 |
					</a><a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com<br></a><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/">*</a><a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions apply</a></p>
			</body>
		</html>';
		}else{
            $Body =$Body='<html>
			<body>
				<p>Dear  '.$_POST['name'].',</p>
				<p>Thanks for Submission of this Service </p>
				

				<p>You can also view our <a
						href="https://drive.google.com/file/d/1Tje68gnJ8j-9FP_gbrlfTy3MBEB_6psJ/view?usp=sharing"
						data-mce-href="https://drive.google.com/file/d/1Tje68gnJ8j-9FP_gbrlfTy3MBEB_6psJ/view?usp=sharing">Trademark
						Guidebook</a></p>
				<p><b>LegalRaasta in News: </b><a
						href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/startups/legalraasta-raises-rs-6-5-crore-in-angel-round/articleshow/51813536.cms">Economic
						times</a> | <a
						href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms"
						data-mce-href="https://economictimes.indiatimes.com/small-biz/money/legal-business-consultancy-firm-legalraasta-raises-funds-to-provide-gst-c0mpliance-software-to-more-smes/articleshow/58638228.cms">IndiaTimes</a>
					| <a href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/"
						data-mce-href="https://www.vccircle.com/exclusive-legal-raasta-raises-5-mn-in-series-a-round/">VCCircle</a>
					| <a href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/"
						data-mce-href="http://bwdisrupt.businessworld.in/article/Delhi-Based-Startup-LegalRaasta-Raises-5M-in-Series-A-Round-from-Impanix-Capital/12-05-2017-118035/">BusinessWorld</a>
					| <a href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s"
						data-mce-href="https://www.youtube.com/watch?v=NSIg1XT-KM0&amp;t=1s">YouTube</a></p>
				<p><b><br></b>Warm regards,<br>Team, LegalRaasta<br><a
						href="https://www.legalraasta.com/private-limited-company-registration/"
						data-mce-href="https://www.legalraasta.com/private-limited-company-registration/"><i>Company
							formation</i></a><em>&nbsp;|&nbsp;</em><a href="https://www.legalraasta.com/trademark-registration/"
						data-mce-href="https://www.legalraasta.com/trademark-registration/"><i>Trademark</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/fssai-license/"
						data-mce-href="https://www.legalraasta.com/fssai-license/"><i>Licenses</i></a><em>&nbsp;|&nbsp;</em><a
						href="https://www.legalraasta.com/gst-registration/"
						data-mce-href="https://www.legalraasta.com/gst-registration/"><i>GST</i></a><em> | </em><a
						href="https://www.legalraasta.com/accounting-bookkeeping/"
						data-mce-href="https://www.legalraasta.com/accounting-bookkeeping/"><i>Accounting</i></a><em>&nbsp;&nbsp;</em><i><br></i>M:&nbsp;<a
						href="tel:%2B91%20875%20000%208585" data-mce-href="tel:%2B91%20875%20000%208585">875 000
						8585</a>&nbsp;|&nbsp;<a href="https://www.legalraasta.com/"
						data-mce-href="https://www.legalraasta.com/">legalraasta.com</a><br>* <a
						href="https://www.legalraasta.com/terms-and-conditions/"
						data-mce-href="https://www.legalraasta.com/terms-and-conditions/">Terms &amp; Conditions</a> apply. For
					companies,&gt; 5cr turnover charges are 11,499 (incl. GST).</p>
				<h6 class="western">*If any objection comes to your trademark, the fees will be extra for the further process of
					reply application in the department.</h6>
			</body>
		</html>';
        }
		$custmail->MsgHTML($Body); 
		if(!$custmail->send()) {
		echo 'Message was not sent.';
		echo 'Mailer error: ' . $custmail->ErrorInfo;
		} 

		else {
		echo 'Message has been sent.';
		$status = "success";
			$response = "Email is sent!";
		}
    }

exit(json_encode(array("status" => $status, "response" => $response)));
