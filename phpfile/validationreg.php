<script>
      $(document).ready(function () {
        $('#registerForm').validate({
          rules: {
            fullname: {
              required: true,
              minlength: 2
            },
            email: {
              required: true,
              email: true
            },
            password: {
              required: true,
              minlength: 8
            },
            confirm_password: {
              required: true,
              equalTo: "#regPassword"
            },
            terms: {
              required: true
            }
          },
          messages: {
            fullname: {
              required: "Please enter your full name.",
              minlength: "Name must be at least 2 characters."
            },
            email: {
              required: "Please enter your email address.",
              email: "Please enter a valid email address (e.g. user@example.com)."
            },
            password: {
              required: "Please provide a password.",
              minlength: "Password must be at least 8 characters long."
            },
            confirm_password: {
              required: "Please confirm your password.",
              equalTo: "Passwords do not match."
            },
            terms: "You must accept the terms to register."
          },
          errorElement: 'span',
          errorClass: 'error-msg',
          highlight: function(element) {
            $(element).addClass('is-invalid');
          },
          unhighlight: function(element) {
            $(element).removeClass('is-invalid');
          },
          errorPlacement: function(error, element) {
            if (element.attr("name") === "terms") {
              error.insertAfter(element.closest('.form-check'));
            } else {
              error.insertAfter(element);
            }
          },
          submitHandler: function(form) {
            $('#regAlert')
              .removeClass('d-none text-danger')
              .addClass('text-success')
              .html('<i class="fa-solid fa-circle-check me-1"></i> Registration successful! Redirecting to login...');

            setTimeout(function() {
              window.location.href = 'index.php';
            }, 1500);
          }
        });
      });
    </script>