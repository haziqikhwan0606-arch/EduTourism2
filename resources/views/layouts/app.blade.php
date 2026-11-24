<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Olympia EduTourism — Academic Mobility & Field Learning in Malaysia')</title>
  <meta name="description" content="@yield('meta_description', 'Connecting international universities with experiential field study, living cultural heritage, smart cities and sustainable ecosystems across Malaysia.')">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('wp-content/themes/unseen/public/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('wp-content/themes/unseen/public/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('wp-content/themes/unseen/public/favicon/favicon-16x16.png') }}">

  <!-- Core Theme & Modern Clean Stylesheets -->
  <link rel="stylesheet" href="{{ asset('wp-content/themes/unseen/public/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('wp-content/themes/unseen/public/css/programmes.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">

  @stack('styles')
</head>
<body>

  <!-- ======================================================================
       PRELOADER: Featuring "In collaboration with_.png"
       Clean, instantaneous fade, zero 3D overhead
       ====================================================================== -->
  <div class="site-preloader" id="sitePreloader">
    <div class="preloader-card">
      <div class="preloader-image-wrap">
        <img src="{{ asset('In collaboration with_.png') }}" alt="Olympia Education Malaysia in collaboration with partner institutions" class="preloader-image">
      </div>
      <p class="preloader-tagline">Academic Field Learning & Bilateral Mobility</p>
      <div class="preloader-progress-track">
        <div class="preloader-progress-bar"></div>
      </div>
    </div>
  </div>

  <!-- ======================================================================
       GLOBAL HEADER & NAVIGATION
       ====================================================================== -->
  <header class="site-header">
    <div class="header-brand">
      <a href="{{ route('home') }}" title="Olympia EduTourism">
        <img src="{{ asset('Olympia Edutourism_Logo_Long_Color.png') }}" alt="Olympia EduTourism" class="header-logo">
      </a>
    </div>

    <!-- Desktop Navigation -->
    <nav class="header-nav">
      <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'is-active' : '' }}">Home</a>
      <a href="{{ route('experiences') }}" class="nav-link {{ request()->routeIs('experiences') ? 'is-active' : '' }}">Experiences</a>
      <a href="{{ route('programmes') }}" class="nav-link {{ request()->routeIs('programmes') ? 'is-active' : '' }}">Programmes</a>
      <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'is-active' : '' }}">Contact</a>

      <!-- Language Switcher Pill -->
      <div class="lang-switcher-wrap" style="margin-left: 0.5rem;" title="Switch Language / 言語切替">
        <button type="button" class="lang-btn js-lang-btn is-active" data-lang="en">EN</button>
        <button type="button" class="lang-btn js-lang-btn" data-lang="ja">日本語</button>
      </div>
    </nav>

    <!-- Mobile Hamburger Toggle -->
    <button type="button" class="mobile-nav-toggle js-mobile-nav-toggle" aria-label="Toggle navigation menu">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <line x1="3" y1="12" x2="21" y2="12"></line>
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <line x1="3" y1="18" x2="21" y2="18"></line>
      </svg>
    </button>
  </header>

  <!-- Mobile Drawer Menu -->
  <div class="mobile-drawer-overlay js-drawer-overlay"></div>
  <aside class="mobile-drawer js-mobile-drawer">
    <div>
      <div style="display: flex; justify-content: space-between; align-items: center;">
        <span style="font-size: 0.85rem; letter-spacing: 0.1em; text-transform: uppercase; color: #6ee7b7; font-weight: 600;">Menu</span>
        <button type="button" class="js-close-drawer" style="background: none; border: none; color: #ffffff; cursor: pointer; padding: 0.25rem;">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
      </div>

      <nav class="mobile-drawer-links">
        <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'is-active' : '' }}">Home</a>
        <a href="{{ route('experiences') }}" class="mobile-nav-link {{ request()->routeIs('experiences') ? 'is-active' : '' }}">Experiences (7 Areas)</a>
        <a href="{{ route('programmes') }}" class="mobile-nav-link {{ request()->routeIs('programmes') ? 'is-active' : '' }}">Programmes (MFLP 2027)</a>
        <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->routeIs('contact') ? 'is-active' : '' }}">Contact & Advisory</a>
        
        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.1);">
          <span style="display: block; font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: #8da693; margin-bottom: 0.5rem;">Language / 言語</span>
          <div class="lang-switcher-wrap" style="background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.15);">
            <button type="button" class="lang-btn js-lang-btn is-active" data-lang="en" style="color: #ffffff;">EN</button>
            <button type="button" class="lang-btn js-lang-btn" data-lang="ja" style="color: #ffffff;">日本語</button>
          </div>
        </div>
      </nav>
    </div>

    <div>
      <div style="font-size: 0.85rem; color: #8da693; line-height: 1.5; margin-bottom: 1rem;">
        Olympia Education Malaysia<br>
        Enquiries: <a href="mailto:info@olympia.edu.my" style="color: #6ee7b7; text-decoration: none;">info@olympia.edu.my</a><br>
        Partnerships: <a href="mailto:edutourism@olympia-education.com" style="color: #6ee7b7; text-decoration: none;">edutourism@olympia-education.com</a>
      </div>
    </div>
  </aside>

  <!-- ======================================================================
       MAIN CONTENT CONTAINER
       ====================================================================== -->
  <main class="site-main">
    @if(session('success'))
      <div class="flash-alert">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
          <polyline points="22 4 12 14.01 9 11.01"></polyline>
        </svg>
        <span>{{ session('success') }}</span>
      </div>
    @endif

    @yield('content')
  </main>

  <!-- ======================================================================
       GLOBAL FOOTER
       ====================================================================== -->
  <footer class="site-footer">
    <div class="footer-container">
      <div class="footer-grid">
        <!-- Brand & Mission -->
        <div>
          <div class="footer-brand">Olympia EduTourism</div>
          <p class="footer-desc">
            Connecting international universities, academics, and students with transformative field immersion, living cultural heritage, smart cities, and sustainable ecosystems across Malaysia.
          </p>
        </div>

        <!-- Navigation -->
        <div>
          <div class="footer-heading">Navigation</div>
          <ul class="footer-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('experiences') }}">Experiences (7 Areas)</a></li>
            <li><a href="{{ route('programmes') }}">Programmes (MFLP 2027)</a></li>
            <li><a href="{{ route('contact') }}">Contact & Advisory</a></li>
            <li><a href="{{ asset('Osaka_2027_Malaysia_Field_Learning_Brochure (1).pdf') }}" target="_blank">Download Brochure (PDF)</a></li>
          </ul>
        </div>

        <!-- Head Office & Partnerships -->
        <div>
          <div class="footer-heading">Head Office</div>
          <div class="footer-contact">
            Olympia Education Malaysia<br>
            Kuala Lumpur, Malaysia<br><br>
            General Inquiries: <a href="mailto:info@olympia.edu.my">info@olympia.edu.my</a><br>
            Academic Partnerships & MOUs: <a href="mailto:edutourism@olympia-education.com">edutourism@olympia-education.com</a>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <span>&copy; {{ date('Y') }} Olympia Education Malaysia. All Rights Reserved.</span>
        <span>In partnership with Innovative University College (IUC).</span>
      </div>
    </div>
  </footer>

  <!-- Core JavaScript -->
  <script src="{{ asset('js/main.js') }}"></script>
  @stack('scripts')
</body>
</html>
