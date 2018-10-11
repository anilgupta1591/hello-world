<!DOCTYPE html>
<html>
<head>
	<title>Display email</title>
</head>
<body>
	<!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
  <body>
  
 <table>
   <tr>
     <th>Name</th>
     <th>Email</th>
   </tr>
 asdasdasdas
  <?php
  error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "aaqebkn6663k4s.claqtdx0ejhl.us-east-1.rds.amazonaws.com";
$username = "anil1591";
$password = "itechuser";
$dbname = "ebdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name,email FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" ;
       echo  $row["name"];
       echo  '</td><td>'.$row["email"];
       echo  '</td></tr>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</body>
</html>