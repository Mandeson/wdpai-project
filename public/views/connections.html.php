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
    <link rel="stylesheet" href="/static/css/connections.css" />
  </head>
  <body>
    <svg class="icon-sprite" aria-hidden="true">
      <symbol id="icon-ferry" viewBox="0 0 24 24">
        <path d="m4.5 14 1.2-6h12.6l1.2 6M8 8V5h8v3M3 14h18l-1.6 3.2A3.2 3.2 0 0 1 16.54 19H7.46a3.2 3.2 0 0 1-2.86-1.8L3 14Z" />
        <path d="M8 11h.01M12 11h.01M16 11h.01" />
      </symbol>
      <symbol id="icon-calendar" viewBox="0 0 24 24">
        <rect x="3.5" y="5.5" width="17" height="15" rx="2.5" />
        <path d="M8 3.5v4M16 3.5v4M3.5 10h17" />
      </symbol>
      <symbol id="icon-clock" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="8.5" />
        <path d="M12 7.5V12l3 2" />
      </symbol>
      <symbol id="icon-chevron" viewBox="0 0 24 24">
        <path d="m7 10 5 5 5-5" />
      </symbol>
      <symbol id="icon-pin" viewBox="0 0 24 24">
        <path d="M12 21s-6-5.33-6-10a6 6 0 1 1 12 0c0 4.67-6 10-6 10Z" />
        <circle cx="12" cy="11" r="2.5" />
      </symbol>
      <symbol id="icon-arrow" viewBox="0 0 24 24">
        <path d="M5 12h14M14 7l5 5-5 5" />
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
              <a class="login-link" href="login.html">Log in</a>
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

      <main class="page">
        <section class="intro">
          <div>
            <p class="eyebrow">Choose your crossing</p>
            <h1>Your island escape starts here.</h1>
            <p class="intro-copy">Compare available departures and pick the crossing that suits your day.</p>
          </div>
        </section>

        <div class="results-layout">
          <section aria-labelledby="departures-heading">
            <div class="search-controls departures-filter-bar" aria-label="Search details">
              <div class="port-control">
                <svg><use href="#icon-pin"></use></svg>
                <div class="port-control-content">
                  <label for="departure-city">Departure Port</label>
                  <div class="select-wrapper">
                    <select id="departure-city" name="departure_city" aria-label="Departure city">
                      <option value="All" selected>All</option>
                      <option value="Harbor Bay">Harbor Bay</option>
                      <option value="South Port">South Port</option>
                      <option value="East Dock">East Dock</option>
                      <option value="Marina Cove">Marina Cove</option>
                    </select>
                    <svg class="select-chevron" aria-hidden="true"><use href="#icon-chevron"></use></svg>
                  </div>
                </div>
              </div>
              <button class="date-control" type="button">
                <svg><use href="#icon-calendar"></use></svg>
                <span>
                  <small>Departure</small>
                  <strong>Sat, 24 May</strong>
                </span>
              </button>
              <button class="passenger-control" type="button">
                2 passengers
                <svg><use href="#icon-chevron"></use></svg>
              </button>
            </div>

            <div class="section-heading">
              <div>
                <h2 id="departures-heading">Available departures</h2>
                <p>4 crossings found</p>
              </div>
              <button class="sort-button" type="button">
                Departure time
                <svg><use href="#icon-chevron"></use></svg>
              </button>
            </div>

            <div class="departure-list">
              <a class="departure-card selected" href="?ferry=1" aria-current="true">
                <div class="operator-row">
                  <div class="operator">
                    <span class="operator-icon"><svg><use href="#icon-ferry"></use></svg></span>
                    <span><strong>Northline Ferries</strong><small>Sea Aurora</small></span>
                  </div>
                  <span class="badge">Best value</span>
                </div>
                <div class="route">
                  <div>
                    <strong class="route-time">08:30</strong>
                    <span>Harbor Bay</span>
                  </div>
                  <div class="route-line">
                    <small>2h 15m</small>
                    <span class="journey"><i></i><b></b><svg><use href="#icon-ferry"></use></svg><b></b><i></i></span>
                    <em>Direct</em>
                  </div>
                  <div class="arrival">
                    <strong class="route-time">10:45</strong>
                    <span>Isle of Pines</span>
                  </div>
                </div>
                <div class="fare-row">
                  <span class="availability">12 seats available</span>
                  <span class="fare">from <strong>$48</strong> / person</span>
                </div>
              </a>

              <a class="departure-card" href="?ferry=2">
                <div class="operator-row">
                  <div class="operator">
                    <span class="operator-icon"><svg><use href="#icon-ferry"></use></svg></span>
                    <span><strong>Bluewater</strong><small>Ocean Swift</small></span>
                  </div>
                  <span class="badge">Fastest</span>
                </div>
                <div class="route">
                  <div>
                    <strong class="route-time">11:15</strong>
                    <span>Harbor Bay</span>
                  </div>
                  <div class="route-line">
                    <small>1h 55m</small>
                    <span class="journey"><i></i><b></b><svg><use href="#icon-ferry"></use></svg><b></b><i></i></span>
                    <em>Direct</em>
                  </div>
                  <div class="arrival">
                    <strong class="route-time">13:10</strong>
                    <span>Isle of Pines</span>
                  </div>
                </div>
                <div class="fare-row">
                  <span class="availability low">Only 7 seats left</span>
                  <span class="fare">from <strong>$64</strong> / person</span>
                </div>
              </a>

              <a class="departure-card" href="?ferry=3">
                <div class="operator-row">
                  <div class="operator">
                    <span class="operator-icon"><svg><use href="#icon-ferry"></use></svg></span>
                    <span><strong>Northline Ferries</strong><small>Coastal Star</small></span>
                  </div>
                </div>
                <div class="route">
                  <div>
                    <strong class="route-time">14:40</strong>
                    <span>Harbor Bay</span>
                  </div>
                  <div class="route-line">
                    <small>2h 25m</small>
                    <span class="journey"><i></i><b></b><svg><use href="#icon-ferry"></use></svg><b></b><i></i></span>
                    <em>Direct</em>
                  </div>
                  <div class="arrival">
                    <strong class="route-time">17:05</strong>
                    <span>Isle of Pines</span>
                  </div>
                </div>
                <div class="fare-row">
                  <span class="availability">19 seats available</span>
                  <span class="fare">from <strong>$52</strong> / person</span>
                </div>
              </a>

              <a class="departure-card" href="?ferry=4">
                <div class="operator-row">
                  <div class="operator">
                    <span class="operator-icon"><svg><use href="#icon-ferry"></use></svg></span>
                    <span><strong>Atlantic Link</strong><small>Evening Tide</small></span>
                  </div>
                  <span class="badge">Popular</span>
                </div>
                <div class="route">
                  <div>
                    <strong class="route-time">18:20</strong>
                    <span>Harbor Bay</span>
                  </div>
                  <div class="route-line">
                    <small>2h 10m</small>
                    <span class="journey"><i></i><b></b><svg><use href="#icon-ferry"></use></svg><b></b><i></i></span>
                    <em>Direct</em>
                  </div>
                  <div class="arrival">
                    <strong class="route-time">20:30</strong>
                    <span>Isle of Pines</span>
                  </div>
                </div>
                <div class="fare-row">
                  <span class="availability low">Only 4 seats left</span>
                  <span class="fare">from <strong>$57</strong> / person</span>
                </div>
              </a>
            </div>
          </section>

          <aside class="selection" aria-label="Selected ferry details">
            <div class="selection-card">
              <div class="selection-route">
                <div class="decorative-ring"></div>
                <p>Your selected crossing</p>
                <div class="selection-times">
                  <div><strong>08:30</strong><span>HBY</span></div>
                  <div class="selection-line"><b></b><i><svg><use href="#icon-ferry"></use></svg></i><b></b></div>
                  <div class="arrival"><strong>10:45</strong><span>IOP</span></div>
                </div>
                <div class="selection-ports"><span>Harbor Bay</span><span>Isle of Pines</span></div>
              </div>

              <div class="selection-details">
                <div class="detail-cards">
                  <div>
                    <svg><use href="#icon-clock"></use></svg>
                    <small>Travel time</small>
                    <strong>2h 15m</strong>
                  </div>
                  <div>
                    <svg><use href="#icon-calendar"></use></svg>
                    <small>Departure date</small>
                    <strong>24 May 2025</strong>
                  </div>
                </div>
                <dl>
                  <div><dt>Operator</dt><dd>Northline Ferries</dd></div>
                  <div><dt>Vessel</dt><dd>Sea Aurora</dd></div>
                  <div><dt>Passengers</dt><dd>2 adults</dd></div>
                </dl>
                <div class="divider"></div>
                <div class="total">
                  <span><strong>Total for 2 passengers</strong><small>Taxes included</small></span>
                  <b>$96</b>
                </div>
                <a class="continue-button" href="/booking?ferry=1">
                  Continue to booking
                  <svg><use href="#icon-arrow"></use></svg>
                </a>
                <p class="cancellation">Free cancellation up to 24 hours before departure</p>
              </div>
            </div>
          </aside>
        </div>
      </main>
    </div>
    <script src="/static/script.js"></script>
  </body>
</html>
