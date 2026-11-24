@extends('layouts.app')

@section('title', 'Olympia EduTourism — Academic Mobility & Field Learning in Malaysia')

@section('content')

<!-- ==========================================================================
     HERO SECTION
     ========================================================================== -->
<section class="hero-section">
  <div class="hero-container">
    <span class="hero-eyebrow">Academic Mobility &amp; Experiential Learning</span>
    <h1 class="hero-headline">
      The world is your classroom.<br>
      <em>Learning happens everywhere.</em>
    </h1>
    <p class="hero-subtext">
      Connecting international universities, faculties, and students with transformative field immersion, living cultural heritage, smart cities, and sustainable ecosystems across Malaysia.
    </p>
    <div class="hero-actions">
      <a href="{{ route('experiences') }}" class="btn-primary">
        <span>Explore 7 Areas</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <a href="{{ route('programmes') }}" class="btn-secondary">
        <span>Programmes (MFLP 2027)</span>
      </a>
    </div>
  </div>
</section>

<!-- ==========================================================================
     IN COLLABORATION WITH PARTNERSHIP BANNER
     ========================================================================== -->
<section class="collab-section">
  <div class="collab-inner">
    <span style="font-size: 0.8rem; letter-spacing: 0.15em; text-transform: uppercase; color: var(--accent-green); font-weight: 600;">Institutional Collaboration</span>
    <img src="{{ asset('In collaboration with_.png') }}" alt="Olympia Education Malaysia in collaboration with partner universities and institutions" class="collab-banner-img">
    <p style="font-size: 0.95rem; color: var(--text-muted); margin: 0 auto; max-width: 650px;">
      Empowering cross-border mobility in partnership with Innovative University College (IUC) and partner academic institutions across Asia and Japan.
    </p>
  </div>
</section>

<!-- ==========================================================================
     THE 7 CORE AREAS OF EDUCATIONAL TOURISM
     ========================================================================== -->
<section class="areas-section" id="seven-areas">
  <div class="section-container">
    <div class="section-header">
      <span class="section-eyebrow">CURRICULUM IMMERSION</span>
      <h2 class="section-title">Seven Areas of <em>Educational Tourism</em></h2>
      <p class="section-description">
        Comprehensive academic tracks combining hands-on field observation, institutional seminars, community engagement, and regional industry exposure.
      </p>
    </div>

    <div class="areas-grid">
      @foreach($areas as $area)
        <a href="{{ route('experiences') }}#area-{{ $area['id'] }}" class="area-card">
          <div class="area-card-media">
            <img src="{{ $area['image'] }}" alt="{{ $area['title'] }}" class="area-card-img" loading="lazy">
            <span class="area-card-badge">{{ $area['badge'] }}</span>
            <span class="area-card-tag">{{ $area['tag'] }}</span>
          </div>
          <div class="area-card-content">
            <div>
              <h3 class="area-card-title">{{ $area['id'] }}. {{ $area['title'] }}</h3>
              <p class="area-card-desc">{{ $area['description'] }}</p>
            </div>
            <div class="area-card-cta">
              <span>View Details</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</section>

<!-- ==========================================================================
     FLAGSHIP PROGRAMME HIGHLIGHT: MFLP 2027
     ========================================================================== -->
<div class="section-container">
  <div class="flagship-banner">
    <div class="flagship-grid">
      <div>
        <span class="flagship-eyebrow">Featured Flagship Cohort</span>
        <h2 class="flagship-title">Malaysia Field Learning<br><em>Programme 2027</em></h2>
        <p class="flagship-copy">
          Proposed 2027 Pilot for the University of Osaka, Japan. An intensive 6-day academic field immersion connecting Japanese and Malaysian undergraduate cohorts through real-world urban, agritech, and industrial study.
        </p>

        <div class="flagship-highlights">
          <div class="flagship-spec">
            <span class="flagship-spec-label">Duration</span>
            <span class="flagship-spec-val">6 Days, 5 Nights</span>
          </div>
          <div class="flagship-spec">
            <span class="flagship-spec-label">Cohort Size</span>
            <span class="flagship-spec-val">12–16 Undergrads + 4–6 Peers</span>
          </div>
          <div class="flagship-spec">
            <span class="flagship-spec-label">Academic Host</span>
            <span class="flagship-spec-val">IUC Malaysia</span>
          </div>
          <div class="flagship-spec">
            <span class="flagship-spec-label">Key Focus</span>
            <span class="flagship-spec-val">Smart Cities &amp; Halal Economy</span>
          </div>
        </div>

        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
          <a href="{{ route('programmes') }}" class="btn-primary" style="background: #6ee7b7; color: #132418; font-weight: 600; border: none;">
            <span>Explore Full Itinerary</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="{{ asset('Osaka_2027_Malaysia_Field_Learning_Brochure (1).pdf') }}" target="_blank" class="btn-secondary" style="background: rgba(255,255,255,0.1); color: #ffffff; border-color: rgba(255,255,255,0.2);">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
            <span>Download Brochure (PDF)</span>
          </a>
        </div>
      </div>

      <div class="flagship-media">
        <img src="{{ asset('wp-content/uploads/experiences/mflp_hero.jpg') }}" alt="Malaysia Field Learning Programme 2027" loading="lazy">
      </div>
    </div>
  </div>
</div>

<!-- ==========================================================================
     THE 4 LEARNING STAGES
     ========================================================================== -->
<section class="areas-section" style="padding-top: 1rem;">
  <div class="section-container">
    <div class="section-header">
      <span class="section-eyebrow">OUR LEARNING METHODOLOGY</span>
      <h2 class="section-title">The Way We <em>Learn</em></h2>
      <p class="section-description">
        We believe meaningful learning extends beyond the traditional lecture hall. By experiencing the world directly, students connect theoretical knowledge with dynamic real-world reality.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
      @foreach($learningStages as $stage)
        <div style="background: var(--bg-card); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
              <span style="font-size: 1.8rem; font-family: 'Saol Display', serif; font-style: italic; color: var(--accent-green); font-weight: 300;">{{ $stage['number'] }}</span>
              <span style="background: rgba(36, 70, 44, 0.08); color: var(--accent-green); padding: 0.25rem 0.65rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600;">STAGE {{ $stage['number'] }}</span>
            </div>
            <div style="width: 100%; height: 160px; border-radius: var(--radius-sm); overflow: hidden; margin-bottom: 1.25rem;">
              <img src="{{ $stage['image'] }}" alt="{{ $stage['title'] }}" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            </div>
            <h3 style="font-size: 1.25rem; margin: 0 0 0.5rem; font-weight: 600; color: var(--text-dark);">{{ $stage['title'] }}</h3>
            <p style="font-size: 0.95rem; font-style: italic; color: var(--accent-green); margin: 0 0 0.75rem;">{{ $stage['tagline'] }}</p>
            <p style="font-size: 0.9rem; line-height: 1.5; color: var(--text-muted); margin: 0 0 1rem;">{{ $stage['desc'] }}</p>
          </div>
          <div style="display: flex; flex-wrap: wrap; gap: 0.35rem;">
            @foreach($stage['tags'] as $tag)
              <span style="background: rgba(19, 36, 24, 0.04); font-size: 0.75rem; padding: 0.2rem 0.5rem; border-radius: var(--radius-sm); color: var(--text-muted);">{{ $tag }}</span>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ==========================================================================
     INSTITUTIONAL ENQUIRY CTA SECTION
     ========================================================================== -->
<section style="padding: 4rem 2rem 6rem;">
  <div class="section-container" style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 3.5rem 3rem; text-align: center; box-shadow: var(--shadow-soft);">
    <span class="hero-eyebrow">Academic Collaboration &amp; MOUs</span>
    <h2 style="font-size: clamp(2rem, 3.5vw, 2.8rem); margin: 0 0 1rem; color: var(--text-dark); font-weight: 400;">
      Ready to Design a Custom <em>Field Learning Cohort?</em>
    </h2>
    <p style="font-size: 1.15rem; color: var(--text-muted); max-width: 680px; margin: 0 auto 2.5rem; line-height: 1.6;">
      We partner directly with university international relations offices, deans, and academic faculties to tailor custom study immersions and bilateral student mobility programs across Malaysia.
    </p>
    <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
      <a href="{{ route('contact') }}" class="btn-primary">
        <span>Contact Partnerships Team</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <a href="mailto:edutourism@olympia-education.com" class="btn-secondary">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        <span>edutourism@olympia-education.com</span>
      </a>
    </div>
  </div>
</section>

@endsection
