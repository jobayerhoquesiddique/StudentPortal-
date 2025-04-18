
# Web Engineering Lab Evaluation

## Overview
This project is a web-based student management system developed for the **Web Engineering Lab (CSE415)** at Daffodil International University. It implements a student registration system, student list display, course enrollment module, and enrollment history viewer, as specified in the lab evaluation document. The system uses HTML, CSS, JavaScript, PHP, and MySQL to provide a responsive, accessible, and user-friendly interface.

### Features
1. **Student Registration**: Allows students to register with personal details (Name, Email, Student ID, Department, Major, Date of Birth, Address). Name and Email are mandatory and validated.
2. **Student List**: Displays all registered students in a table format, showing Name, Student ID, Department, Major, and Email. Shows "No data in the table" if empty.
3. **Course Enrollment**: Enables students to enroll in courses by providing Student ID, Course Code, Course Title, and Semester. Student ID and Course Code are mandatory and validated.
4. **Enrollment History**: Displays a student's course enrollment history (Course Code, Course Title, Semester, Grade) based on their Student ID. Shows "No data available" if no records exist.

### Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Styling**: Custom CSS with responsive design
- **Validation**: Client-side JavaScript for form validation

## Folder Structure
```
WebEngineeringLab/
├── css/
│   └── styles.css           # Global CSS styles
├── js/
│   ├── register.js         # Validation for student registration form
│   └── enroll.js           # Validation for course enrollment form
├── register.html           # Student registration page
├── list.html               # Student list page
├── enroll.html             # Course enrollment page
├── history.html            # Enrollment history page
├── register.php            # Backend script for student registration
├── enroll.php              # Backend script for course enrollment
├── history.php             # Backend script for enrollment history
├── database.sql            # SQL script to set up the database
└── README.md               # Project documentation (this file)
```

## Setup Instructions

### Prerequisites
- **Local Server**: XAMPP, WAMP, or any PHP-enabled server with MySQL.
- **Browser**: Any modern web browser (Chrome, Firefox, etc.).
- **MySQL**: MySQL server for database management.

### Steps
1. **Clone or Extract the Project**:
   - If you have the zipped file (`WebEngineeringLab.zip`), unzip it to a directory.
   - Alternatively, place the `WebEngineeringLab` folder in your server's root directory (e.g., `htdocs` for XAMPP).

2. **Set Up the Database**:
   - Start your MySQL server (e.g., via XAMPP Control Panel).
   - Open a MySQL client (e.g., phpMyAdmin or MySQL Workbench).
   - Run the `database.sql` script to create the `university` database and tables (`students` and `enrollments`).

3. **Configure the Server**:
   - Ensure the PHP server is running (e.g., Apache in XAMPP).
   - Verify that the MySQL connection details in `register.php`, `enroll.php`, and `history.php` match your setup (default: `localhost`, `root`, no password, database `university`).

4. **Access the Application**:
   - Open a browser and navigate to `http://localhost/WebEngineeringLab/register.html`.
   - Use the navigation bar to access other pages (Student List, Enroll in Course, Enrollment History).

## Usage
- **Student Registration**:
  - Go to `register.html`.
  - Fill in the form (Name and Email are required).
  - Submit to save the student details in the database.
- **Student List**:
  - Visit `list.html` to view all registered students.
  - If no students are registered, a "No data in the table" message appears.
- **Course Enrollment**:
  - Go to `enroll.html`.
  - Enter a valid Student ID and Course Code (mandatory fields).
  - Submit to enroll the student in the course.
- **Enrollment History**:
  - Visit `history.html`.
  - Enter a Student ID and click "Search" to view the student's course history.
  - If no records exist, a "No data available" message is shown.

## UI/UX Features
- **Navigation**: Consistent navigation bar across all pages.
- **Validation**: Client-side validation for mandatory fields (Name, Email, Student ID, Course Code).
- **Error Handling**: Displays error messages near input fields for invalid inputs.
- **Success Messages**: Alerts for successful form submissions.
- **Accessibility**: Proper labels, `aria-required` attributes, and keyboard navigability.
- **Responsiveness**: Adapts to desktop, tablet, and mobile screens.

## Notes
- Ensure the MySQL server is running before using the application.
- The `database.sql` script must be executed to create the necessary tables.
- Modify the database connection settings in PHP files if your MySQL configuration differs.
- For production use, enhance security (e.g., sanitize inputs, use prepared statements, add authentication).

## Troubleshooting
- **Database Connection Error**: Verify MySQL is running and connection details in PHP files are correct.
- **Page Not Loading**: Ensure files are in the correct server directory and the server is active.
- **Validation Issues**: Check browser console for JavaScript errors and ensure `js/` files are loaded.

## Author
Developed as part of the Web Engineering Lab (CSE415) course at Daffodil International University.



---

### **Instructions to Include `README.md` in the Zipped Folder**

To add the `README.md` file to the `WebEngineeringLab` folder and update the zip file, follow these steps:

#### **Manual Method**
1. **Create the `README.md` File**:
   - In the `WebEngineeringLab` folder, create a new file named `README.md`.
   - Copy the content from within the `<xaiArtifact>` tag (excluding the tag itself) into `README.md`.
   - Save the file.

2. **Update the Zip File**:
   - **Windows**:
     - Delete the existing `WebEngineeringLab.zip` (if it exists).
     - Right-click the `WebEngineeringLab` folder, select "Send to" > "Compressed (zipped) folder".
     - A new `WebEngineeringLab.zip` will be created, including `README.md`.
   - **Mac**:
     - Delete the existing `WebEngineeringLab.zip` (if it exists).
     - Right-click the `WebEngineeringLab` folder, select "Compress 'WebEngineeringLab'".
     - A new `WebEngineeringLab.zip` will be created.
   - **Linux**:
     - Delete the existing `WebEngineeringLab.zip` (if it exists).
     - Run: `zip -r WebEngineeringLab.zip WebEngineeringLab` in the terminal from the directory containing the `WebEngineeringLab` folder.

3. **Verify**:
   - Unzip `WebEngineeringLab.zip` and confirm that `README.md` is in the root of the `WebEngineeringLab` folder with the correct content.

#### **Automated Method (Update the Bash Script)**
If you used the Bash script (`create_and_zip.sh`) from the previous response, you can modify it to include the `README.md` file. Below is the updated script with the `README.md` addition. Replace the original script or create a new one.

**`create_and_zip.sh`**:
```bash
#!/bin/bash

# Create folder structure
mkdir -p WebEngineeringLab/css WebEngineeringLab/js

# Create CSS file
cat <<EOT > WebEngineeringLab/css/styles.css
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    padding: 20px;
    background-color: #f4f4f4;
}

nav {
    background-color: #333;
    padding: 10px;
    margin-bottom: 20px;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-size: 16px;
}

nav a:hover {
    text-decoration: underline;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    font-weight: bold;
}

input, select, textarea, button {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
}

textarea {
    resize: vertical;
}

button {
    background-color: #28a745;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.error {
    color: red;
    font-size: 14px;
    margin-top: 5px;
}

.success {
    color: green;
    font-size: 14px;
    margin-bottom: 10px;
}

.no-data {
    text-align: center;
    padding: 20px;
    color: #666;
}

@media (max-width: 600px) {
    .container {
        padding: 10px;
    }
    nav a {
        display: block;
        margin: 10px 0;
    }
}
EOT

# Create JS files
cat <<EOT > WebEngineeringLab/js/register.js
document.getElementById('registrationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let isValid = true;

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const nameError = document.getElementById('nameError');
    const emailError = document.getElementById('emailError');

    nameError.textContent = '';
    emailError.textContent = '';

    if (!name) {
        nameError.textContent = 'Name is required';
        isValid = false;
    }

    if (!email) {
        emailError.textContent = 'Email is required';
        isValid = false;
    } else if (!/\S+@\S+\.\S+/.test(email)) {
        emailError.textContent = 'Invalid email format';
        isValid = false;
    }

    if (isValid) {
        this.submit();
    }
});
EOT

cat <<EOT > WebEngineeringLab/js/enroll.js
document.getElementById('enrollmentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let isValid = true;

    const studentId = document.getElementById('student_id').value.trim();
    const courseCode = document.getElementById('course_code').value.trim();
    const studentIdError = document.getElementById('studentIdError');
    const courseCodeError = document.getElementById('courseCodeError');

    studentIdError.textContent = '';
    courseCodeError.textContent = '';

    if (!studentId) {
        studentIdError.textContent = 'Student ID is required';
        isValid = false;
    }

    if (!courseCode) {
        courseCodeError.textContent = 'Course Code is required';
        isValid = false;
    }

    if (isValid) {
        this.submit();
    }
});
EOT

# Create HTML files
cat <<EOT > WebEngineeringLab/register.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav>
        <a href="register.html">Add Student</a>
        <a href="list.html">Student List</a>
        <a href="enroll.html">Enroll in Course</a>
        <a href="history.html">Enrollment History</a>
    </nav>
    <div class="container">
        <h1>Register New Student</h1>
        <form id="registrationForm" action="register.php" method="POST">
            <label for="name">Name *</label>
            <input type="text" id="name" name="name" aria-required="true">
            <div class="error" id="nameError"></div>

            <label for="email">Email *</label>
            <input type="email" id="email" name="email" aria-required="true">
            <div class="error" id="emailError"></div>

            <label for="student_id">Student ID</label>
            <input type="text" id="student_id" name="student_id">

            <label for="department">Department</label>
            <select id="department" name="department">
                <option value="">Select Department</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="BBA">BBA</option>
            </select>

            <label for="major">Major</label>
            <select id="major" name="major">
                <option value="">Select Major</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Data Science">Data Science</option>
                <option value="Business Administration">Business Administration</option>
            </select>

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob">

            <label for="address">Address</label>
            <textarea id="address" name="address"></textarea>

            <button type="submit">Submit</button>
        </form>
        <div class="success" id="successMessage"></div>
    </div>
    <script src="js/register.js"></script>
</body>
</html>
EOT

cat <<EOT > WebEngineeringLab/list.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav>
        <a href="register.html">Add Student</a>
        <a href="list.html">Student List</a>
        <a href="enroll.html">Enroll in Course</a>
        <a href="history.html">Enrollment History</a>
    </nav>
    <div class="container">
        <h1>Student List</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Student ID</th>
                    <th>Department</th>
                    <th>Major</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                \$conn = new mysqli('localhost', 'root', '', 'university');
                if (\$conn->connect_error) {
                    die("Connection failed: " . \$conn->connect_error);
                }

                \$sql = "SELECT name, student_id, department, major, email FROM students";
                \$result = \$conn->query(\$sql);

                if (\$result->num_rows > 0) {
                    while (\$row = \$result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars(\$row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars(\$row['student_id']) . "</td>";
                        echo "<td>" . htmlspecialchars(\$row['department']) . "</td>";
                        echo "<td>" . htmlspecialchars(\$row['major']) . "</td>";
                        echo "<td>" . htmlspecialchars(\$row['email']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='no-data'>No data in the table</td></tr>";
                }

                \$conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
EOT

cat <<EOT > WebEngineeringLab/enroll.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Enrollment</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav>
        <a href="register.html">Add Student</a>
        <a href="list.html">Student List</a>
        <a href="enroll.html">Enroll in Course</a>
        <a href="history.html">Enrollment History</a>
    </nav>
    <div class="container">
        <h1>Enroll in a Course</h1>
        <form id="enrollmentForm" action="enroll.php" method="POST">
            <label for="student_id">Student ID *</label>
            <input type="text" id="student_id" name="student_id" aria-required="true">
            <div class="error" id="studentIdError"></div>

            <label for="course_code">Course Code *</label>
            <input type="text" id="course_code" name="course_code" aria-required="true">
            <div class="error" id="courseCodeError"></div>

            <label for="course_title">Course Title</label>
            <input type="text" id="course_title" name="course_title">

            <label for="semester">Semester</label>
            <select id="semester" name="semester">
                <option value="">Select Semester</option>
                <option value="Fall 2025">Fall 2025</option>
                <option value="Spring 2026">Spring 2026</option>
                <option value="Summer 2026">Summer 2026</option>
            </select>

            <button type="submit">Enroll</button>
        </form>
        <div class="success" id="successMessage"></div>
    </div>
    <script src="js/enroll.js"></script>
</body>
</html>
EOT

cat <<EOT > WebEngineeringLab/history.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment History</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav>
        <a href="register.html">Add Student</a>
        <a href="list.html">Student List</a>
        <a href="enroll.html">Enroll in Course</a>
        <a href="history.html">Enrollment History</a>
    </nav>
    <div class="container">
        <h1>Enrollment History</h1>
        <form id="historyForm" action="history.php" method="GET">
            <label for="student_id">Student ID</label>
            <input type="text" id="student_id" name="student_id" aria-required="true">
            <button type="submit">Search</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Semester</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody id="historyTable">
                <!-- Populated by history.php -->
            </tbody>
        </table>
    </div>
</body>
</html>
EOT

# Create PHP files
cat <<EOT > WebEngineeringLab/register.php
<?php
\$conn = new mysqli('localhost', 'root', '', 'university');

if (\$conn->connect_error) {
    die("Connection failed: " . \$conn->connect_error);
}

\$name = \$_POST['name'];
\$email = \$_POST['email'];
\$student_id = \$_POST['student_id'];
\$department = \$_POST['department'];
\$major = \$_POST['major'];
\$dob = \$_POST['dob'];
\$address = \$_POST['address'];

\$sql = "INSERT INTO students (name, email, student_id, department, major, dob, address) VALUES (?, ?, ?, ?, ?, ?, ?)";
\$stmt = \$conn->prepare(\$sql);
\$stmt->bind_param("sssssss", \$name, \$email, \$student_id, \$department, \$major, \$dob, \$address);

if (\$stmt->execute()) {
    echo "<script>alert('Student registered successfully'); window.location='register.html';</script>";
} else {
    echo "<script>alert('Error: " . \$conn->error . "'); window.location='register.html';</script>";
}

\$stmt->close();
\$conn->close();
?>
EOT

cat <<EOT > WebEngineeringLab/enroll.php
<?php
\$conn = new mysqli('localhost', 'root', '', 'university');

if (\$conn->connect_error) {
    die("Connection failed: " . \$conn->connect_error);
}

\$student_id = \$_POST['student_id'];
\$course_code = \$_POST['course_code'];
\$course_title = \$_POST['course_title'];
\$semester = \$_POST['semester'];

\$sql = "INSERT INTO enrollments (student_id, course_code, course_title, semester) VALUES (?, ?, ?, ?)";
\$stmt = \$conn->prepare(\$sql);
\$stmt->bind_param("ssss", \$student_id, \$course_code, \$course_title, \$semester);

if (\$stmt->execute()) {
    echo "<script>alert('Enrollment successful'); window.location='enroll.html';</script>";
} else {
    echo "<script>alert('Error: " . \$conn->error . "'); window.location='enroll.html';</script>";
}

\$stmt->close();
\$conn->close();
?>
EOT

cat <<EOT > WebEngineeringLab/history.php
<?php
\$conn = new mysqli('localhost', 'root', '', 'university');

if (\$conn->connect_error) {
    die("Connection failed: " . \$conn->connect_error);
}

\$student_id = \$_GET['student_id'];

\$sql = "SELECT course_code, course_title, semester, grade FROM enrollments WHERE student_id = ?";
\$stmt = \$conn->prepare(\$sql);
\$stmt->bind_param("s", \$student_id);
\$stmt->execute();
\$result = \$stmt->get_result();

if (\$result->num_rows > 0) {
    while (\$row = \$result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars(\$row['course_code']) . "</td>";
        echo "<td>" . htmlspecialchars(\$row['course_title']) . "</td>";
        echo "<td>" . htmlspecialchars(\$row['semester']) . "</td>";
        echo "<td>" . (\$row['grade'] ? htmlspecialchars(\$row['grade']) : 'N/A') . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4' class='no-data'>No data available</td></tr>";
}

\$stmt->close();
\$conn->close();
?>
EOT

# Create SQL file
cat <<EOT > WebEngineeringLab/database.sql
CREATE DATABASE university;
USE university;

-- Students table
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    student_id VARCHAR(20),
    department VARCHAR(50),
    major VARCHAR(50),
    dob DATE,
    address TEXT
);

-- Enrollments table
CREATE TABLE enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id VARCHAR(20) NOT NULL,
    course_code VARCHAR(10) NOT NULL,
    course_title VARCHAR(100),
    semester VARCHAR(20),
    grade VARCHAR(5)
);
EOT

# Create README.md
cat <<EOT > WebEngineeringLab/README.md
# Web Engineering Lab Project

## Overview
This project is a web-based student management system developed for the **Web Engineering Lab (CSE415)** at Daffodil International University. It implements a student registration system, student list display, course enrollment module, and enrollment history viewer, as specified in the lab evaluation document. The system uses HTML, CSS, JavaScript, PHP, and MySQL to provide a responsive, accessible, and user-friendly interface.

### Features
1. **Student Registration**: Allows students to register with personal details (Name, Email, Student ID, Department, Major, Date of Birth, Address). Name and Email are mandatory and validated.
2. **Student List**: Displays all registered students in a table format, showing Name, Student ID, Department, Major, and Email. Shows "No data in the table" if empty.
3. **Course Enrollment**: Enables students to enroll in courses by providing Student ID, Course Code, Course Title, and Semester. Student ID and Course Code are mandatory and validated.
4. **Enrollment History**: Displays a student's course enrollment history (Course Code, Course Title, Semester, Grade) based on their Student ID. Shows "No data available" if no records exist.

### Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Styling**: Custom CSS with responsive design
- **Validation**: Client-side JavaScript for form validation

## Folder Structure
\`\`\`
WebEngineeringLab/
├── css/
│   └── styles.css           # Global CSS styles
├── js/
│   ├── register.js         # Validation for student registration form
│   └── enroll.js           # Validation for course enrollment form
├── register.html           # Student registration page
├── list.html               # Student list page
├── enroll.html             # Course enrollment page
├── history.html            # Enrollment history page
├── register.php            # Backend script for student registration
├── enroll.php              # Backend script for course enrollment
├── history.php             # Backend script for enrollment history
├── database.sql            # SQL script to set up the database
└── README.md               # Project documentation (this file)
\`\`\`

## Setup Instructions

### Prerequisites
- **Local Server**: XAMPP, WAMP, or any PHP-enabled server with MySQL.
- **Browser**: Any modern web browser (Chrome, Firefox, etc.).
- **MySQL**: MySQL server for database management.

### Steps
1. **Clone or Extract the Project**:
   - If you have the zipped file (\`WebEngineeringLab.zip\`), unzip it to a directory.
   - Alternatively, place the \`WebEngineeringLab\` folder in your server's root directory (e.g., \`htdocs\` for XAMPP).

2. **Set Up the Database**:
   - Start your MySQL server (e.g., via XAMPP Control Panel).
   - Open a MySQL client (e.g., phpMyAdmin or MySQL Workbench).
   - Run the \`database.sql\` script to create the \`university\` database and tables (\`students\` and \`enrollments\`).

3. **Configure the Server**:
   - Ensure the PHP server is running (e.g., Apache in XAMPP).
   - Verify that the MySQL connection details in \`register.php\`, \`enroll.php\`, and \`history.php\` match your setup (default: \`localhost\`, \`root\`, no password, database \`university\`).

4. **Access the Application**:
   - Open a browser and navigate to \`http://localhost/WebEngineeringLab/register.html\`.
   - Use the navigation bar to access other pages (Student List, Enroll in Course, Enrollment History).

## Usage
- **Student Registration**:
  - Go to \`register.html\`.
  - Fill in the form (Name and Email are required).
  - Submit to save the student details in the database.
- **Student List**:
  - Visit \`list.html\` to view all registered students.
  - If no students are registered, a "No data in the table" message appears.
- **Course Enrollment**:
  - Go to \`enroll.html\`.
  - Enter a valid Student ID and Course Code (mandatory fields).
  - Submit to enroll the student in the course.
- **Enrollment History**:
  - Visit \`history.html\`.
  - Enter a Student ID and click "Search" to view the student's course history.
  - If no records exist, a "No data available" message is shown.

## UI/UX Features
- **Navigation**: Consistent navigation bar across all pages.
- **Validation**: Client-side validation for mandatory fields (Name, Email, Student ID, Course Code).
- **Error Handling**: Displays error messages near input fields for invalid inputs.
- **Success Messages**: Alerts for successful form submissions.
- **Accessibility**: Proper labels, \`aria-required\` attributes, and keyboard navigability.
- **Responsiveness**: Adapts to desktop, tablet, and mobile screens.

## Notes
- Ensure the MySQL server is running before using the application.
- The \`database.sql\` script must be executed to create the necessary tables.
- Modify the database connection settings in PHP files if your MySQL configuration differs.
- For production use, enhance security (e.g., sanitize inputs, use prepared statements, add authentication).

## Troubleshooting
- **Database Connection Error**: Verify MySQL is running and connection details in PHP files are correct.
- **Page Not Loading**: Ensure files are in the correct server directory and the server is active.
- **Validation Issues**: Check browser console for JavaScript errors and ensure \`js/\` files are loaded.

## Author
Developed as part of the Web Engineering Lab (CSE415) course at Daffodil International University.
EOT

# Zip the folder
zip -r WebEngineeringLab.zip WebEngineeringLab

echo "Folder created and zipped as WebEngineeringLab.zip"
```

**How to Run the Updated Script**:
1. Save the updated script as `create_and_zip.sh` (or overwrite the previous one).
2. Make it executable: `chmod +x create_and_zip.sh`.
3. Run it: `./create_and_zip.sh`.
4. The script will recreate the `WebEngineeringLab` folder with all files, including `README.md`, and generate `WebEngineeringLab.zip`.

**Notes**:
- If you already have the `WebEngineeringLab` folder, delete it before running the script to avoid conflicts.
- Ensure the `zip` command is installed (`sudo apt install zip` on Ubuntu, `brew install zip` on Mac).
- For Windows, you can manually add `README.md` or adapt the script into PowerShell.

---

### **Verification**
- Unzip `WebEngineeringLab.zip` and confirm that `README.md` is in the root of the `WebEngineeringLab` folder.
- Open `README.md` to ensure it contains the correct content, formatted as Markdown.
- Verify that all 11 files (10 previous + `README.md`) are present in the correct structure.

---
