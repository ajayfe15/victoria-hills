<?php session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('config.php');

if(!empty($_REQUEST['username']))
{
	$username = $_REQUEST['username'];
}
else
{
	$username = '';
}

if(!empty($_REQUEST['password']))
{
	$password = $_REQUEST['password'];
}
else
{
	$password = '';
}

$sql = "select * from `admin_user` where `username` = '".$username."' and `password` = '".$password."'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0)
{
	$_SESSION['login'] = '1';
	$_SESSION['username'] =$username;
	$_SESSION['access_level'] = $row['access_level'];
	$_SESSION['name'] = $row['name'];
	$_SESSION['project']=$row['project'];

	$sql = "select * from `configuration`";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($result);
	
	if(mysqli_num_rows($result) > 0)
    {
		$_SESSION['company'] = $row['name'];
		$_SESSION['favicon'] = $row['favicon'];
		$_SESSION['logo'] = $row['logo'];
	}
	
	header('Location: leads.php');
}
else
{
	$_SESSION['login_msg'] = 'Invalid Username or Password';
	header('Location: index.php');
}
