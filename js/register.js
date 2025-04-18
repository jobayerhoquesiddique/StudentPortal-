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
