<!doctype html>
<html lang="en-GB">
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
    <link rel="stylesheet" href="/static/css/book-details.css" />
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
      <symbol id="icon-back" viewBox="0 0 24 24">
        <path d="M19 12H5M10 17l-5-5 5-5" />
      </symbol>
      <symbol id="icon-check" viewBox="0 0 24 24">
        <path d="m5 12 4 4L19 6" />
      </symbol>
      <symbol id="icon-lock" viewBox="0 0 24 24">
        <rect x="4.5" y="10" width="15" height="10" rx="2.5" />
        <path d="M8 10V7a4 4 0 0 1 8 0v3" />
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
            <nav class="main-nav" aria-label="Main navigation">
              <a href="/dashboard">Dashboard</a>
              <a class="login-link" href="/login">Log in</a>
            </nav>
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

      <main class="page booking-page">
        <a class="back-link" href="/book-cabin/">
          <svg aria-hidden="true"><use href="#icon-back"></use></svg>
          Back to cabin selection
        </a>

        <div class="booking-heading">
          <div>
            <p class="eyebrow">Almost ready to sail</p>
            <h1>Who is travelling?</h1>
            <p class="intro-copy">Add passenger and contact details for your crossing.</p>
          </div>
          <ol class="booking-steps" aria-label="Booking progress">
            <li class="complete"><span><svg><use href="#icon-check"></use></svg></span>Crossing</li>
            <li class="step-dash" aria-hidden="true"></li>
            <li class="complete"><span><svg><use href="#icon-check"></use></svg></span>Cabin</li>
            <li class="step-dash" aria-hidden="true"></li>
            <li class="current"><span>3</span>Details</li>
          </ol>
        </div>

        <form class="booking-layout" action="#" method="get">
          <div class="booking-options">
            <fieldset class="booking-section details-section">
              <legend>Lead passenger</legend>
              <p class="field-help">Use the name shown on your passport or photo ID.</p>
              <div class="details-grid">
                <label class="details-field compact">
                  <span>Title</span>
                  <select name="lead-title" required>
                    <option value="">Select</option>
                    <option>Ms</option>
                    <option>Mr</option>
                    <option>Mx</option>
                    <option>Dr</option>
                  </select>
                </label>
                <label class="details-field">
                  <span>First name</span>
                  <input type="text" name="lead-first-name" autocomplete="given-name" placeholder="Alex" required />
                </label>
                <label class="details-field">
                  <span>Last name</span>
                  <input type="text" name="lead-last-name" autocomplete="family-name" placeholder="Morgan" required />
                </label>
                <label class="details-field">
                  <span>Date of birth</span>
                  <input type="date" name="lead-date-of-birth" required />
                </label>
              </div>
            </fieldset>

            <fieldset class="booking-section details-section">
              <legend>Second passenger</legend>
              <p class="field-help">Passenger 2 · Adult</p>
              <div class="details-grid">
                <label class="details-field compact">
                  <span>Title</span>
                  <select name="passenger-title" required>
                    <option value="">Select</option>
                    <option>Ms</option>
                    <option>Mr</option>
                    <option>Mx</option>
                    <option>Dr</option>
                  </select>
                </label>
                <label class="details-field">
                  <span>First name</span>
                  <input type="text" name="passenger-first-name" autocomplete="off" placeholder="Sam" required />
                </label>
                <label class="details-field">
                  <span>Last name</span>
                  <input type="text" name="passenger-last-name" autocomplete="off" placeholder="Morgan" required />
                </label>
                <label class="details-field">
                  <span>Date of birth</span>
                  <input type="date" name="passenger-date-of-birth" required />
                </label>
              </div>
            </fieldset>

            <fieldset class="booking-section details-section">
              <legend>Contact details</legend>
              <p class="field-help">We will send booking updates and your boarding passes here.</p>
              <div class="contact-grid">
                <label class="details-field">
                  <span>Email address</span>
                  <input type="email" name="email" autocomplete="email" placeholder="alex@example.com" required />
                </label>
                <label class="details-field">
                  <span>Mobile number</span>
                  <input type="tel" name="phone" autocomplete="tel" placeholder="+1 555 012 3456" required />
                </label>
              </div>
              <label class="details-checkbox">
                <input type="checkbox" name="updates" />
                <span>Send me occasional route news and ferryway offers.</span>
              </label>
            </fieldset>
          </div>

          <aside class="booking-summary" aria-label="Trip summary">
            <div class="summary-card">
              <div class="summary-heading">
                <div>
                  <p class="summary-eyebrow">Trip summary</p>
                  <h2>Sea Aurora</h2>
                </div>
                <a href="/book-cabin/">Edit</a>
              </div>
              <p class="summary-route">Harbor Bay <svg><use href="#icon-arrow"></use></svg> Isle of Pines</p>
              <div class="summary-date">
                <strong>Saturday, 24 May 2025</strong>
                <span>08:30–10:45 · 2h 15m · Direct</span>
              </div>
              <dl>
                <div><dt>Crossing · 2 adults</dt><dd>$96</dd></div>
                <div><dt>Sea view cabin</dt><dd>$36</dd></div>
                <div><dt>Deck 6</dt><dd>Included</dd></div>
              </dl>
              <div class="divider"></div>
              <div class="total">
                <span><strong>Total</strong><small>Taxes and fees included</small></span>
                <b>$132</b>
              </div>
              <button class="continue-button summary-button" type="submit">
                Review booking
                <svg><use href="#icon-arrow"></use></svg>
              </button>
              <p class="cancellation secure-note">
                <svg aria-hidden="true"><use href="#icon-lock"></use></svg>
                No payment is taken on this demo page
              </p>
            </div>
            <div class="help-card">
              <strong>Flexible booking</strong>
              <p>Change or cancel for free up to 24 hours before departure.</p>
            </div>
          </aside>
        </form>
      </main>
    </div>
    <script src="/static/script.js"></script>
  </body>
</html>
