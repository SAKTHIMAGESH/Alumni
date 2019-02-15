<?php

		

$res = array('error_msg' => 101,'msg'=>"failed" );
$json=json_decode(file_get_contents('php://input'));
$connect = mysqli_connect("localhost","root","","alumn");
$curdate=date("F d, Y, h:i A",time());

if ($json->{'tag'}=="register") {
	
$sql="SELECT alumni_id,fname from `register` where `email`='".$json->{'mail'}."'";
$ress=mysqli_query($connect,$sql);
$r=mysqli_num_rows($ress);
if($r>0)
{
	while($a=mysqli_fetch_assoc($ress))
	{
		$id=$a['alumni_id'];
		$fname=$a['fname'];
	
	}
	}
	// echo $id;
	$sqla="INSERT INTO `needs`(`need_id`, `alumni_id`, `category`, `body`, `posted_by`, `added_date`) VALUES ('','$id','".$json->{'category'}."','".$json->{'content'}."','$fname','$curdate')";
 	if (mysqli_query($connect,$sqla) === true) {
		$res['error_msg'] = 0;
		$res['msg'] = "register successful";
	}
} else {
		$res['error_msg'] = 11;
		$res['msg'] = "register failed";
	}
	



echo json_encode($res);	

mysqli_close($connect);
?>