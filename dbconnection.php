<?php
$dbs_host="localhost";
$dbs_user="root";
$dbs_password="";
$dbs_name="lms_dbs";

$conn=new mysqli($dbs_host,$dbs_user,$dbs_password,$dbs_name);

if($conn->connect_error){
    die("connection failed");
}
  //  else{
   //     echo"connected";
    //}
?>