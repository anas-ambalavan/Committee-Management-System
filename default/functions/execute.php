<?php
include_once('connection.php');
session_start();
if(!isset($_SESSION['Id'])){
    $_SESSION['alert_type']='w3-panel w3-red w3-display-container';
    $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
    $_SESSION['alert_msg']='Something Went Wrong Please Try Again';
    $_SESSION['alert_typei']='Error';
    header('location:../index.php');
}
else {


    $conn = connect();
    if (!$conn) {
        sleep(2);
        $_SESSION['alert_type']='w3-panel w3-red w3-display-container';
        $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
        $_SESSION['alert_msg']='Something Went Wrong Please Try Again';
        $_SESSION['alert_typei']='Error';
        header('location:../index.php');
    }
    $campus = $_SESSION['campus'];
    $member = $_POST['member'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];

    if($campus==null || $member==null || $q1==null || $q2==null || $q3==null || $q4==null ){
        $_SESSION['alert_type']='w3-panel w3-red w3-display-container';
        $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
        $_SESSION['alert_msg']='Please fill all mandatory fields';
        $_SESSION['alert_typei']='Error';
        header('location:../executive.php');
    }else{
        $que = mysqli_query($conn, " INSERT INTO `exe_members` (`id`, `name`, `Q1`, `Q2`, `Q3`, `Q4`, `campus`) VALUES (NULL, '$member', '$q1', '$q2', '$q3', '$q4', '$campus');");
        if ($que == true) {
            $_SESSION['alert_type']='w3-panel w3-green w3-display-container';
            $_SESSION['alert_typeclass']='w3-button w3-green w3-large w3-display-topright';
            $_SESSION['alert_msg']='Executive Member added Successfully';
            $_SESSION['alert_typei']='Success!';
            header('location:../executive.php');
        } else {
            $_SESSION['alert_type']='w3-panel w3-red w3-display-container';
            $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
            $_SESSION['alert_msg']='Something Went Wrong Please Try Again';
            $_SESSION['alert_typei']='Error';
            header('location:../executive.php');
        }

}

}