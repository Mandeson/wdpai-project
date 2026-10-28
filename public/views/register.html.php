<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&amp;family=Manrope:wght@600;700;800&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/static/css/styles.css" />
    <link rel="stylesheet" href="/static/css/register.css" />
  </head>
  <body>
    <svg class="icon-sprite" aria-hidden="true">
      <symbol id="icon-ferry" viewBox="0 0 24 24">
        <path d="m4.5 14 1.2-6h12.6l1.2 6M8 8V5h8v3M3 14h18l-1.6 3.2A3.2 3.2 0 0 1 16.54 19H7.46a3.2 3.2 0 0 1-2.86-1.8L3 14Z" />
        <path d="M8 11h.01M12 11h.01M16 11h.01" />
      </symbol>
      <symbol id="icon-arrow" viewBox="0 0 24 24">
        <path d="M5 12h14M14 7l5 5-5 5" />
      </symbol>
      <symbol id="icon-user" viewBox="0 0 24 24">
        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
        <circle cx="12" cy="7" r="4" />
      </symbol>
      <symbol id="icon-mail" viewBox="0 0 24 24">
        <rect x="3" y="5" width="18" height="14" rx="2" />
        <path d="m3 7 9 6 9-6" />
      </symbol>
      <symbol id="icon-lock" viewBox="0 0 24 24">
        <rect x="5" y="11" width="14" height="10" rx="2" />
        <circle cx="12" cy="16" r="1" />
        <path d="M8 11V7a4 4 0 0 1 8 0v4" />
      </symbol>
      <symbol id="icon-settings" viewBox="0 0 24 24">
        <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
        <circle cx="12" cy="12" r="3" />
      </symbol>
      <symbol id="icon-sun" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="4" />
        <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41" />
      </symbol>
      <symbol id="icon-moon" viewBox="0 0 24 24">
        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
      </symbol>
    </svg>

    <div class="site-shell">
      <header class="site-header">
        <div class="header-inner">
          <a class="brand" href="/" aria-label="Ferryway home">
            <span class="brand-mark"><svg><use href="#icon-ferry"></use></svg></span>
            <span>ferryway</span>
          </a>
          <div class="header-actions">
            <div class="settings-dropdown">
              <button
                type="button"
                id="settings-btn"
                class="settings-btn"
                aria-label="Settings and preferences"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <svg aria-hidden="true"><use href="#icon-settings"></use></svg>
              </button>
              <div id="settings-menu" class="settings-menu" role="menu" aria-label="Settings menu">
                <div class="settings-menu-header">
                  <p class="settings-menu-title">Preferences</p>
                </div>
                <div>
                  <span class="settings-section-label">Theme</span>
                  <div class="theme-options" role="group" aria-label="Theme switcher">
                    <button
                      type="button"
                      class="theme-opt-btn active"
                      data-theme-value="light"
                      aria-pressed="true"
                    >
                      <svg aria-hidden="true"><use href="#icon-sun"></use></svg>
                      <span>Light</span>
                    </button>
                    <button
                      type="button"
                      class="theme-opt-btn"
                      data-theme-value="dark"
                      aria-pressed="false"
                    >
                      <svg aria-hidden="true"><use href="#icon-moon"></use></svg>
                      <span>Dark</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
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
                  <svg class="input-icon" aria-hidden="true"><use href="#icon-user"></use></svg>
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
                  <svg class="input-icon" aria-hidden="true"><use href="#icon-mail"></use></svg>
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
                  <svg class="input-icon" aria-hidden="true"><use href="#icon-lock"></use></svg>
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
                  <svg class="input-icon" aria-hidden="true"><use href="#icon-lock"></use></svg>
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
                <svg aria-hidden="true"><use href="#icon-arrow"></use></svg>
              </button>
            </form>

            <div class="auth-switch">
              Already have an account? <a href="login.html">Log in</a>
            </div>
          </section>
        </div>
      </main>
    </div>
    <script src="/static/script.js"></script>
  </body>
</html>
