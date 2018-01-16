<?php  

include 'sql.php';

$conn = mysqli_connect($localhost,$username,$password,$database);
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