<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Post  Page</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
  <body>

<?php

		$id = $_POST["id"];
        $title = $_POST["title"];
		$qualifications = $_POST["qualifications"];
		$jobtype = $_POST["jobtype"];
		$jobfunction = $_POST["jobfunction"];

		$salary = $_POST["salary"];
		$date = $_POST["dateposted"];

		$email = $_POST["email"];
		$companyid = $_POST["companyid"];

		require_once 'dbConnection.php';

		/*$update = "insert into position (Id, Title, Salary, Qualifications, Job_type, Date_posted, Job_function, E_mail, Company_id)
					values ('$id', '$title', 'salary', 'qualifications', 'jobtype', 'dateposted','jobfunction', 'email', 'companyid')";  */

		$update = "insert into position (Id, Title, Salary, Qualifications, Job_type, Date_posted, Job_function, E_mail, Company_id)
					values ('".$_POST['id']."','".$_POST['title']."','".$_POST['salary']."','".$_POST['qualifications']."','".$_POST['jobtype']."','".$_POST['dateposted']."','".$_POST['jobfunction']."','".$_POST['email']."','".$_POST['companyid']."')";

		$result = mysqli_query($dbc, $update);

		//mysqli_free_result($update);
		//mysqli_close($dbc);

		header("location: PostSucc.html");
?>
</body>
</html>
