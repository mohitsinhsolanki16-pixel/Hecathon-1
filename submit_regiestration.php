<?php
$conn = new mysqli('localhost', 'root', '', 'rajpipala_db');
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$guests = $_POST['guests'];
$sql = "INSERT INTO registration (name, email, phone, guests) VALUES ('$name', '$email', '$phone', '$guests')";
if ($conn->query($sql) === TRUE) {
  echo "Registration successful. <a href='index.html'>Go back to Home</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>