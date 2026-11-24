(function() {
  function initExperiences() {
    // Scroll & Sticky Track Synchronizer for 3D Cards
    function syncStickyTrack() {
      var section = document.getElementById("section-02-areas");
      if (!section) return;

      var rect = section.getBoundingClientRect();
      var scrollable = section.offsetHeight - window.innerHeight;
      if (scrollable <= 0) return;

      var scrolled = -rect.top;
      var ratio = Math.max(0, Math.min(1, scrolled / scrollable));

      var pm = window.ProjectMenu || (window.store && window.store.ProjectMenu);
      if (pm) {
        var maxHeight = pm.projectsHeight || 4200;
        if (scrolled >= 0 && scrolled <= scrollable) {
          pm.scrollPos = ratio * maxHeight;
        }
      }

      // Section 02 Headline Visibility: Visible during Section 02, fades out when moving past to Section 03
      var filtersEl = document.querySelector(".js-project-filters");
      if (filtersEl) {
        if (rect.bottom < window.innerHeight * 0.35) {
          document.body.classList.add("is-past-section-02");
          filtersEl.style.opacity = "0";
          filtersEl.style.visibility = "hidden";
          filtersEl.style.transform = "translateY(-25px)";
        } else {
          document.body.classList.remove("is-past-section-02");
          filtersEl.style.opacity = "1";
          filtersEl.style.visibility = "visible";
          filtersEl.style.transform = "translateY(0)";
        }
      }
    }

    // 2. Destination Explorer Tabs
    var destTabs = document.querySelectorAll(".exp-dest-tab");
    var destPanes = document.querySelectorAll(".exp-dest-pane");
    destTabs.forEach(function(tab) {
      tab.addEventListener("click", function(e) {
        e.preventDefault();
        var idx = this.getAttribute("data-dest");
        destTabs.forEach(function(t) { t.classList.remove("is-active"); });
        destPanes.forEach(function(p) { p.classList.remove("is-active"); });
        this.classList.add("is-active");
        var targetPane = document.querySelector('.exp-dest-pane[data-dest-pane="' + idx + '"]');
        if (targetPane) targetPane.classList.add("is-active");
      });
    });

    // 3. 6-Day Itinerary Tabs
    var itinBtns = document.querySelectorAll(".exp-itin-btn");
    var itinPanels = document.querySelectorAll(".exp-itin-panel");
    itinBtns.forEach(function(btn) {
      btn.addEventListener("click", function(e) {
        e.preventDefault();
        var day = this.getAttribute("data-day");
        itinBtns.forEach(function(b) { b.classList.remove("is-active"); });
        itinPanels.forEach(function(p) { p.classList.remove("is-active"); });
        this.classList.add("is-active");
        var targetPanel = document.querySelector('.exp-itin-panel[data-day-panel="' + day + '"]');
        if (targetPanel) targetPanel.classList.add("is-active");
      });
    });

    // 4. Smooth Anchor Scrolling
    var anchorLinks = document.querySelectorAll(".js-exp-scroll-anchor, .exp-quick-nav__item");
    anchorLinks.forEach(function(link) {
      link.addEventListener("click", function(e) {
        var href = this.getAttribute("href");
        if (href && href.startsWith("#")) {
          e.preventDefault();
          var targetEl = document.querySelector(href);
          if (targetEl) {
            targetEl.scrollIntoView({ behavior: "smooth", block: "start" });
          }
        }
      });
    });

    // 5. Scroll Tracking for Quick Nav & Section Tracking
    var sections = [
      { id: "section-02-areas", el: document.getElementById("section-02-areas") },
      { id: "section-03-approach", el: document.getElementById("section-03-approach") },
      { id: "section-04-destinations", el: document.getElementById("section-04-destinations") },
      { id: "section-05-mflp", el: document.getElementById("section-05-mflp") },
      { id: "section-06-closing", el: document.getElementById("section-06-closing") }
    ];

    var navItems = document.querySelectorAll(".exp-quick-nav__item");

    function onWindowScroll() {
      syncStickyTrack();

      var vh = window.innerHeight;
      var currentSectionId = "";
      for (var i = 0; i < sections.length; i++) {
        if (sections[i].el) {
          var rect = sections[i].el.getBoundingClientRect();
          if (rect.top <= vh * 0.45 && rect.bottom >= vh * 0.2) {
            currentSectionId = sections[i].id;
          }
        }
      }

      if (currentSectionId) {
        navItems.forEach(function(item) {
          if (item.getAttribute("href") === "#" + currentSectionId) {
            item.classList.add("is-active");
          } else {
            item.classList.remove("is-active");
          }
        });
      }
    }

    window.addEventListener("scroll", onWindowScroll, { passive: true });
    onWindowScroll();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initExperiences);
  } else {
    initExperiences();
  }

  if (window.store && window.store.Highway && window.store.Highway.H) {
    window.store.Highway.H.on("NAVIGATE_END", function() {
      setTimeout(initExperiences, 80);
    });
  }
})();
