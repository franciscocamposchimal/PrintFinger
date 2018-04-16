<?php
	
if (isset($_GET['user_id']) && !empty($_GET['user_id'])) {
	include('include/global.php');
	include('include/function.php');

	$user_id 	= $_GET['user_id'];
	var_dump($user_id);
	var_dump($time_limit_reg);
	var_dump($base_path);

	echo "$user_id;SecurityKey;".$time_limit_reg.";".$base_path."process_register.php;".$base_path."getac.php";
	
}

?>