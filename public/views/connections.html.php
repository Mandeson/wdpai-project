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
                  </div>
                </div>
              </div>
              <button class="date-control" type="button">
                <span>
                  <small>Departure</small>
                  <strong>Sat, 24 May</strong>
                </span>
              </button>
              <button class="passenger-control" type="button">
                2 passengers
              </button>
            </div>

            <div class="section-heading">
              <div>
                <h2 id="departures-heading">Available departures</h2>
                <p>4 crossings found</p>
              </div>
              <button class="sort-button" type="button">
                Departure time
              </button>
            </div>

            <div class="departure-list">
              <a class="departure-card selected" href="?ferry=1" aria-current="true">
                <div class="operator-row">
                  <div class="operator">
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
                    <em>Direct</em>
                  </div>
                  <div class="arrival">
                    <strong class="route-time">10:45</strong>
                    <span>Isle of Pines</span>
                  </div>
                </div>
                <div class="fare-row">
                  <span class="availability">12 seats available</span>
                  <span class="fare">from <strong>$<?= $cost1 ?></strong> / person</span>
                </div>
              </a>

              <a class="departure-card" href="?ferry=2">
                <div class="operator-row">
                  <div class="operator">
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
                    <em>Direct</em>
                  </div>
                  <div class="arrival">
                    <strong class="route-time">13:10</strong>
                    <span>Isle of Pines</span>
                  </div>
                </div>
                <div class="fare-row">
                  <span class="availability low">Only 7 seats left</span>
                  <span class="fare">from <strong>$<?= $cost2 ?></strong> / person</span>
                </div>
              </a>

              <a class="departure-card" href="?ferry=3">
                <div class="operator-row">
                  <div class="operator">
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

          <?php if (isset($connectionId)): ?>
          <aside class="selection" aria-label="Selected ferry details">
            <div class="selection-card">
              <div class="selection-route">
                <div class="decorative-ring"></div>
                <p>Your selected crossing</p>
                <div class="selection-times">
                  <div><strong>08:30</strong><span>HBY</span></div>
                  <div class="arrival"><strong>10:45</strong><span>IOP</span></div>
                </div>
                <div class="selection-ports"><span>Harbor Bay</span><span>Isle of Pines</span></div>
              </div>

              <div class="selection-details">
                <div class="detail-cards">
                  <div>
                    <small>Travel time</small>
                    <strong>2h 15m</strong>
                  </div>
                  <div>
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
                </a>
                <p class="cancellation">Free cancellation up to 24 hours before departure</p>
              </div>
            </div>
          </aside>
          <?php endif; ?>
        </div>
      </main>
    </div>
  </body>
</html>
