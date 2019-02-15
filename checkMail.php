<?php
	$res = array('error_msg' => 101,'msg'=>"failed" );
	$json=json_decode(file_get_contents('php://input'));
	$connect = mysqli_connect("localhost","root","","alumn");

if($connect)
{
	if ($json->{'tag'} == "register") {

		$sql= mysqli_query($connect,"SELECT * from `register`WHERE email='".$json->{'mail'}."'");
 	$result=mysqli_num_rows($sql);
	 	if ($result>0)
	 	 {
	 	 	while($result1=mysqli_fetch_assoc($sql))
	 	 	{

				$res['con']=0;
	 	 		$res['error_msg']=0;
	 	 		$res['msg']="exists";
	 	 			}
			
		} else {
			$res['error_msg']=1;
			$res['msg']="b";
			$res['mail']=1;
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