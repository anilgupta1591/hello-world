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
 ?>      
       <form method="post"> 
       	<input type="hidden" name="id" value="<?php echo $id; ?>">
       <input type="text" name="subject_mail" style="
    width:  300px;
"><br />
       <input type="text" name="body" /><br />
       <input type="submit" name="submit">
   </form>


<?php
if(isset($_POST['submit'])){
	$subject_mail = $_POST['subject_mail'];
	$body = $_POST['body'];
	$sql = "insert into user (name,email) values('".$subject_mail."','".$body."')";
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }

}

$conn->close();
?>