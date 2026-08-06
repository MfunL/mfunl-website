(() => {
  // Convenience-only client-side checks. Server-side validation in
  // ContactController/CareerController is the source of truth.
  document.querySelectorAll('.lead-form').forEach((form) => {
    const pageUrlField = form.querySelector('input[name="page_url"]');
    if (pageUrlField) pageUrlField.value = window.location.pathname;

    let renderedAt = Date.now();
    form.addEventListener('submit', (e) => {
      const elapsed = Date.now() - renderedAt;
      if (elapsed < 1500) {
        // Too fast to be a human filling the form — likely a bot.
        e.preventDefault();
        return;
      }

      const required = form.querySelectorAll('[required]');
      for (const field of required) {
        if (!field.value.trim()) {
          field.focus();
          e.preventDefault();
          return;
        }
      }
    });
  });
})();
