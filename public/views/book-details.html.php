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
            <nav class="main-nav" aria-label="Main navigation">
              <a href="/dashboard">Dashboard</a>
              <a class="login-link" href="/login">Log in</a>
            </nav>
          </div>
        </div>
      </header>

      <main class="page booking-page">
        <a class="back-link" href="/book-cabin/">
          Back to cabin selection
        </a>

        <div class="booking-heading">
          <div>
            <p class="eyebrow">Almost ready to sail</p>
            <h1>Who is travelling?</h1>
            <p class="intro-copy">Add passenger and contact details for your crossing.</p>
          </div>
          <ol class="booking-steps" aria-label="Booking progress">
            <li class="complete"><span></span>Crossing</li>
            <li class="step-dash" aria-hidden="true"></li>
            <li class="complete"><span></span>Cabin</li>
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
              <p class="summary-route">Harbor Bay Isle of Pines</p>
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
              </button>
              <p class="cancellation secure-note">
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
  </body>
</html>
