<?php
include_once('connection.php');
session_start();
// Grab User submitted information
$cid = $_POST["CampusId"];
$pass = $_POST["pass"];


$con =connect();
if(!$con)
{
    die('Connection Failed'.mysqli_error());
}


// Select the database to use
// mysqli_select_db("campus",$con);

$result = mysqli_query($con ,"SELECT * FROM campuses WHERE campus_id='$cid' AND pass='$pass'");
$resultdata=mysqli_fetch_array($result);

if(mysqli_affected_rows($con)){

		 $_SESSION['Id']= $resultdata['campus_id'];
		 $_SESSION['campus']=$resultdata['campus'];
		 header('location:../add_members.php');
}

	

else
    header('location:../index.php');
?>