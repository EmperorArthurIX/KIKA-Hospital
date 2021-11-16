<?php
    if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
//    $_SESSION['id']=$id;
    $_SESSION['sql']=$sql;
    $_SESSION['name']=$name;

    $con = mysqli_connect($server, $username,$password);

    if(!$con){
        die("Connection to this database failed due to".
        mysqli_connect_error());
    }
    //For Appointments
//    $id = $_POST['id'] ?? "";
    $first_name = $_POST['firstname'] ?? "";
    $middle_name= $_POST['middlename'] ?? "";
    $last_name = $_POST['lastname'] ?? "";
    $gender = $_POST['gender'] ?? "";
    $blood_group = $_POST['blood'] ?? "";
    $date_of_ap = $_POST['date'] ?? "";
    $doc_name = $_POST['doc'] ?? "";
    $timeslot_id = $_POST['timeslot'] ?? "";
    $symptoms = $_POST['symptoms'] ?? "";


    $sql =  "INSERT INTO `kikahospital`.`appointments` (`first_name`,`middle_name`,`last_name`,`gender`,`blood_group`,`date_of_ap`,
    `doc_name`,`timeslot_id`,`symptoms`) 
    VALUES ('$first_name','$middle_name','$last_name','$gender','$blood_group','$date_of_ap','$doc_name','$timeslot_id','$symptoms');";



//    // ADMIN SIDE
//
//    //For Departments
////    $id = $_POST['id'] ?? "";
//    $name = $_POST['name'] ?? "";
//
//    $sql =  "INSERT INTO `kikahospital`.`departments` (`id`,`name`) VALUES ("$id","$name");";
//
//    //For doctor's login
//    $doc_id = $_POST['doc_id'] ?? "";
//    $user_id = $_POST['user_id'] ?? "";
//    $pass = $_POST['pass'] ?? "";
//
//
//    $sql =  "INSERT INTO `kikahospital`.`doctor_login` (`doc_id`,`user_id`,`pass`)VALUES ("$doc_id","$user_id","$pass");";
//
//    //For doctor
//    $id = $_POST['id'] ?? "";
//    $name = $_POST['name'] ?? "";
//    $dept_id = $_POST['dept_id'] ?? "";
//
//
//    $sql =  "INSERT INTO `kikahospital`.`doctor` (`id`,`name`,`dept_id`)VALUES ("$id","$name","$dept_id");";
//
//    //For Timeslots
//    $id = $_POST['id'] ?? "";
//    $start_time = $_POST['start_time'] ?? "";
//    $end_time = $_POST['end_time'] ?? "";
//
//
//    $sql =  "INSERT INTO `kikahospital`.`doctor_login` (`id`,`start_time`,`end_time`)VALUES ("$id","$start_time","$end_time");";
//
//
//    if($con->query($sql) == true){
//         // "Successfully inserted";
//    }
//    else{
//         echo "ERROR, please try again";
//    }
//
//    $con->close();
}
?>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Welcome to KIKA hospital</title>-->
<!--    <link rel="stylesheet" href="style.css">-->
<!--</head>-->
<!--<body>-->
<!--    <img  class = "bg" src="bg.png" alt="K.I.K.A Hospital">-->
<!--    <div class="container">-->
<!--        <h1 style = "color:aqua"> Welcome to the KIKA hospital</h1>-->
<!--        <p style ="color:aqua">Enter your details and submit the form to get admitted in our hospital</p>-->
<!---->
<!--        <form action="index.php" method="post">-->
<!--            <input type="text" name="name" id="name" placeholder="Enter the patient's name">-->
<!--            <input type="text" name="gender" id="gender" placeholder="Enter the patient's gender ">-->
<!--            <input type="text" name="dob" id="dob" placeholder="Enter the patient's D.O.B">-->
<!--            <input type="text" name="aadhar_no" id="aadhar_no" placeholder="Enter the patient's aadhar number">-->
<!--            <input type="text" name="phone_no" id="phone_no" placeholder="Enter the patient's phone number">-->
<!--            <textarea name="desc" id="desc" cols="30" rows="10"-->
<!--            placeholder="Describe about patient's health history"></textarea>-->
<!--            <button class ="btn">Submit the form</button>-->
<!--            <button class ="btn">Reset the form </button>-->
<!---->
<!--        </form>-->
<!--    </div>-->
<!--    <script src = "index.js"></script>-->
<!--</body>-->
<!--</html>-->