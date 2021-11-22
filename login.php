<?php
  $server = "localhost:3307";
  $port = 3307;
  $username = "root";
  $password = "";
  $dbname = "kikahospital";
  $socket ="C:/xampp/mysql/mysql.sock";


  $con = mysqli_connect($server,$username,$password,$dbname,$port,$socket);

  if(!$con){
    die("connection failed due to ".mysqli_connect_error());
  }
  echo "connection successful";
  //login
  $email=$_POST['email'] ?? "";
  $password=$_POST['pass'] ?? "";
  $sql = "SELECT doctors.id , doctors.name , doctor_login.emailid  , doctor_login.pass\n"

    . "FROM doctors JOIN doctor_login on doctors.id=doctor_login.docid;";

  $docrec = mysqli_query($con,$sql);

  while($data = mysqli_fetch_array($docrec))
  {
     if($email==$data['emailid'] && $password==$data['pass'])
     {
       echo "match";
       $doc_match_name = $data['name'];
       echo $doc_match_name;
       $query_join ="SELECT first_name, middle_name, last_name , gender, blood_group,date_of_ap,timeslot_id,symptoms FROM appointments WHERE doc_name ='".$doc_match_name."';";
       echo $query_join;
       //$result = mysqli_query($query_join);
      if($con->query($query_join))
       {
           echo "Done";
       }
       else
       {
           echo "Error";
       }

     }

  }
   $con->close();


?>
