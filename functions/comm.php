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


    $conn=connect();
    if(!$conn){
        sleep(2);
        $_SESSION['alert_type']='w3-panel w3-red w3-display-container';
        $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
        $_SESSION['alert_msg']='Something Went Wrong Please Try Again';
        $_SESSION['alert_typei']='Error';
        header('location:../index.php');
    }

    $chairman= $_POST['chairman'];
    $vice1 = $_POST['vice_chairman1'];
    $vice2 = $_POST['vice_chairman2'];
    $general = $_POST['general_convenor'];
    $con1 = $_POST['convenor1'];
    $con2 = $_POST['convenor2'];
    $treasurer = $_POST['treasurer'];
    $sit = $_POST['SIT'];
    $district = $_POST['district_counsellor'];
    $state = $_POST['state_counsellor'];

    

    $qu=mysqli_query($conn,"SELECT * FROM `committee` WHERE `committee`.`id`=1;");
    $qu1=mysqli_affected_rows($conn);
    if ($qu1==true) {

         $que3 = mysqli_query($conn, "UPDATE `committee` SET `chairman` = '$chairman', `vice_chairman1` = '$vice1', `vice_chairman2` = '$vice2', `general_convenor` = '$general', `convenor1` = '$con1', `convenor2` = '$con2', `treasurer` = '$treasurer', `SIT` = '$sit', `district_counsellor` = '$district', `state_counsellor` = '$state' WHERE `committee`.`id` = 1;");

        if ($que3 == true) {
            $_SESSION['alert_type']='w3-panel w3-green w3-display-container';
            $_SESSION['alert_typeclass']='w3-button w3-green w3-large w3-display-topright';
            $_SESSION['alert_msg']='Committe report updated Successfully';
            $_SESSION['alert_typei']='Success!';
            header('location:../committee.php');
        } else {
            $_SESSION['alert_type']='w3-panel w3-red w3-display-container';
            $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
            $_SESSION['alert_msg']='Something Went Wrong Please Try Again';
            $_SESSION['alert_typei']='Error';
            header('location:../committee.php');
        }

    }else{
        $que3= mysqli_query($conn, "INSERT INTO `committee` (`id`, `chairman`, `vice_chairman1`, `vice_chairman2`, `general_convenor`, `convenor1`, `convenor2`, `treasurer`, `SIT`, `district_counsellor`, `state_counsellor`) VALUES ('1', '$chairman', '$vice1', '$vice2', '$general', '$con1', '$con2', '$treasurer', '$sit', '$district', '$state');");

        if ($que3 == true) {
            $_SESSION['alert_type']='w3-panel w3-green w3-display-container';
            $_SESSION['alert_typeclass']='w3-button w3-green w3-large w3-display-topright';
            $_SESSION['alert_msg']='Committe report added Successfully';
            $_SESSION['alert_typei']='Success!';
            header('location:../committee.php');
        } else {
            $_SESSION['alert_type']='w3-panel w3-red w3-display-container';
            $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
            $_SESSION['alert_msg']='Something Went Wrong Please Try Again';
            $_SESSION['alert_typei']='Error';
            header('location:../committee.php');
        }



    }





}




?>
