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
          <section class="auth-card" aria-labelledby="login-title">
            <header class="auth-header">
              <p class="eyebrow">Welcome back</p>
              <h1 id="login-title">Log in to ferryway</h1>
              <p>Manage your bookings and view upcoming ferry trips.</p>
            </header>

            <form class="auth-form" action="/login" method="post">
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
                    placeholder="Enter your password"
                    required
                    autocomplete="current-password"
                  />
                </div>
              </div>

              <div class="form-options">
                <label class="checkbox-label">
                  <input type="checkbox" name="remember" />
                  <span>Remember me</span>
                </label>
                <a href="#forgot" class="forgot-link">Forgot password?</a>
              </div>

              <button type="submit" class="auth-submit-btn">
                <span>Sign in</span>
              </button>
            </form>

            <div class="auth-switch">
              Don't have an account? <a href="register.html">Create an account</a>
            </div>
          </section>
        </div>
      </main>
    </div>
  </body>
</html>
