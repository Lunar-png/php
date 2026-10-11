<main id="login" class="container min-vh-100 d-flex justify-content-center align-items-center py-5 px-3">
  <section class="card auth-card p-4 p-sm-5 border-0">
    <header class="text-center mb-4">
      <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-2 rounded-pill fw-bold mb-2">
        <i class="fa-solid fa-utensils me-1"></i> Oppa's Samgyupsal
      </span>
      <h1 class="h2 fw-bold text-dark mb-1">Welcome Back</h1>
      <p class="text-muted small mb-0">Sign in to continue your dining experience</p>
    </header>

    <form id="loginForm" action="#" method="POST" novalidate>
      <div class="mb-3">
        <input type="text" id="loginName" name="username" class="form-control form-control-custom" placeholder="Username or email" autocomplete="username">
        <label for="loginName" class="field-label-below">
          <i class="fa-regular fa-user me-1" aria-hidden="true"></i> Username or Email
        </label>
      </div>

      <div class="mb-3">
        <input type="password" id="loginPassword" name="password" class="form-control form-control-custom" placeholder="Enter your password" autocomplete="current-password">
        <label for="loginPassword" class="field-label-below">
          <i class="fa-solid fa-lock me-1" aria-hidden="true"></i> Password
        </label>
      </div>

      <p id="loginAlert" class="small fw-semibold text-center mb-3 d-none"></p>

      <button type="submit" id="loginSubmitBtn" class="button button-gradient-success button-lg w-100 py-3 rounded-3 fw-bold mb-3">
        Sign In <i class="fa-solid fa-arrow-right-to-bracket ms-2" aria-hidden="true"></i>
      </button>
    </form>

    <footer class="text-center pt-3 border-top">
      <p class="text-muted small mb-0">
        New here?
        <a href="register.php" class="auth-switch-link">Create an account</a>
      </p>
    </footer>
  </section>
</main>
