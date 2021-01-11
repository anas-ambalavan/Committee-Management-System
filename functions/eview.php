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
    $id=$_SESSION['edit_id'];
    
    $name = $_POST['name'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $phone = $_POST['phone'];
    $blood = $_POST['bloodgroup'];
    
    if ($id==null || $name==null || $course==null || $year==null || $phone==null || $blood==null ) {
        $_SESSION['alert_type']='w3-panel w3-red w3-display-container';
        $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
        $_SESSION['alert_msg']='Please fill all mandatory fields';
        $_SESSION['alert_typei']='Error';
        header('location:../view_members.php');
    }else{

        $sqexe1 = mysqli_query($conn, "UPDATE `members` SET `name` = '$name ', `course` = '$course', `year` = '$year', `phone` = '$phone' , `blood` = '$blood' WHERE `members`.`id` = $id;");

        if ($sqexe1 == true) {
            $_SESSION['alert_type']='w3-panel w3-green w3-display-container';
            $_SESSION['alert_typeclass']='w3-button w3-green w3-large w3-display-topright';
            $_SESSION['alert_msg']='Details updated Successfully';
            $_SESSION['alert_typei']='Success!';
            header('location:../view_members.php');
        } else {
            $_SESSION['alert_type']='w3-panel w3-red w3-display-container';
            $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
            $_SESSION['alert_msg']='Something Went Wrong Please Try Again';
            $_SESSION['alert_typei']='Error';
            header('location:../view_members.php');
        }

    }

}


?>