// contact.js
document.getElementById('contact-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission

    // Validate form fields (you can add more validation logic)
    const name = document.getElementById('contact-form-name').value;
    const email = document.getElementById('contact-form-email').value;
    if (!name || !email) {
        alert('Please fill in all required fields.');
        return;
    }

    // Other field validations go here

    // If all validations pass, submit the form
    this.submit();
});
