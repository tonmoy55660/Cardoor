<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Mail </title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>
<?php
include_once 'admin/dbCon.php';
$conn = connect();
	if (isset($_GET['id'])){
    $id = $_GET['id'];
	$sql = "SELECT * FROM `booking_details` AS b , user_details as u , car_details as c
          WHERE b.`cus_id` = u.cus_id AND b.car_id=c.car_id AND booking_id='$id'";
  $result = $conn->query($sql);
  foreach ($result as $row){
    $usermail = $row['email'];
    $name = $row['name'];
    $pick_date = $row['pick_date'];
    $return_date = $row['return_date'];
    $total_bill = $row['total_bill'];
    $car_name = $row['car_name'];
    $driver_name = $row['driver_name'];
    $driver_phone = $row['driver_phone'];
  }
		$mailto = $usermail;
		$mailSub 	= "Booking Receipt";
		$message	="
		<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
			<meta name='viewport' content='width=device-width, initial-scale=1.0' />
			<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
			<title>Set up a new password for [Product Name]</title>
			<!--
			The style block is collapsed on page load to save you some scrolling.
			Postmark automatically inlines all CSS properties for maximum email client
			compatibility. You can just update styles here, and Postmark does the rest.
			-->
			<style type='text/css' rel='stylesheet' media='all'>
			/* Base ------------------------------ */

			*:not(br):not(tr):not(html) {
			font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
			box-sizing: border-box;
			}

			body {
			width: 100% !important;
			height: 100%;
			margin: 0;
			line-height: 1.4;
			background-color: #F2F4F6;
			color: #74787E;
			-webkit-text-size-adjust: none;
			}

			p,
			ul,
			ol,
			blockquote {
			line-height: 1.4;
			text-align: left;
			}

			a {
			color: #3869D4;
			}

			a img {
			border: none;
			}

			td {
			word-break: break-word;
			}
			/* Layout ------------------------------ */

			.email-wrapper {
			width: 100%;
			margin: 0;
			padding: 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			background-color: #F2F4F6;
			}

			.email-content {
			width: 100%;
			margin: 0;
			padding: 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			}
			/* Masthead ----------------------- */

			.email-masthead {
			padding: 25px 0;
			text-align: center;
			}

			.email-masthead_logo {
			width: 94px;
			}

			.email-masthead_name {
			font-size: 16px;
			font-weight: bold;
			color: #bbbfc3;
			text-decoration: none;
			text-shadow: 0 1px 0 white;
			}
			/* Body ------------------------------ */

			.email-body {
			width: 100%;
			margin: 0;
			padding: 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			border-top: 1px solid #EDEFF2;
			border-bottom: 1px solid #EDEFF2;
			background-color: #FFFFFF;
			}

			.email-body_inner {
			width: 570px;
			margin: 0 auto;
			padding: 0;
			-premailer-width: 570px;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			background-color: #FFFFFF;
			}

			.email-footer {
			width: 570px;
			margin: 0 auto;
			padding: 0;
			-premailer-width: 570px;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			text-align: center;
			}

			.email-footer p {
			color: #AEAEAE;
			}

			.body-action {
			width: 100%;
			margin: 30px auto;
			padding: 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			text-align: center;
			}

			.body-sub {
			margin-top: 25px;
			padding-top: 25px;
			border-top: 1px solid #EDEFF2;
			}

			.content-cell {
			padding: 35px;
			}

			.preheader {
			display: none !important;
			visibility: hidden;
			mso-hide: all;
			font-size: 1px;
			line-height: 1px;
			max-height: 0;
			max-width: 0;
			opacity: 0;
			overflow: hidden;
			}
			/* Attribute list ------------------------------ */

			.attributes {
			margin: 0 0 21px;
			}

			.attributes_content {
			background-color: #EDEFF2;
			padding: 16px;
			}

			.attributes_item {
			padding: 0;
			}
			/* Related Items ------------------------------ */

			.related {
			width: 100%;
			margin: 0;
			padding: 25px 0 0 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			}

			.related_item {
			padding: 10px 0;
			color: #74787E;
			font-size: 15px;
			line-height: 18px;
			}

			.related_item-title {
			display: block;
			margin: .5em 0 0;
			}

			.related_item-thumb {
			display: block;
			padding-bottom: 10px;
			}

			.related_heading {
			border-top: 1px solid #EDEFF2;
			text-align: center;
			padding: 25px 0 10px;
			}
			/* Discount Code ------------------------------ */

			.discount {
			width: 100%;
			margin: 0;
			padding: 24px;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			background-color: #EDEFF2;
			border: 2px dashed #9BA2AB;
			}

			.discount_heading {
			text-align: center;
			}

			.discount_body {
			text-align: center;
			font-size: 15px;
			}
			/* Social Icons ------------------------------ */

			.social {
			width: auto;
			}

			.social td {
			padding: 0;
			width: auto;
			}

			.social_icon {
			height: 20px;
			margin: 0 8px 10px 8px;
			padding: 0;
			}
			/* Data table ------------------------------ */

			.purchase {
			width: 100%;
			margin: 0;
			padding: 35px 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			}

			.purchase_content {
			width: 100%;
			margin: 0;
			padding: 25px 0 0 0;
			-premailer-width: 100%;
			-premailer-cellpadding: 0;
			-premailer-cellspacing: 0;
			}

			.purchase_item {
			padding: 10px 0;
			color: #74787E;
			font-size: 15px;
			line-height: 18px;
			}

			.purchase_heading {
			padding-bottom: 8px;
			border-bottom: 1px solid #EDEFF2;
			}

			.purchase_heading p {
			margin: 0;
			color: #9BA2AB;
			font-size: 12px;
			}

			.purchase_footer {
			padding-top: 15px;
			border-top: 1px solid #EDEFF2;
			}

			.purchase_total {
			margin: 0;
			text-align: right;
			font-weight: bold;
			color: #2F3133;
			}

			.purchase_total--label {
			padding: 0 15px 0 0;
			}
			/* Utilities ------------------------------ */

			.align-right {
			text-align: right;
			}

			.align-left {
			text-align: left;
			}

			.align-center {
			text-align: center;
			}
			/*Media Queries ------------------------------ */

			@media only screen and (max-width: 600px) {
			.email-body_inner,
			.email-footer {
				width: 100% !important;
			}
			}

			@media only screen and (max-width: 500px) {
			.button {
				width: 100% !important;
			}
			}
			/* Buttons ------------------------------ */

			.button {
			background-color: #3869D4;
			border-top: 10px solid #3869D4;
			border-right: 18px solid #3869D4;
			border-bottom: 10px solid #3869D4;
			border-left: 18px solid #3869D4;
			display: inline-block;
			color: #FFF;
			text-decoration: none;
			border-radius: 3px;
			box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
			-webkit-text-size-adjust: none;
			}

			.button--green {
			background-color: #22BC66;
			border-top: 10px solid #22BC66;
			border-right: 18px solid #22BC66;
			border-bottom: 10px solid #22BC66;
			border-left: 18px solid #22BC66;
			}

			.button--red {
			background-color: #FF6136;
			border-top: 10px solid #FF6136;
			border-right: 18px solid #FF6136;
			border-bottom: 10px solid #FF6136;
			border-left: 18px solid #FF6136;
			}
			/* Type ------------------------------ */

			h1 {
			margin-top: 0;
			color: #2F3133;
			font-size: 19px;
			font-weight: bold;
			text-align: left;
			}

			h2 {
			margin-top: 0;
			color: #2F3133;
			font-size: 16px;
			font-weight: bold;
			text-align: left;
			}

			h3 {
			margin-top: 0;
			color: #2F3133;
			font-size: 14px;
			font-weight: bold;
			text-align: left;
			}

			p {
			margin-top: 0;
			color: #74787E;
			font-size: 16px;
			line-height: 1.5em;
			text-align: left;
			}

			p.sub {
			font-size: 12px;
			}

			p.center {
			text-align: center;
			}
			</style>
		</head>
		<body>
			<span class='preheader'>Customer Receipt </span>
			<table class='email-wrapper' width='100%' cellpadding='0' cellspacing='0'>
			<tr>
				<td align='center'>
				<table class='email-content' width='100%' cellpadding='0' cellspacing='0'>
					<tr>
					<td class='email-masthead'>
						<a class='email-masthead_name'>
				WELCOME
			</a>
					</td>
					</tr>
					<!-- Email Body -->
					<tr>
					<td class='email-body' width='100%' cellpadding='0' cellspacing='0'>
						<table class='email-body_inner' align='center' width='570' cellpadding='0' cellspacing='0'>
						<!-- Body content -->
						<tr>
							<td class='content-cell'>
							<h1>Hi , $name</h1>
							<p>Thanks for your booking! </p>
							<!-- Action -->
							<table class='body-action' align='center' width='100%' cellpadding='0' cellspacing='0'>
								<tr>
								<td align='center'>
									<!-- Border based button
									<table width='100%' border='0' cellspacing='1' cellpadding='2'>
									<tr>
										<td align='Left'>
										<table border='0' cellspacing='1' cellpadding='2'>
											<tr>
											<label style='font-size:20px;' >Pick Date : <b>$pick_date</b></label>
											</tr>
                      <tr>
											<label style='font-size:20px;' >Return Date : <b>$return_date</b></label>
											</tr>
                      <tr>
											<label style='font-size:20px;' >Car Name : <b>$car_name</b></label>
											</tr>
                      <tr>
											<label style='font-size:20px;' >Driver Name : <b>$driver_name</b></label>
											</tr>
                      <tr>
											<label style='font-size:20px;' >Driver Phone : <b>$driver_phone</b></label>
											</tr>
                      <tr>
											<label style='font-size:20px;color:red;' >Total Bill : <b>$total_bill</b>/-</label>
											</tr>
										</table>
										</td>
									</tr>
									</table>
								</td>
								</tr>
							</table>
							<p>Regards,
								<br>CarDoor</p>
							</td>
						</tr>
						</table>
					</td>
					</tr>
					<tr>
					<td>
						<table class='email-footer' align='center' width='570' cellpadding='0' cellspacing='0'>
						<tr>
							<td class='content-cell' align='center'>
							<p class='sub align-center'>&copy; 2018 CarDoor. All rights reserved.</p>
							<p class='sub align-center'>
								[CarDoor: A rent-a-car company]

							</p>
							</td>
						</tr>
						</table>
							</td>
						</tr>
					</table>
					</td>
				</tr>
				</table>
			</body>
		</html>";
		$mailMsg 	= $message;
		require 'PHPMailer-master/PHPMailerAutoload.php';
		$mail 		= new PHPMailer();
		$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' 		=> false,
			'verify_peer_name' 	=> false,
			'allow_self_signed' => true
		)
		);
		$mail ->IsSmtp();
		$mail ->SMTPDebug = 0;
		$mail ->SMTPAuth = true;
		$mail ->SMTPSecure = 'ssl';
		$mail ->Host = "smtp.gmail.com";
		// $mail ->Port = 465; // or 587
		$mail ->Port = 465; // or 587
		$mail ->IsHTML(true);
		$mail ->Username = "Tonmoytouhid589@gmail.com";
		$mail ->Password = "TONMOY1234567890";
		$mail->setFrom('OnTrac BD', 'OnTrac BD');
		$mail ->Subject = $mailSub;
		$mail ->Body = $mailMsg;
		$mail ->AddAddress($mailto);
			if(!$mail->Send())
			{
        echo '<script>alert("Booking Succesful..Mail cannot be sent..Something Went Wrong!! ")</script>';
        echo '<script>window.location.href="receipt.php?id='."$id".'";</script>';
			}
			else
			{
        echo '<script>alert("Booking Succesful..Mail Sent!! ")</script>';
        echo '<script>window.location.href="receipt.php?id='."$id".'";</script>';
			}
		}


?>
