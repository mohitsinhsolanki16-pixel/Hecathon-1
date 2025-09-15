<?php
$conn = new mysqli('localhost', 'root', '', 'rajpipala_db');
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
$name = $_POST['name'];
$feedback = $_POST['feedback'];
$sql = "INSERT INTO feedback (name, feedback) VALUES ('$name', '$feedback')";
if ($conn->query($sql) === TRUE) {
  echo "Thank you for your feedback! <a href='index.html'>Go back to Home</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>