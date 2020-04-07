<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once("dbconnect.php");
$dbconnection=new dbconnector;
$dbconnection->connect();
if (isset($_POST['submitbtn'])== 'SUBMIT')
  {

    $dbconnection->addentryuser($_POST['name'],$_POST['uname'],$_POST['mail'],$_POST['mob'],$_POST['area'],$_POST['dob']);
      echo "You Have Been Registered as a new user. LogIn to Continue";

      sleep(0);

      header("Location:addquery.php");
  }
  else
  {
    echo "An error occured. Please try again";
  }
  ?>
