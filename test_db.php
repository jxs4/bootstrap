<?php
require "db.php" ;

$mode = $_GET["case_label"];
switch ($mode) {
	case 'insert':
		$date = date('Y-m-d',time());
		$sql = "insert into accounts (email, fname, lname,phone, birthday,
		gender,password) values ('yz746@njit.edu','Bongo', 'Zhao','911','$date','Male','1234');";
		$results = runQuery($sql);
		header("Location: index.php");
		break;
	case 'update':
		$fname = 'Bongo';
		$sql ="update accounts set password = '4321' where fname = '$fname' ";
		$results = runQuery($sql);
		header("Location: index.php");
		break;
	case 'delete':
		$fname = 'Bongo';
		$sql ="delete from accounts where fname = '$fname' ";
		$results = runQuery($sql);
		header("Location: index.php");
		break;
	case 'down dir':
		header("Location: down_dir/test_dir.php");
		break;
	default:
		header("Location: errors.php");
		break;
}


?>