<?php
$dum=0;
$res = array('error_msg' => 101,'msg'=>"failed" );
$json=json_decode(file_get_contents('php://input'));
$connect = mysqli_connect("localhost","root","","alumn");
// $curdate=date("Y-m-d");

if ($json->{'tag'} == "register")	
 {
 // $token=mt_rand(1000,9999);
// echo $json->{'mail'};
$sqll="SELECT t.token, r.alumni_id FROM reset t,register r WHERE r.alumni_id=t.id AND t.clicked='0' AND r.email='".$json->{'mail'}."'";
$sqlresult=mysqli_query($connect,$sqll);
	
	while($a=mysqli_fetch_assoc($sqlresult))	
	{
echo $json->{'otp'};
	// echo $a['otp'];	

	echo $json->{'mail'};	// $id=$a['token'];
if($a['token']==$json->{'otp'})
{
	echo $json->{'otp'};
	
$password=$json->{'pass'};
		
$sqla="UPDATE reset t,register r SET r.password='$password',t.clicked='1'  WHERE t.id=r.alumni_id AND r.email='".$json->{"mail"}."'";	 

if(mysqli_query($connect,$sqla)==true)
{
	$res['error_msg'] = 0;
	$res['msg'] = "register successful";
	$dum=1;
}
else
{
	$res['error_msg'] = 11;
		$res['msg'] = "register failed";
}
}
}
// else
// {
// 	echo "enter correct otp";
// }
}
// else 
// {
	// echo $json->{'otp'};
		
	// }
		

echo json_encode($res);

mysqli_close($connect);
?>