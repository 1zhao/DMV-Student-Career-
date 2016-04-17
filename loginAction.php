<?php
if(isset($_POST['ComLogin'])){
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
				header("Location: Company_Post.html?userid=".$userid);
			}else{
				echo "Fail to login";
			}

		}
	}else{
		echo 'You need to enter following data<br/>';
		foreach ($data_missing as $missing){
			echo "$missing<br/>";
		}
	}
}



if(isset($_POST['StuLogin'])){
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

		$query = 'select * from student_account where Account="'.$username.'" and Password ="'.$password.'"';
		$result = mysqli_query($dbc, $query);
		$userid = -1;
		if(!$result){
			echo 'wrong password';
			echo $query;
		}else{

			if(mysqli_num_rows($result)>0){
				$row = mysqli_fetch_assoc($result);
				$userid = $row['S_Aid'];
			}

			mysqli_free_result($result);
			mysqli_close($dbc);

			if($userid > 0){
				header("Location: Student_Search.html?userid=".$userid);
			}else{
				echo "Fail to login";
			}

		}
	}else{
		echo 'You need to enter following data<br/>';
		foreach ($data_missing as $missing){
			echo "$missing<br/>";
		}
	}
}
?>
