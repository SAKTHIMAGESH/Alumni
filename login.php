<?php
	$res = array('error_msg' => 101,'msg'=>"failed" );
	$json=json_decode(file_get_contents('php://input'));
	$connect = mysqli_connect("localhost","root","","alumn");
$active=0;
if($connect==true)
{
	if ($json->{'tag'} == "register") {
$res['con']=0;
// $pass=md5($json->{'pass'});
		$sql= mysqli_query($connect,"SELECT * from `register`WHERE email='".$json->{'mail'}."'  AND active=1 AND password='".$json->{'pass'}."' ");
 	$result=mysqli_num_rows($sql);
	 	if ($result>0)
	 	 {
	 	 	while($result1=mysqli_fetch_assoc($sql))
	 	 	{
	
	echo $result1['email'];
echo $result1['password'];
	 	 		$res['active']=$result1['active'];
	 	 		// echo date("F d, Y, h:i A",time()); date used in needs
	 	 		$res['error_msg'] = 0;
	 	 		$active=$res['active'];
			$res['msg'] = "Login Successful";
	 	 	}
			
		} 
		else {
			$res['active']=$active;
			$res['error_msg'] = 11;
			$res['msg'] = "register failed";
		}
	}



}
else
{
	$res['con']=1;
}
echo json_encode($res);
mysqli_close($connect);

?>