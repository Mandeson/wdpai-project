<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle) ?></title>
  </head>
  <body>
    <div class="site-shell">
      <header class="site-header">
        <div class="header-inner">
          <a class="brand" href="/" aria-label="Ferryway home">
            <span>ferryway</span>
          </a>
          <div class="header-actions">
          </div>
        </div>
      </header>

      <main class="page">
        <div class="auth-container">
          <section class="auth-card" aria-labelledby="register-title">
            <header class="auth-header">
              <p class="eyebrow">Get started</p>
              <h1 id="register-title">Create your account</h1>
              <p>Book trips faster and keep all your ferry tickets in one place.</p>
            </header>

            <form class="auth-form" action="/register" method="post">
              <div class="form-group">
                <label for="name">Full name</label>
                <div class="input-wrapper">
                  <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                    placeholder="Jane Doe"
                    required
                    autocomplete="name"
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="email">Email address</label>
                <div class="input-wrapper">
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control"
                    placeholder="name@example.com"
                    required
                    autocomplete="email"
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                  <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-control"
                    placeholder="Create a password"
                    required
                    autocomplete="new-password"
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="password-confirm">Confirm password</label>
                <div class="input-wrapper">
                  <input
                    type="password"
                    id="password-confirm"
                    name="password_confirmation"
                    class="form-control"
                    placeholder="Confirm your password"
                    required
                    autocomplete="new-password"
                  />
                </div>
              </div>

              <div class="form-options">
                <label class="checkbox-label">
                  <input type="checkbox" name="terms" required />
                  <span>I agree to the Terms of Service &amp; Privacy Policy</span>
                </label>
              </div>

              <button type="submit" class="auth-submit-btn">
                <span>Create account</span>
              </button>
            </form>

            <div class="auth-switch">
              Already have an account? <a href="login.html">Log in</a>
            </div>
          </section>
        </div>
      </main>
    </div>
  </body>
</html>
