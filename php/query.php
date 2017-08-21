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
$sql = 'SET @i=0;';
mysqli_query($conn,$sql);
$sql = 'UPDATE msg SET id=(@i:=@i+1);';
mysqli_query($conn,$sql);
$sql = 'ALTER TABLE  tablename  AUTO_INCREMENT=0;';
mysqli_query($conn,$sql);

$sql = 'select * from msg';
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		$me = $row['me'];
		$robot = $row['robot'];
		echo '<tr><td>'.$id.'</td><td>'.$me.'</td><td>'.$robot.'</td></tr>';
	}

};




?>