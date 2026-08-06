(() => {
  const toggle = document.querySelector('.mobile-nav-toggle');
  const toggleIcon = toggle?.querySelector('i');
  const nav = document.getElementById('mobile-nav');
  const backdrop = document.getElementById('mobile-nav-backdrop');

  const closeNav = () => {
    nav?.classList.remove('is-open');
    backdrop?.classList.remove('is-open');
    toggle?.setAttribute('aria-expanded', 'false');
    nav?.setAttribute('aria-hidden', 'true');
    toggleIcon?.classList.remove('fa-xmark');
    toggleIcon?.classList.add('fa-bars');
  };

  toggle?.addEventListener('click', () => {
    const isOpen = nav?.classList.toggle('is-open');
    backdrop?.classList.toggle('is-open', isOpen);
    toggle.setAttribute('aria-expanded', String(Boolean(isOpen)));
    nav?.setAttribute('aria-hidden', String(!isOpen));
    toggleIcon?.classList.toggle('fa-bars', !isOpen);
    toggleIcon?.classList.toggle('fa-xmark', isOpen);
  });

  nav?.querySelector('.mobile-nav__close')?.addEventListener('click', closeNav);
  backdrop?.addEventListener('click', closeNav);

  nav?.querySelectorAll('.mobile-nav__accordion-btn').forEach((btn) => {
    btn.addEventListener('click', () => {
      const li = btn.closest('.has-accordion');
      const isOpen = li?.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', String(Boolean(isOpen)));
    });
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeNav();
  });

  // ---- Highlight the current page's link, wherever it appears in the nav ----
  const currentPath = window.location.pathname.replace(/\/?$/, '/');

  document.querySelectorAll('.main-nav a[href], .mobile-nav a[href]').forEach((link) => {
    let linkPath;
    try {
      linkPath = new URL(link.getAttribute('href'), window.location.origin).pathname.replace(/\/?$/, '/');
    } catch {
      return;
    }

    if (linkPath !== currentPath) return;

    link.classList.add('is-active');

    const group = link.closest('.mega-menu__group');
    group?.querySelector(':scope > a, :scope > span')?.classList.add('is-active');

    const nestedAccordion = link.closest('.has-accordion--nested');
    nestedAccordion?.querySelector(':scope > .mobile-nav__accordion-btn')?.classList.add('is-active');

    const topLevel = link.closest('.has-mega, .has-accordion');
    topLevel?.querySelector(':scope > a, :scope > .main-nav__label, :scope > .mobile-nav__accordion-btn')?.classList.add('is-active');
  });
})();
