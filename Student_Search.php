<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Student Log in Page</title>
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

/**if(isset($_POST['login'])){
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

	if(empty($data_missing)){        */

		$title = $_POST["title"];
		$qualification = $_POST["qualification"];
		$jobtype = $_POST["jobtype"];
		$jobfunction = $_POST["jobfunction"];

		$salary = $_POST["salary"];
		$date = $_POST["date"];

		require_once 'dbConnection.php';

		switch ($salary)
		{
			case 10000:
				$ls = 10000; $hs = 999999;
				break;
			case 8000:
				$ls = 7999; $hs = 10001;
				break;
			case 5000:
				$ls = 4999; $hs = 8001;
				break;
			case 1000:
				$ls =1; $hs = 5001;
				break;
			default:
				echo "Error";
		}

		switch ($date)
		{
			case 7:
				$ld = '2015-11-26'; $hd = '2015-12-03';
				break;
			case 14:
				$ld = '2015-11-19'; $hd = '2015-11-25';
				break;
			case 15:
				$ld = '2015-01-01'; $hd = '2015-11-18';
				break;
			default:
				echo error;
		}


		$query = "select * from position where Title like '%$title%' and Qualifications like '%$qualification%' 
												and Job_type like '%$jobtype%' and Job_function like '%$jobfunction%' 
												and Salary > $ls and Salary < $hs and Date_posted > '$ld' and Date_posted < '$hd'"; 
		$result = mysqli_query($dbc, $query);
		//$userid = -1;
		if(!$result){
			echo 'No jobs';
			echo $query;
		}else{
				echo <<<_END
				<div class="container">
  				<h2>Positions</h2>
  				<p>New Jobs in the DMV area</p>
  				<table class="table">
  				<tbody>
  			
  		
_END;
			while($row = mysqli_fetch_assoc($result))
			{
				echo <<<_END

			
    		
     			<tr>
        			<td>$row[Title],<br> $row[Job_type], <br>$row[Date_posted]</td>
        			<td>$row[Qualifications], <br>$row[Job_function]</td>
        			<td>$row[E_mail], <br>$$row[Salary]</td>
      			</tr>
      		
  				

_END;

				//$row['Title'] . " " . $row['Salary'] . " " . $row['Qualifications'] . " " . $row['Job_type'] . " " . $row["Date_posted"];
				
				//$userid = $row['S_Aid'];
			}
				echo <<<_END
				</tbody>
				</table>
				</div>
_END;
			mysqli_free_result($result);
			mysqli_close($dbc);

			/*if($userid > 0){
				header("Location: Student_Search.html?userid=".$userid);
			}else{
				echo "Fail to login";
			} */

		}
	/*}else{

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
}*/
?>
</body>
</html>