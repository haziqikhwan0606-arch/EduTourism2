/**
 * Olympia EduTourism - Core Interactive Scripts
 * Lightweight, 60fps, Zero External Dependencies
 */

document.addEventListener("DOMContentLoaded", function() {
  // 1. Preloader dismissal featuring In collaboration with_.png
  var preloader = document.getElementById("sitePreloader");
  if (preloader) {
    function hidePreloader() {
      preloader.classList.add("is-loaded");
      setTimeout(function() {
        if (preloader.parentNode) preloader.parentNode.removeChild(preloader);
      }, 550);
    }

    // Dismiss as soon as content is ready, max 700ms fallback
    if (document.readyState === "complete") {
      setTimeout(hidePreloader, 350);
    } else {
      window.addEventListener("load", function() {
        setTimeout(hidePreloader, 300);
      });
      setTimeout(hidePreloader, 800);
    }
  }

  // 2. Mobile Drawer Navigation Toggle
  var navToggle = document.querySelector(".js-mobile-nav-toggle");
  var mobileDrawer = document.querySelector(".js-mobile-drawer");
  var drawerOverlay = document.querySelector(".js-drawer-overlay");
  var closeDrawerBtn = document.querySelector(".js-close-drawer");

  function openDrawer() {
    if (mobileDrawer) mobileDrawer.classList.add("is-open");
    if (drawerOverlay) drawerOverlay.classList.add("is-open");
    document.body.style.overflow = "hidden";
  }

  function closeDrawer() {
    if (mobileDrawer) mobileDrawer.classList.remove("is-open");
    if (drawerOverlay) drawerOverlay.classList.remove("is-open");
    document.body.style.overflow = "";
  }

  if (navToggle) navToggle.addEventListener("click", openDrawer);
  if (drawerOverlay) drawerOverlay.addEventListener("click", closeDrawer);
  if (closeDrawerBtn) closeDrawerBtn.addEventListener("click", closeDrawer);

  // Close drawer when clicking any link
  var drawerLinks = document.querySelectorAll(".mobile-nav-link");
  drawerLinks.forEach(function(link) {
    link.addEventListener("click", closeDrawer);
  });

  // 3. Smooth scrolling for internal anchor links
  var smoothLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');
  smoothLinks.forEach(function(link) {
    link.addEventListener("click", function(e) {
      var targetId = this.getAttribute("href");
      if (targetId && targetId !== "#") {
        var targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          targetElement.scrollIntoView({ behavior: "smooth", block: "start" });
        }
      }
    });
  });

  // 4. Header scroll styling
  var siteHeader = document.querySelector(".site-header");
  if (siteHeader) {
    window.addEventListener("scroll", function() {
      if (window.scrollY > 40) {
        siteHeader.style.padding = "0.55rem 2rem";
        siteHeader.style.boxShadow = "0 8px 24px rgba(19, 36, 24, 0.08)";
      } else {
        siteHeader.style.padding = "0.75rem 2rem";
        siteHeader.style.boxShadow = "none";
      }
    }, { passive: true });
  }

  // 5. Destination Explorer Tabs
  var destTabs = document.querySelectorAll(".exp-dest-tab");
  var destPanes = document.querySelectorAll(".exp-dest-pane");
  destTabs.forEach(function(tab) {
    tab.addEventListener("click", function() {
      var destIdx = this.getAttribute("data-dest");
      destTabs.forEach(function(t) { t.classList.remove("is-active"); });
      destPanes.forEach(function(p) { p.classList.remove("is-active"); });
      this.classList.add("is-active");
      var target = document.querySelector('.exp-dest-pane[data-dest-pane="' + destIdx + '"]');
      if (target) target.classList.add("is-active");
    });
  });

  // 6. Contact Inquiry Type Switcher
  var inquiryTabs = document.querySelectorAll(".js-inquiry-tab");
  var inquiryPanels = document.querySelectorAll(".js-inquiry-panel");
  var inquiryTypeInput = document.getElementById("inquiryTypeInput");
  inquiryTabs.forEach(function(tab) {
    tab.addEventListener("click", function(e) {
      e.preventDefault();
      var type = this.getAttribute("data-inquiry-type");
      inquiryTabs.forEach(function(t) { t.classList.remove("is-active"); });
      inquiryPanels.forEach(function(p) { p.classList.remove("is-active"); });
      this.classList.add("is-active");
      var activePanel = document.querySelector('.js-inquiry-panel[data-panel="' + type + '"]');
      if (activePanel) activePanel.classList.add("is-active");
      if (inquiryTypeInput) inquiryTypeInput.value = type;
    });
  });
});
