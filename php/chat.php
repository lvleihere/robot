<?php  

$localhost = 'localhost';
$username = 'wd52130899';
$password = 'wd52130899';
$database = 'wd52130899';

$conn = mysqli_connect($localhost,$username,$password,$database);
mysqli_query($conn,'set names utf8');
$text = htmlspecialchars($_POST['msg']);

$sql = 'select * from msg';
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
	if($row['me']==$text){
		echo $row['robot'];
		$flag = 1;
		break;
	}
}
if($flag!==1){
	echo '我好像不明白...';
}



?>