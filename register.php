<?php

		require 'PHPMailer\mailer\PHPMailerAutoload.php';
	

$res = array('error_msg' => 101,'msg'=>"failed" );
$json=json_decode(file_get_contents('php://input'));
$connect = mysqli_connect("localhost","root","","alumn");
$curdate=date("Y-m-d");

if ($json->{'tag'}=="register") {
	$pass=md5($json->{'pass'});
	$active=$json->{'active'};
	echo $active;
	echo $json->{'place'};
$id=0;
$token=mt_rand(1000,9999);
$sql= "INSERT INTO `register`(`fname`,`lname`,`email`,`pno`,`password`,`course`,`branch`,`year_entry`,`year_grad`,`rollno`,`dob`,`place`,`created_date`,`active`) VALUES('".$json->{'fname'}."','".$json->{'lname'}."','".$json->{'mail'}."','".$json->{'pno'}."','$pass','".$json->{'course'}."','".$json->{'branch'}."','".$json->{'year'}."','".$json->{'year'}."'+3,'".$json->{'rollno'}."','".$json->{'dob'}."','".$json->{'place'}."','$curdate','$active')";
if(mysqli_query($connect,$sql)==true)
{
$sqll="SELECT alumni_id from `register` where `email`='".$json->{'mail'}."'";
$ress=mysqli_query($connect,$sqll);
$r=mysqli_num_rows($ress);
echo $json->{'course'};
echo $r;
if($r>0)
{
	while($a=mysqli_fetch_assoc($ress))
	{
		$id=$a['alumni_id'];
	
	}
	}
	echo $id;
	$sqla="INSERT INTO `token`(`token`,`time`,`id`,`clicked`)values('$token',CURRENT_TIMESTAMP,'$id',0)";
 	if (mysqli_query($connect,$sqla) === true) {
		$res['error_msg'] = 0;
		$res['msg'] = "register successful";
$mail_id = $json->{'mail'};
	if (isset($mail_id) && $mail_id != '') {
		// $res['error'] = 0;
		// $res['result'] = 'Valid Mail ID';
		$mail = new PHPMailer;
		$mail->SMTPDebug = true;
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->IsSMTP();
		$mail->Username = 'alumnianjac@gmail.com';                 // SMTP username
		$mail->Password = 'alagu999';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect 
		   
		$mail->setFrom('alumnianjac@gmail.com', 'ANJAC');
		$mail->addAddress($mail_id);     // Add a recipient   
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'OTP';
		$mail->Body    = $token.'<br /><br/><br />';
		$val = $mail->send();
	}

}
	} else {
		$res['error_msg'] = 11;
		$res['msg'] = "register failed";
	}
	


}
echo json_encode($res);	

mysqli_close($connect);
?>