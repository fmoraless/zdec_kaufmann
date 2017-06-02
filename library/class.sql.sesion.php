<?php 
	require_once('conex.php');	
		//mysql_select_db('zdec');
class ClassSession{

	function userSesion($user,$pwd){
		$query = " SELECT NAME 
				   FROM USERS 
				   WHERE EMAIL = '".$user."' 
				   AND PASSWORD = '".$pwd."' ";

    	$dataResult = mysql_query($query);
    	return $dataResult;	
	}
}        
?>