<?php
	if(isset($_POST['ComSignup'])){
		if(empty($_POST['Account'])){
			$data_missing[] = 'Account';
		}else{
			$account = trim($_POST['Account']);
		}

		if(empty($_POST["Password"])){
			$data_missing[] = "Password";
		}else{
			$password = trim($_POST["Password"]);
		}
		
		if(empty($data_missing)){
			require_once 'dbConnection.php';
			$query = 'select * from company_account where Account="'.$account.'"';
			$result = mysqli_query($dbc, $query);
			$userid = -1;
			if(mysqli_num_rows($result)>0){
				echo 'Account existed';
			}else{
				$update = "insert into company_account (Account, Password) values ('".$account."','".$password."')";
				mysqli_query($dbc, $update);
				
				$update = "insert into company (Company_Id, Name, Industary, Phone_Num) 
					values ('".$_POST['id']."','".$_POST['Name']."','".$_POST['Industary']."','".$_POST['PhoneNumber']."')";
				
				mysqli_query($dbc, $update);
				echo "Sign up successfully!</br>";
			}
			mysqli_free_result($result);
			mysqli_close($dbc);
			
		}else{
			echo 'You need to enter following data<br/>';
			foreach ($data_missing as $missing){
				echo "$missing<br/>";
			}
		}
	}
	
	if(isset($_POST['StuSignup'])){
		if(empty($_POST['Account'])){
			$data_missing[] = 'Account';
		}else{
			$account = trim($_POST['Account']);
		}

		if(empty($_POST["Password"])){
			$data_missing[] = "Password";
		}else{
			$password = trim($_POST["Password"]);
		}
		
		if(empty($data_missing)){
			require_once 'dbConnection.php';
			$query = 'select * from student_account where Account="'.$account.'"';
			$result = mysqli_query($dbc, $query);
			$userid = -1;
			if(mysqli_num_rows($result)>0){
				echo 'Account existed';
			}else{
				$update = "insert into student_account (Account, Password) values ('".$account."','".$password."')";
				mysqli_query($dbc, $update);
				
				$update = "insert into student (Stu_id, Last_Name, First_Name, Middle_Name, Gender, Langauges, Experiences,Education) 
					values ('".$_POST['id']."','".$_POST['LastName']."','".$_POST['FirstName']."','".$_POST['MiddleName']."','".$_POST['Gender']."','".$_POST['Languages']."','".$_POST['Experiences']."','".$_POST['Education']."')";
				
				mysqli_query($dbc, $update);
				echo "Sign up successfully!</br>";
			}
			mysqli_free_result($result);
			mysqli_close($dbc);
			
		}else{
			echo 'You need to enter following data<br/>';
			foreach ($data_missing as $missing){
				echo "$missing<br/>";
			}
		}
	}
	
?>