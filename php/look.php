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

$meText = htmlspecialchars($_POST['texts']);

$sql = 'select * from msg';
$result = mysqli_query($conn,$sql);
$flag = 0;
while ($row = mysqli_fetch_assoc($result)) {
	if($row['me']==$meText){
		$flag = 1;
		echo '<tr><td>'.$row['id'].'</td><td>'.$row['me'].'</td><td>'.$row['robot'].'</td></tr>';
		break;
	}
}
if($flag == 0){
	echo 0;
}

?>