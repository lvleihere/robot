<?php  

include 'sql.php';

$conn = mysqli_connect($localhost,$username,$password,$database);
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