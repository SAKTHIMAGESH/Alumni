<?php
	$res = array('error_msg' => 101,'msg'=>"failed" );
	$json=json_decode(file_get_contents('php://input'));
	$connect = mysqli_connect("localhost","root","","alumini");

// if($json->{'checkusername'} == "name"){
/*	$check = $json->{'check'};
	if (isset($check) && $check != '') {

*/		$sql= "SELECT username FROM `register` WHERE username ='".$json->{'check'}."'";
 	
 	if($connect->query($sql)===true)
 	{
 		if (mysqli_fetch_assoc($sql)) {
 			if (mysqli_num_rows($sql) > 0) {
		 		$res['error_msg']=301;
		 		$res['msg']="UserName already exists";
		 		echo "already exists";
 			} else
 	{
 		$res['error_msg']=100;
 		$res['msg']="NO username found";
 		echo "no";
 	} 
 		} else {
 			echo "noting to else";
 		}
 	}
 	
	echo json_encode($res);
//	}

	mysqli_close($connect);

?>