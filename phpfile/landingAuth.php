<script>
  $(document).ready(function () {
    const isLoggedIn = sessionStorage.getItem('isLoggedIn');
    const currentUser = sessionStorage.getItem('currentUser');

    if (!isLoggedIn) {
      window.location.href = 'login.php';
      return;
    }

    $('#welcomeUserHeading').text(`Welcome, ${currentUser}!`);
    $('#navUserDisplay').text(`Hi, ${currentUser}`);

    $('#logoutbutton').on('click', function (e) {
      e.preventDefault();
      sessionStorage.clear();
      window.location.href = 'login.php';
    });
  });
</script>
