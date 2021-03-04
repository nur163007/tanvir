<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tourism</title>
</head>

<body>

	<?php include('function.php'); ?>
	<?php
	use PHPMailer\PHPMailer\PHPMailer;
	require_once 'phpmailer/Exception.php';
	require_once 'phpmailer/PHPMailer.php';
	require_once 'phpmailer/SMTP.php';

	$mail = new PHPMailer(true);

	$cn=makeconnection();
	$s="update enquiry set statusfield='Confirm' where enquiryid='" . $_GET["eid"] . "'";
	mysqli_query($cn,$s);
	
	// header("location:viewenquiry.php");


	if(isset($_GET['eid'])){

		$emailquery ="select * from enquiry where enquiryid='" . $_GET["eid"] . "'";
		$emails=mysqli_query($cn, $emailquery);
		while($emailsent = mysqli_fetch_assoc($emails)) {
			$emailacc=$emailsent['Email'];
			$name = $emailsent['Name'];
			$mobile = $emailsent['Mobileno'];
			$days = $emailsent['NoofDays'];
			$nights = $emailsent['NoofNights'];
			$child = $emailsent['Child'];
			$adults = $emailsent['Adults'];
			$status =$emailsent['Statusfield'];


// $email_to = $emailacc;
// $subject = 'Confirmation of booking tour';
// $body = "<h3><b>Tourism</b><br> Arranged a tour for you.<br> Your name: $name.<br>Phone: $mobile.<br>No of days: $days.<br> No of nights: $nights.<br> No of child: $child.<br> No of adults: $adults.<br>Booking status: $status.<br><br>You are most welcome to our services. We provide this tour timely you have to join the with us<br><br><br><br> Thank you.</h3>";
// $headers = "From: redhuanislamron@gmail.com";

// if(mail($email_to,$subject,$body,$headers)){
// 	echo '<script>alert ("Confirmation sent successfully")</script>';
//     echo '<script>window.location="viewenquiry.php"</script>'; 
// }else{
// 	echo '<script>alert ("Something Wrong")</script>';
// 	echo '<script>window.location="viewenquiry.php"</script>';
// }

			try{
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                // Enable SMTP authentication
$mail->Username = 'redhuanislamron@gmail.com';                 // SMTP username
$mail->Password = 'mohammadnur32';                         // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('redhuanislamron@gmail.com');
$mail->addAddress($emailacc);     // Add a recipient
   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Confirmation of booking tour';
$mail->Body    = "<h3><b>Tourism</b><br> Arranged a tour for you.<br> Your name: $name.<br>Phone: $mobile.<br>No of days: $days.<br> No of nights: $nights.<br> No of child: $child.<br> No of adults: $adults.<br>Booking status: $status.<br><br>You are most welcome to our services. We provide this tour timely you have to join the with us<br><br><br><br> Thank you.</h3>";

$mail->send();
echo '<script>alert ("Confirmation sent successfully")</script>';
echo '<script>window.location="viewenquiry.php"</script>'; 
}
catch(Exception $e){
	echo '<script>alert ("Something Wrong")</script>';
	echo '<script>window.location="viewenquiry.php"</script>'; 
}
}
}
// mysqli_close($cn);
?>
</body>
</html>