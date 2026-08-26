(() => {
  // ---- Instagram reel mute/unmute ----
  document.querySelectorAll('.instagram-feed__mute').forEach((btn) => {
    const video = btn.previousElementSibling;
    if (!video || video.tagName !== 'VIDEO') return;

    btn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      video.muted = !video.muted;
      const icon = btn.querySelector('i');
      btn.setAttribute('aria-pressed', String(video.muted));
      btn.setAttribute('aria-label', video.muted ? 'Unmute video' : 'Mute video');
      if (icon) {
        icon.classList.toggle('fa-volume-xmark', video.muted);
        icon.classList.toggle('fa-volume-high', !video.muted);
      }
    });
  });

  // ---- Back to top ----
  const backToTop = document.getElementById('back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', () => {
      backToTop.hidden = window.scrollY < 500;
    }, { passive: true });

    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ---- Modal open/close ----
  document.querySelectorAll('[data-open-modal]').forEach((trigger) => {
    trigger.addEventListener('click', () => {
      const modal = document.getElementById(trigger.dataset.openModal);
      if (!modal) return;
      modal.hidden = false;
      const formType = trigger.dataset.formType;
      if (formType) {
        const field = modal.querySelector('#audit-form-type');
        if (field) field.value = formType;
      }
      const position = trigger.dataset.position;
      if (position) {
        const field = modal.querySelector('#career-modal-position');
        if (field) field.value = position;
      }
      document.body.style.overflow = 'hidden';
    });
  });

  document.querySelectorAll('[data-close-modal]').forEach((el) => {
    el.addEventListener('click', () => {
      const modal = el.closest('.modal');
      if (modal) modal.hidden = true;
      document.body.style.overflow = '';
    });
  });

  // ---- Lightbox (images) ----
  const imageLightbox = document.getElementById('media-lightbox');
  const imageLightboxImg = document.getElementById('media-lightbox-image');
  document.querySelectorAll('[data-open-lightbox]').forEach((trigger) => {
    trigger.addEventListener('click', () => {
      if (!imageLightbox || !imageLightboxImg) return;
      imageLightboxImg.src = trigger.dataset.openLightbox;
      imageLightbox.hidden = false;
    });
  });

  // ---- Lightbox (YouTube video) ----
  const videoLightbox = document.getElementById('video-lightbox');
  const videoFrame = document.getElementById('video-lightbox-frame');
  document.querySelectorAll('[data-open-video]').forEach((trigger) => {
    trigger.addEventListener('click', () => {
      if (!videoLightbox || !videoFrame) return;
      videoFrame.innerHTML = '<iframe src="https://www.youtube.com/embed/vHZWwWAjVEU" title="MfunL video" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
      videoLightbox.hidden = false;
    });
  });

  document.querySelectorAll('[data-close-lightbox]').forEach((el) => {
    el.addEventListener('click', () => {
      const box = el.closest('.lightbox');
      if (box) box.hidden = true;
      if (videoFrame) videoFrame.innerHTML = '';
    });
  });

  // ---- Journey counters (IntersectionObserver) ----
  const counters = document.querySelectorAll('.counter');
  if (counters.length && 'IntersectionObserver' in window) {
    const animate = (el) => {
      const target = parseFloat(el.dataset.target || '0');
      const decimals = parseInt(el.dataset.decimals || '0', 10);
      const numEl = el.querySelector('.counter__num');
      if (!numEl) return;
      const duration = 1500;
      const start = performance.now();

      const step = (now) => {
        const progress = Math.min((now - start) / duration, 1);
        const value = target * progress;
        numEl.textContent = decimals ? value.toFixed(decimals) : Math.round(value).toString();
        if (progress < 1) requestAnimationFrame(step);
      };
      requestAnimationFrame(step);
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animate(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.4 });

    counters.forEach((el) => observer.observe(el));
  }

  // ---- FAQ accordion (one open at a time) ----
  document.querySelectorAll('.faq-item__question').forEach((btn) => {
    btn.addEventListener('click', () => {
      const answer = document.getElementById(btn.getAttribute('aria-controls'));
      const isOpen = btn.getAttribute('aria-expanded') === 'true';

      document.querySelectorAll('.faq-item__question').forEach((other) => {
        other.setAttribute('aria-expanded', 'false');
        const otherAnswer = document.getElementById(other.getAttribute('aria-controls'));
        if (otherAnswer) otherAnswer.hidden = true;
      });

      if (!isOpen) {
        btn.setAttribute('aria-expanded', 'true');
        if (answer) answer.hidden = false;
      }
    });
  });

  // ---- Tabs (pricing services, case study categories, etc.) ----
  document.querySelectorAll('[data-tabs]').forEach((tabs) => {
    const buttons = tabs.querySelectorAll('[data-tab-btn]');
    const panels = tabs.querySelectorAll('.tab-panel');

    buttons.forEach((btn) => {
      btn.addEventListener('click', () => {
        const target = btn.dataset.tabBtn;

        buttons.forEach((other) => {
          const isTarget = other === btn;
          other.classList.toggle('is-active', isTarget);
          other.setAttribute('aria-selected', String(isTarget));
        });

        panels.forEach((panel) => {
          panel.hidden = panel.id !== target;
        });
      });
    });
  });

})();
