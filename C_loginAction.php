<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Company Log in Page</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
  <body>
<?php

if(isset($_POST['login'])){
	if(empty($_POST['username'])){
		$data_missing[] = 'username';
	}else{
		$username = trim($_POST['username']);
	}

	if(empty($_POST["pwd"])){
		$data_missing[] = "password";
	}else{
		$password = trim($_POST["pwd"]);
	}

	if(empty($data_missing)){
		require_once 'dbConnection.php';

		$query = 'select * from company_account where Account="'.$username.'" and Password ="'.$password.'"';
		$result = mysqli_query($dbc, $query);
		$userid = -1;
		if(!$result){
			echo 'wrong password';
			echo $query;
		}else{

			if(mysqli_num_rows($result)>0){
				$row = mysqli_fetch_assoc($result);
				$userid = $row['C_Aid'];
			}

			mysqli_free_result($result);
			mysqli_close($dbc);

			if($userid > 0){
				header("Location: post.html?userid=".$userid);
			}else{
				echo "Fail to login";
			}

		}
	}else{

		echo<<<_END
		<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h2 class="text-center">You need to enter following data</h2>
           </div>
_END;
		foreach ($data_missing as $missing){
			echo "$missing<br/>";
		}
	}
}
?>
</body>
</html>
