
<?php
require_once("dbconnect.php");
session_start();
$dbconnection = new dbconnector;
$dbconnection->connect();

$result = $dbconnection->checkLogin($_POST['uname'], $_POST['pswd']);
$row = $result->fetch_array(MYSQLI_ASSOC);
if($result->num_rows > 0)
{
$_SESSION['uname'] = $_POST['uname'];
$_SESSION['pswd'] = $_POST['pswd'];
header("Location:edituser.php");
}
else
{
$_SESSION['error']='login';
header("Location:login.php");
}
?>
