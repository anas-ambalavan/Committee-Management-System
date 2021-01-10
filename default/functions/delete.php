<?php

include_once ('connection.php');
session_start();
if(!isset($_SESSION['Id'])){
	$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
    $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
    $_SESSION['alert_msg']='Something Went Wrong Please Try Again';
    $_SESSION['alert_typei']='Error';
    header('location:../index.php');
}
$conn=connect();



$id=$_GET['id'];
$qu=mysqli_query($conn,"DELETE FROM `members` WHERE `members`.`id` =$id");

if ($qu == true) {
			$_SESSION['alert_type']='w3-panel w3-green w3-display-container';
            $_SESSION['alert_typeclass']='w3-button w3-green w3-large w3-display-topright';
            $_SESSION['alert_msg']='Deleted Successfully';
            $_SESSION['alert_typei']='Success!';
			header('location:../view_members.php');
    } else {
    	$_SESSION['alert_type']='w3-panel w3-red w3-display-container';
    	$_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
    	$_SESSION['alert_msg']='Something Went Wrong Please Try Again';
    	$_SESSION['alert_typei']='Error';
        header('location:../view_members.php');
    }


  ?>