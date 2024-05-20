$(document).ready(function() {
    $('#submit2').click(function() {
        var name = $('#inputName').val().trim();
        var email = $('#inputEmail').val().trim();
        var message = $('#inputMessage').val().trim();

        if (name === '' || email === '' || message === '') {
            $('#errorMessage').text("Please fill all the fields.");
            return false;
        }

        if (!email.includes('@')) {
            $('#errorMessage').text('Email must contain "@"');
            return false;
        }

        alert('Form submitted successfully!');
        // Optionally, you can submit the form here if validation passes
        // $(this).closest('form').submit();
    });
});