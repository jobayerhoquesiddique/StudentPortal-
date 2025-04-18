<?php
$conn = new mysqli('localhost', 'root', '', 'university');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$student_id = $_POST['student_id'];
$department = $_POST['department'];
$major = $_POST['major'];
$dob = $_POST['dob'];
$address = $_POST['address'];

$sql = "INSERT INTO students (name, email, student_id, department, major, dob, address) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $name, $email, $student_id, $department, $major, $dob, $address);

if ($stmt->execute()) {
    echo "<script>alert('Student registered successfully'); window.location='register.html';</script>";
} else {
    echo "<script>alert('Error: " . $conn->error . "'); window.location='register.html';</script>";
}

$stmt->close();
$conn->close();
?>
