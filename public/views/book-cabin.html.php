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
        <a class="back-link" href="/connections">
          Back to departures
        </a>

        <div class="booking-heading">
          <div>
            <p class="eyebrow">Complete your trip</p>
            <h1>Make the crossing yours.</h1>
            <p class="intro-copy">Choose where you would like to stay aboard the Sea Aurora.</p>
          </div>
          <ol class="booking-steps" aria-label="Booking progress">
            <li class="complete"><span></span>Crossing</li>
            <li class="step-dash" aria-hidden="true"></li>
            <li class="current"><span>2</span>Cabin</li>
            <li class="step-dash" aria-hidden="true"></li>
            <li><span>3</span>Details</li>
          </ol>
        </div>

        <section class="connection-card" aria-labelledby="connection-heading">
          <div class="connection-label">
            <span class="operator-icon"></span>
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
              <span><i></i><b></b><b></b><i></i></span>
            </div>
            <div class="arrival">
              <strong>10:45</strong>
              <span>Isle of Pines</span>
            </div>
          </div>
          <div class="connection-meta">
            <div><span><small>Departure</small><strong>Saturday, 24 May 2025</strong></span></div>
            <div><span><small>Departure harbour</small><strong>Harbor Bay Ferry Terminal, Pier 2</strong></span></div>
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
                  <span class="choice-visual choice-inside"></span>
                  <span class="choice-copy">
                    <span class="choice-title">Inside cabin</span>
                    <span class="choice-description">Quiet and comfortable · 2 single beds</span>
                    <strong>Included</strong>
                  </span>
                  <i aria-hidden="true"></i>
                </label>
                <label class="choice-card">
                  <input type="radio" name="cabin" value="sea-view" checked />
                  <span class="choice-visual choice-sea"></span>
                  <span class="choice-copy">
                    <span class="choice-title">Sea view cabin <em>Most popular</em></span>
                    <span class="choice-description">Large window · Queen bed · 12 m²</span>
                    <strong>+$36</strong>
                  </span>
                  <i aria-hidden="true"></i>
                </label>
                <label class="choice-card">
                  <input type="radio" name="cabin" value="suite" />
                  <span class="choice-visual choice-suite"></span>
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
                <article><span></span><div><h3>Swimming pools</h3><p>Indoor family pool and an open-air pool with sea views.</p></div></article>
                <article><span></span><div><h3>All-inclusive food</h3><p>Buffet meals, snacks and soft drinks throughout your crossing.</p></div></article>
                <article><span></span><div><h3>Free Wi-Fi</h3><p>Stay connected in all cabins and shared passenger areas.</p></div></article>
                <article><span></span><div><h3>Generous luggage</h3><p>Two checked bags and one carry-on per passenger included.</p></div></article>
              </div>
            </section>
          </div>

          <aside class="booking-summary" aria-label="Booking summary">
            <div class="summary-card">
              <p class="summary-eyebrow">Your booking</p>
              <h2>Sea Aurora</h2>
              <p class="summary-route">Harbor Bay Isle of Pines</p>
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
  </body>
</html>
