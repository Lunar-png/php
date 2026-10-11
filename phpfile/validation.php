<script>
  $(document).ready(function () {
    let failedAttempts = 0;
    const MAX_ATTEMPTS = 5;
    const STATIC_USERNAME = 'admin';
    const STATIC_PASSWORD = '12345';

    $('#loginForm').validate({
      rules: {
        username: {
          required: true
        },
        password: {
          required: true
        }
      },
      messages: {
        username: {
          required: 'Username or email is required.'
        },
        password: {
          required: 'Password is required.'
        }
      },
      errorElement: 'span',
      errorClass: 'error-msg',
      highlight: function (element) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element) {
        $(element).removeClass('is-invalid');
      },
      submitHandler: function (form) {
        if (failedAttempts >= MAX_ATTEMPTS) {
          return false;
        }

        const inputUser = $('#loginName').val().trim();
        const inputPass = $('#loginPassword').val();

        if (inputUser === STATIC_USERNAME && inputPass === STATIC_PASSWORD) {
          $('#loginAlert')
            .removeClass('d-none text-danger')
            .addClass('text-success')
            .html('<i class="fa-solid fa-circle-check me-1"></i> Login successful! Redirecting...');

          sessionStorage.setItem('isLoggedIn', 'true');
          sessionStorage.setItem('currentUser', inputUser);

          setTimeout(function () {
            window.location.href = 'landing.php';
          }, 1200);
        } else {
          failedAttempts++;
          const remaining = MAX_ATTEMPTS - failedAttempts;
          $('#loginAlert').removeClass('d-none').addClass('text-danger');

          if (failedAttempts >= MAX_ATTEMPTS) {
            $('#loginAlert').html('<i class="fa-solid fa-circle-xmark me-1"></i> Account Locked! 5 failed attempts reached.');
            $('#loginName, #loginPassword, #loginSubmitBtn').prop('disabled', true);
            $('#loginSubmitBtn').text('Sign In Locked');
          } else {
            $('#loginAlert').html(`<i class="fa-solid fa-triangle-exclamation me-1"></i> Invalid credentials! <strong>${remaining}</strong> attempt${remaining > 1 ? 's' : ''} left.`);
            $('#loginPassword').val('').focus();
          }
        }
      }
    });
  });
</script>
