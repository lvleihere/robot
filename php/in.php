<?php  

include 'sql.php';

$conn = mysqli_connect($localhost,$username,$password,$database);
if(!conn){
	die('数据库连接失败！');
}

$meText = htmlspecialchars($_POST['meText']);
$robotText = htmlspecialchars($_POST['robotText']);

$sql = 'insert into msg values(null,"'.$meText.'","'.$robotText.'")';
mysqli_query($conn,$sql);
$sql = 'SET @i=0;';
mysqli_query($conn,$sql);
$sql = 'UPDATE msg SET id=(@i:=@i+1);';
mysqli_query($conn,$sql);
$sql = 'ALTER TABLE  tablename  AUTO_INCREMENT=0;';
mysqli_query($conn,$sql);
echo '插入成功';

?>