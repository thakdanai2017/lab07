<?php
$name=$_POST['name'];
$email=$_POST['email'];
$intr1=$_POST['intr1'];
$intr2=$_POST['intr2'];
if($_POST['sex']=='M'){
	$sex="ชาย";
}else{
	$sex="หญิง";
}
$intr=$intr1."<br/>".$intr2;
$address=$_POST['address'];
$province=$_POST['province'];
	

echo "<h3>View posted data:</h3>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";
echo "<h3>View individual data:</h3>";
echo $_POST['name'] . "<br />";
echo $_POST['email'] . "<br />";
echo $_POST['address'] . "<br />";
echo $_POST['sex'] . "<br />";



  mysql_connect('localhost','it58160021','F0901289105l') or die(mysql_error());
mysql_select_db('it58160021');
mysql_query("SET NAMES UTF8");
$sql = "INSERT INTO showregister (id,name,email,sex,intr,address,province) VALUES ('id','$name','$email','$sex','$intr','$address','$province')";
$result = mysql_query($sql) or die(mysql_error());
if($result){
	header('location: show_register.php');
}
mysql_close();


?>
