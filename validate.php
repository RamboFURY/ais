
<?php
require_once("dbconnect.php");
session_start();
$dbconnection = new dbconnector;
$dbconnection->connect();

$result = $dbconnection->checkLogin($_POST['uname'], $_POST['pswd']);
$row = $result->fetch_array(MYSQLI_ASSOC);
if($result->num_rows > 0)
{
header("Location:dashform.php");
}
else
{
$_SESSION['error']='login';
header("Location:login.php");
}
?>
