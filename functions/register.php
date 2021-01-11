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

    $campus = $_SESSION['campus'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $phone = $_POST['phone'];
    $blood = $_POST['bloodgroup'];
    $email = $_POST['email'];

    if($campus ==null || $name ==null || $course ==null|| $year ==null || $phone ==null || $blood ==null) {
        $_SESSION['alert_type']='w3-panel w3-red w3-display-container';
        $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
        $_SESSION['alert_msg']='Please fill all mandatory fields';
        $_SESSION['alert_typei']='Error';
        header('location:../add_members.php');
    }else{

    $qu=mysqli_query($conn,"SELECT * FROM `members` WHERE `phone`= '$phone';");

    if (mysqli_affected_rows($conn)) {
        $_SESSION['alert_type']='w3-panel w3-blue w3-display-container';
        $_SESSION['alert_typeclass']='w3-button w3-blue w3-large w3-display-topright';
        $_SESSION['alert_msg']='Sorry !!!.Member is already registered..';
        $_SESSION['alert_typei']='Info';
        $_SESSION['invalid']="   Already a registered member.";
        header('location:../add_members.php');
    }else{



    $sqexe1 = mysqli_query($conn, "INSERT INTO `members` (`id`, `name`, `course`, `year`, `phone`, `email`, `campus`, `blood`) VALUES (NULL, '$name', '$course', '$year', '$phone', '$email', '$campus', '$blood');");

    if ($sqexe1 == true) {
        $_SESSION['alert_type']='w3-panel w3-green w3-display-container';
            $_SESSION['alert_typeclass']='w3-button w3-green w3-large w3-display-topright';
            $_SESSION['alert_msg']='Member added Successfully';
            $_SESSION['alert_typei']='Success!';
        header('location:../add_members.php');

    } else {
        $_SESSION['alert_type']='w3-panel w3-red w3-display-container';
        $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
        $_SESSION['alert_msg']='Something Went Wrong Please Try Again';
        $_SESSION['alert_typei']='Error';
        header('location:../add_members.php');
    }

}

}

}


?>