(function() {
  function initProgrammes() {
    // 1. Purge residual 3D elements if any
    var residualGl = document.getElementById("gl");
    if (residualGl) residualGl.remove();

    var residualFilters = document.querySelector(".js-project-filters");
    if (residualFilters) residualFilters.remove();

    var residualHero = document.getElementById("experiencesHero");
    if (residualHero) residualHero.remove();

    var residualBtn = document.querySelector(".exp-reopen-intro-btn");
    if (residualBtn) residualBtn.remove();

    // 2. Interactive 6-Day Itinerary Controller (Osaka 2027 Field Learning)
    var dayButtons = document.querySelectorAll(".prog-day-btn");
    var dayPanes = document.querySelectorAll(".prog-day-pane");
    var progressBar = document.querySelector(".prog-itin-progress-bar");
    var currentDayNumEl = document.querySelector(".prog-itin-current-num");
    var prevBtn = document.querySelector(".js-prog-prev-day");
    var nextBtn = document.querySelector(".js-prog-next-day");
    var currentDayIndex = 0;
    var totalDays = dayPanes.length || 6;

    function goToDay(index) {
      if (index < 0) index = 0;
      if (index >= totalDays) index = totalDays - 1;
      currentDayIndex = index;

      dayButtons.forEach(function(btn, i) {
        if (i === currentDayIndex) {
          btn.classList.add("is-active");
        } else {
          btn.classList.remove("is-active");
        }
      });

      dayPanes.forEach(function(pane, i) {
        if (i === currentDayIndex) {
          pane.classList.add("is-active");
        } else {
          pane.classList.remove("is-active");
        }
      });

      if (progressBar) {
        var pct = ((currentDayIndex + 1) / totalDays) * 100;
        progressBar.style.width = pct + "%";
      }

      if (currentDayNumEl) {
        currentDayNumEl.textContent = (currentDayIndex + 1 < 10 ? "0" : "") + (currentDayIndex + 1);
      }
    }

    dayButtons.forEach(function(btn, i) {
      btn.addEventListener("click", function(e) {
        e.preventDefault();
        goToDay(i);
      });
    });

    if (prevBtn) {
      prevBtn.addEventListener("click", function(e) {
        e.preventDefault();
        goToDay(currentDayIndex - 1);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener("click", function(e) {
        e.preventDefault();
        goToDay(currentDayIndex + 1);
      });
    }

    // 3. Global Language Switcher (EN / JA) - Zero Language Mixing
    var globalLangButtons = document.querySelectorAll(".js-lang-btn");

    function setLanguage(lang) {
      if (!lang) lang = "en";
      document.documentElement.setAttribute("data-lang", lang);
      document.body.setAttribute("data-lang", lang);

      globalLangButtons.forEach(function(b) {
        if (b.getAttribute("data-lang") === lang) {
          b.classList.add("is-active");
        } else {
          b.classList.remove("is-active");
        }
      });

      try {
        localStorage.setItem("edutourism_lang", lang);
      } catch (err) {}
    }

    globalLangButtons.forEach(function(btn) {
      btn.addEventListener("click", function(e) {
        e.preventDefault();
        var selectedLang = this.getAttribute("data-lang");
        setLanguage(selectedLang);
      });
    });

    // Initialize saved language or default to English
    var savedLang = "en";
    try {
      savedLang = localStorage.getItem("edutourism_lang") || "en";
    } catch (err) {}
    setLanguage(savedLang);

    // 4. FAQ Accordion Toggle
    var faqItems = document.querySelectorAll(".prog-faq-item");
    faqItems.forEach(function(item) {
      var trigger = item.querySelector(".prog-faq-trigger");
      if (trigger) {
        trigger.addEventListener("click", function(e) {
          e.preventDefault();
          var isOpen = item.classList.contains("is-open");
          faqItems.forEach(function(other) { other.classList.remove("is-open"); });
          if (!isOpen) {
            item.classList.add("is-open");
          }
        });
      }
    });

    // 5. Smooth Anchor Scrolling
    var anchorLinks = document.querySelectorAll(".js-prog-scroll-anchor, .exp-quick-nav__item");
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

    // 6. Scroll Tracking for Floating Quick-Nav Pill
    var sections = [
      { id: "section-01-hero", el: document.getElementById("section-01-hero") },
      { id: "section-02-flagship", el: document.getElementById("section-02-flagship") },
      { id: "section-03-itinerary", el: document.getElementById("section-03-itinerary") },
      { id: "section-04-teams", el: document.getElementById("section-04-teams") },
      { id: "section-05-outputs", el: document.getElementById("section-05-outputs") },
      { id: "section-06-collaboration", el: document.getElementById("section-06-collaboration") },
      { id: "section-07-domains", el: document.getElementById("section-07-domains") },
      { id: "section-08-faq", el: document.getElementById("section-08-faq") },
      { id: "section-09-consultation", el: document.getElementById("section-09-consultation") }
    ];

    var navItems = document.querySelectorAll(".exp-quick-nav__item");

    var quickNavEl = document.querySelector(".exp-quick-nav");

    function onScroll() {
      var scrollY = window.pageYOffset || document.documentElement.scrollTop;
      if (quickNavEl) {
        if (scrollY > 280) {
          quickNavEl.classList.add("is-visible");
        } else {
          quickNavEl.classList.remove("is-visible");
        }
      }

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

    // Mobile drawer menu toggle
    var menuToggleBtn = document.querySelector(".js-menu-toggle");
    var mobileMenu = document.querySelector(".js-menu");
    if (menuToggleBtn && mobileMenu) {
      menuToggleBtn.addEventListener("click", function(e) {
        e.preventDefault();
        var isOpen = mobileMenu.style.display === "block";
        if (isOpen) {
          mobileMenu.style.opacity = "0";
          setTimeout(function() {
            mobileMenu.style.display = "none";
          }, 300);
          menuToggleBtn.classList.remove("is-active");
          document.body.classList.remove("has-open-mobile-menu");
        } else {
          mobileMenu.style.display = "block";
          setTimeout(function() {
            mobileMenu.style.opacity = "1";
          }, 10);
          menuToggleBtn.classList.add("is-active");
          document.body.classList.add("has-open-mobile-menu");
        }
      });
    }

    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initProgrammes);
  } else {
    initProgrammes();
  }

  if (window.store && window.store.Highway && window.store.Highway.H) {
    window.store.Highway.H.on("NAVIGATE_END", function() {
      setTimeout(initProgrammes, 60);
    });
  }
})();
