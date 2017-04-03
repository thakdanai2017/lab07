
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>showregister</title>
</head>
<body>

<div class="container">
  <h2 align="center">รายชื่อผู้ลงทะเบียน</h2>  
  <br/>                
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>ชื่อ-นามสกุล</th>
        <th>อีเมล</th>
        <th>เพศ</th>
        <th>ความสนใจ</th>
        <th>ที่อยู่</th>
        <th>จังหวัด</th>
      </tr>
    </thead>
   <?php
$connection = mysql_connect('localhost', 'it58160021', 'F0901289105l'); //The Blank string is the password
mysql_select_db('it58160021');
mysql_set_charset("utf8");
$query = "SELECT * FROM showregister"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

while($row = mysql_fetch_array($result)){ 
echo "<tbody>";  //Creates a loop to loop through results
echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['sex'] . "</td><td>" . $row['intr'] . "</td><td>" . $row['address'] . "</td><td>" . $row['province'] . "</td></tr>";  //$row['index'] the index here is a field name
echo "</tbody>";
}
mysql_close(); //Make sure to close out the database connection
?>
  </table>
  <button><a href="http://angsila.cs.buu.ac.th/~58160021/887371/lab07/register_form.php"> back</button>
  </div>
</div>

</body>
</html>
