/**
 * MaliExplorer Theme Scripts
 * Version: 1.0.0
 */

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  // 1. HEADER SCROLL STATE
  const siteHeader = document.querySelector('.site-header');
  function handleHeaderScroll() {
    if (!siteHeader) return;
    if (window.scrollY > 30) {
      siteHeader.classList.add('is-scrolled');
    } else {
      siteHeader.classList.remove('is-scrolled');
    }
  }
  window.addEventListener('scroll', handleHeaderScroll, { passive: true });
  handleHeaderScroll();

  // 2. MOBILE MENU TOGGLE
  const mobileToggle = document.querySelector('.mobile-toggle');
  const mobileDrawer = document.querySelector('.mobile-nav-drawer');

  if (mobileToggle && mobileDrawer) {
    function toggleMobileMenu(open) {
      const isCurrentlyOpen = mobileDrawer.classList.contains('is-active');
      const shouldOpen = typeof open === 'boolean' ? open : !isCurrentlyOpen;

      if (shouldOpen) {
        mobileDrawer.classList.add('is-active');
        mobileToggle.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
      } else {
        mobileDrawer.classList.remove('is-active');
        mobileToggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      }
    }

    mobileToggle.addEventListener('click', function (e) {
      e.stopPropagation();
      toggleMobileMenu();
    });

    // Close on click outside (backdrop)
    mobileDrawer.addEventListener('click', function (e) {
      if (e.target === mobileDrawer) {
        toggleMobileMenu(false);
      }
    });

    // Close on navigation link click (especially anchors)
    const mobileLinks = mobileDrawer.querySelectorAll('a');
    mobileLinks.forEach(function (link) {
      link.addEventListener('click', function () {
        toggleMobileMenu(false);
      });
    });

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobileDrawer.classList.contains('is-active')) {
        toggleMobileMenu(false);
      }
    });
  }

  // 3. SMOOTH SCROLLING FOR INTERNAL ANCHORS
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#' || targetId === '') return;

      const targetEl = document.querySelector(targetId);
      if (targetEl) {
        e.preventDefault();
        const headerOffset = siteHeader ? siteHeader.offsetHeight : 0;
        const elementPosition = targetEl.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    });
  });
});

