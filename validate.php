<?php
require_once("dbconnect.php");
session_start();
$dbconnection = new dbconnector;
$dbconnection->connect();
if (isset($_POST['submitbtn']) && $_POST['submitbtn'] == 'SUBMIT') {

    $dbconnection->addentry($_POST['name'],$_POST['uname'],$_POST['mail'],$_POST['mob'],$_POST['add'],$_POST['gender'],$_POST['hobby'],$_POST['dob'],$_POST['pswd']);
      echo "Application submitted successfully";
  }
  else
  {
    echo "An error occured. Please try again";
  }
 ?>
