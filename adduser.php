<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once("dbconnect.php");
$dbconnection=new dbconnector;
$dbconnection->connect();
if (isset($_POST['submitbtn'])== 'SUBMIT')
  {

    $dbconnection->addentry($_POST['name'],$_POST['uname'],$_POST['mail'],$_POST['mob'],$_POST['addd'],$_POST['gender'],$_POST['hobby'],$_POST['dob'],$_POST['pswd']);
      echo "You Have Been Registered as a new user. LogIn to Continue";
      header("Location:login.php");
      sleep(2);
  }
  else
  {
    echo "An error occured. Please try again";
  }
  ?>
