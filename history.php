<?php
$conn = new mysqli('localhost', 'root', '', 'university');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$student_id = $_GET['student_id'];

$sql = "SELECT course_code, course_title, semester, grade FROM enrollments WHERE student_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $student_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['course_code']) . "</td>";
        echo "<td>" . htmlspecialchars($row['course_title']) . "</td>";
        echo "<td>" . htmlspecialchars($row['semester']) . "</td>";
        echo "<td>" . ($row['grade'] ? htmlspecialchars($row['grade']) : 'N/A') . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4' class='no-data'>No data available</td></tr>";
}

$stmt->close();
$conn->close();
?>
