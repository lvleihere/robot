<?php  

$localhost = 'localhost';
$username = 'wd52130899';
$password = 'wd52130899';
$database = 'wd52130899';

$conn = mysqli_connect($localhost,$username,$password,$database);
mysqli_query($conn,'set names utf8');
if(!conn){
	die('数据库连接失败！');
}

$lastMeText = htmlspecialchars($_POST['lastMeText']);
$modMeText = htmlspecialchars($_POST['modMeText']);
$modRobotText = htmlspecialchars($_POST['modRobotText']);

$sql = 'update msg set me="'.$modMeText.'",robot="'.$modRobotText.'" where me="'.$lastMeText.'"';
mysqli_query($conn,$sql);
echo '修改成功';



?>