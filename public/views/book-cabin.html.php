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
    <link rel="stylesheet" href="/static/css/book-cabin.css" />
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
      <symbol id="icon-pin" viewBox="0 0 24 24">
        <path d="M12 21s-6-5.33-6-10a6 6 0 1 1 12 0c0 4.67-6 10-6 10Z" />
        <circle cx="12" cy="11" r="2.5" />
      </symbol>
      <symbol id="icon-calendar" viewBox="0 0 24 24">
        <rect x="3.5" y="5.5" width="17" height="15" rx="2.5" />
        <path d="M8 3.5v4M16 3.5v4M3.5 10h17" />
      </symbol>
      <symbol id="icon-bed" viewBox="0 0 24 24">
        <path d="M3 18v-6.5A2.5 2.5 0 0 1 5.5 9h13a2.5 2.5 0 0 1 2.5 2.5V18M3 15h18M6 9V6h5a2 2 0 0 1 2 2v1" />
      </symbol>
      <symbol id="icon-window" viewBox="0 0 24 24">
        <rect x="4" y="4" width="16" height="16" rx="2" />
        <path d="M12 4v16M4 12h16" />
      </symbol>
      <symbol id="icon-deck" viewBox="0 0 24 24">
        <path d="M4 19h16M6 15h12M8 11h8M10 7h4" />
      </symbol>
      <symbol id="icon-pool" viewBox="0 0 24 24">
        <path d="M3 16c1.5 0 1.5 1 3 1s1.5-1 3-1 1.5 1 3 1 1.5-1 3-1 1.5 1 3 1 1.5-1 3-1M3 20c1.5 0 1.5 1 3 1s1.5-1 3-1 1.5 1 3 1 1.5-1 3-1 1.5 1 3 1 1.5-1 3-1M7 14V7a3 3 0 0 1 6 0M7 10h6" />
      </symbol>
      <symbol id="icon-food" viewBox="0 0 24 24">
        <path d="M7 3v8M4 3v5a3 3 0 0 0 6 0V3M7 11v10M17 3v18M17 3c2.2 2.3 3 4.5 3 7h-3" />
      </symbol>
      <symbol id="icon-wifi" viewBox="0 0 24 24">
        <path d="M5 9.5a11 11 0 0 1 14 0M8 13a6.5 6.5 0 0 1 8 0M10.8 16.4a2 2 0 0 1 2.4 0" />
        <circle cx="12" cy="19" r=".5" />
      </symbol>
      <symbol id="icon-bag" viewBox="0 0 24 24">
        <rect x="4" y="7" width="16" height="14" rx="2" />
        <path d="M9 7V5a3 3 0 0 1 6 0v2M8 11v6M16 11v6" />
      </symbol>
      <symbol id="icon-check" viewBox="0 0 24 24">
        <path d="m5 12 4 4L19 6" />
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
        <a class="back-link" href="/connections">
          <svg aria-hidden="true"><use href="#icon-back"></use></svg>
          Back to departures
        </a>

        <div class="booking-heading">
          <div>
            <p class="eyebrow">Complete your trip</p>
            <h1>Make the crossing yours.</h1>
            <p class="intro-copy">Choose where you would like to stay aboard the Sea Aurora.</p>
          </div>
          <ol class="booking-steps" aria-label="Booking progress">
            <li class="complete"><span><svg><use href="#icon-check"></use></svg></span>Crossing</li>
            <li class="step-dash" aria-hidden="true"></li>
            <li class="current"><span>2</span>Cabin</li>
            <li class="step-dash" aria-hidden="true"></li>
            <li><span>3</span>Details</li>
          </ol>
        </div>

        <section class="connection-card" aria-labelledby="connection-heading">
          <div class="connection-label">
            <span class="operator-icon"><svg><use href="#icon-ferry"></use></svg></span>
            <div>
              <p>Northline Ferries · Sea Aurora</p>
              <h2 id="connection-heading">Harbor Bay to Isle of Pines</h2>
            </div>
          </div>
          <div class="connection-route">
            <div>
              <strong>08:30</strong>
              <span>Harbor Bay</span>
            </div>
            <div class="connection-line">
              <small>2h 15m · Direct</small>
              <span><i></i><b></b><svg><use href="#icon-ferry"></use></svg><b></b><i></i></span>
            </div>
            <div class="arrival">
              <strong>10:45</strong>
              <span>Isle of Pines</span>
            </div>
          </div>
          <div class="connection-meta">
            <div><svg><use href="#icon-calendar"></use></svg><span><small>Departure</small><strong>Saturday, 24 May 2025</strong></span></div>
            <div><svg><use href="#icon-pin"></use></svg><span><small>Departure harbour</small><strong>Harbor Bay Ferry Terminal, Pier 2</strong></span></div>
          </div>
        </section>

        <form class="booking-layout">
          <div class="booking-options">
            <fieldset class="booking-section">
              <legend>Choose your cabin</legend>
              <p class="field-help">One cabin for 2 adults. All cabins include a private bathroom and fresh linens.</p>
              <div class="cabin-grid">
                <label class="choice-card">
                  <input type="radio" name="cabin" value="inside" />
                  <span class="choice-visual choice-inside"><svg><use href="#icon-bed"></use></svg></span>
                  <span class="choice-copy">
                    <span class="choice-title">Inside cabin</span>
                    <span class="choice-description">Quiet and comfortable · 2 single beds</span>
                    <strong>Included</strong>
                  </span>
                  <i aria-hidden="true"></i>
                </label>
                <label class="choice-card">
                  <input type="radio" name="cabin" value="sea-view" checked />
                  <span class="choice-visual choice-sea"><svg><use href="#icon-window"></use></svg></span>
                  <span class="choice-copy">
                    <span class="choice-title">Sea view cabin <em>Most popular</em></span>
                    <span class="choice-description">Large window · Queen bed · 12 m²</span>
                    <strong>+$36</strong>
                  </span>
                  <i aria-hidden="true"></i>
                </label>
                <label class="choice-card">
                  <input type="radio" name="cabin" value="suite" />
                  <span class="choice-visual choice-suite"><svg><use href="#icon-window"></use></svg></span>
                  <span class="choice-copy">
                    <span class="choice-title">Panorama suite</span>
                    <span class="choice-description">Private lounge · King bed · 24 m²</span>
                    <strong>+$84</strong>
                  </span>
                  <i aria-hidden="true"></i>
                </label>
              </div>
            </fieldset>

            <fieldset class="booking-section">
              <legend>Choose your floor</legend>
              <p class="field-help">Select your preferred deck. Cabin assignment is confirmed after booking.</p>
              <div class="floor-grid">
                <label class="floor-choice">
                  <input type="radio" name="floor" value="deck-5" />
                  <span class="floor-number">5</span>
                  <span><strong>Deck 5</strong><small>Near restaurants</small></span>
                  <i aria-hidden="true"></i>
                </label>
                <label class="floor-choice">
                  <input type="radio" name="floor" value="deck-6" checked />
                  <span class="floor-number">6</span>
                  <span><strong>Deck 6</strong><small>Quiet deck</small></span>
                  <i aria-hidden="true"></i>
                </label>
                <label class="floor-choice">
                  <input type="radio" name="floor" value="deck-7" />
                  <span class="floor-number">7</span>
                  <span><strong>Deck 7</strong><small>Near pool &amp; sundeck</small></span>
                  <i aria-hidden="true"></i>
                </label>
              </div>
            </fieldset>

            <section class="perks-section" aria-labelledby="perks-heading">
              <div class="section-heading">
                <div>
                  <p class="eyebrow">Included with every ticket</p>
                  <h2 id="perks-heading">More to enjoy on board</h2>
                </div>
              </div>
              <div class="perks-grid">
                <article><span><svg><use href="#icon-pool"></use></svg></span><div><h3>Swimming pools</h3><p>Indoor family pool and an open-air pool with sea views.</p></div></article>
                <article><span><svg><use href="#icon-food"></use></svg></span><div><h3>All-inclusive food</h3><p>Buffet meals, snacks and soft drinks throughout your crossing.</p></div></article>
                <article><span><svg><use href="#icon-wifi"></use></svg></span><div><h3>Free Wi-Fi</h3><p>Stay connected in all cabins and shared passenger areas.</p></div></article>
                <article><span><svg><use href="#icon-bag"></use></svg></span><div><h3>Generous luggage</h3><p>Two checked bags and one carry-on per passenger included.</p></div></article>
              </div>
            </section>
          </div>

          <aside class="booking-summary" aria-label="Booking summary">
            <div class="summary-card">
              <p class="summary-eyebrow">Your booking</p>
              <h2>Sea Aurora</h2>
              <p class="summary-route">Harbor Bay <svg><use href="#icon-arrow"></use></svg> Isle of Pines</p>
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
                Continue to details
                <svg><use href="#icon-arrow"></use></svg>
              </button>
              <p class="cancellation">No payment is taken on this demo page</p>
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
