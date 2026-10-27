// Theme switcher and settings dropdown logic
(function () {
  const THEME_KEY = 'ferryway_theme';

  // Apply theme immediately to document element to avoid flash
  function applyTheme(theme) {
    if (theme === 'dark') {
      document.documentElement.setAttribute('data-theme', 'dark');
    } else {
      document.documentElement.removeAttribute('data-theme');
    }
  }

  // Determine initial theme: saved preference -> system preference -> default light
  const savedTheme = localStorage.getItem(THEME_KEY);
  if (savedTheme) {
    applyTheme(savedTheme);
  } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    applyTheme('dark');
  }

  // Initialize UI once DOM is ready
  function initSettingsMenu() {
    const triggerBtn = document.getElementById('settings-btn');
    const menu = document.getElementById('settings-menu');
    if (!triggerBtn || !menu) return;

    // Update active state in menu options
    function updateMenuState() {
      const currentTheme = document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
      const lightBtn = menu.querySelector('[data-theme-value="light"]');
      const darkBtn = menu.querySelector('[data-theme-value="dark"]');

      if (lightBtn && darkBtn) {
        lightBtn.classList.toggle('active', currentTheme === 'light');
        lightBtn.setAttribute('aria-pressed', currentTheme === 'light');
        darkBtn.classList.toggle('active', currentTheme === 'dark');
        darkBtn.setAttribute('aria-pressed', currentTheme === 'dark');
      }
    }

    function toggleMenu(show) {
      const isOpen = show !== undefined ? show : !menu.classList.contains('is-open');
      menu.classList.toggle('is-open', isOpen);
      triggerBtn.setAttribute('aria-expanded', String(isOpen));
      if (isOpen) {
        updateMenuState();
      }
    }

    triggerBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      toggleMenu();
    });

    // Theme switch buttons
    const themeButtons = menu.querySelectorAll('[data-theme-value]');
    themeButtons.forEach((btn) => {
      btn.addEventListener('click', (e) => {
        e.stopPropagation();
        const selectedTheme = btn.getAttribute('data-theme-value');
        applyTheme(selectedTheme);
        localStorage.setItem(THEME_KEY, selectedTheme);
        updateMenuState();
      });
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!menu.contains(e.target) && !triggerBtn.contains(e.target)) {
        toggleMenu(false);
      }
    });

    // Close menu on Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && menu.classList.contains('is-open')) {
        toggleMenu(false);
        triggerBtn.focus();
      }
    });

    // Listen for system theme changes if user hasn't explicitly set preference
    if (window.matchMedia) {
      window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
        if (!localStorage.getItem(THEME_KEY)) {
          applyTheme(e.matches ? 'dark' : 'light');
          updateMenuState();
        }
      });
    }

    updateMenuState();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSettingsMenu);
  } else {
    initSettingsMenu();
  }
})();


