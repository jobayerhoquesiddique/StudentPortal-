<?php
$conn = new mysqli('localhost', 'root', '', 'university');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$student_id = $_POST['student_id'];
$course_code = $_POST['course_code'];
$course_title = $_POST['course_title'];
$semester = $_POST['semester'];

$sql = "INSERT INTO enrollments (student_id, course_code, course_title, semester) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $student_id, $course_code, $course_title, $semester);

if ($stmt->execute()) {
    echo "<script>alert('Enrollment successful'); window.location='enroll.html';</script>";
} else {
    echo "<script>alert('Error: " . $conn->error . "'); window.location='enroll.html';</script>";
}

$stmt->close();
$conn->close();
?>
