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
