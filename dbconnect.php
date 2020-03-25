<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
error_reporting(E_ALL);

  class dbconnector
  {
    var $dblink;
    function connect()
    {
      global $dblink;
      $dblink = new mysqli("localhost","root","","ais");//DATABASE CONNECTION
      if($dblink == false)
      {
        die("ERROR: Could not connect. " . mysqli_connect_error());//shows error on erroneous connection
      }
    }

// Function to verify user credentials

    public function checkLogin($uname, $pswd)//checks username and password from the table of the databse
    {
      global $dblink;
      $query = $dblink->prepare("SELECT uname FROM form WHERE uname = ? AND pswd = ? AND disabled = 0");
      $query->bind_param("ss", $uname, $pswd);
      $query->execute();
      return $query->get_result();
    }

// Function to register new users

    public function addentry($name, $uname, $mail, $mob, $add, $gender, $hobby, $dob, $pswd)
    {
      global $dblink;
      $query = $dblink->prepare("INSERT INTO form (name, uname, mail, mob, add, gender, hobby, dob, pswd) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $query->bind_param("sssisssss", $name, $uname, $mail, $mob, $add, $gender, $hobby, $dob, $pswd);
      if($query->execute())
      {
        return 1;
      }
      else
      {
        return 0;
      }
    }
  }
    ?>
