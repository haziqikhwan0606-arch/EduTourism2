@extends('layouts.app')

@section('title', 'Olympia EduTourism — The 7 Areas of Educational Tourism')

@section('content')

<!-- ==========================================================================
     HERO SECTION
     ========================================================================== -->
<section class="hero-section" style="padding-bottom: 3.5rem;">
  <div class="hero-container">
    <span class="hero-eyebrow">CURRICULUM IMMERSION &amp; DISCOVERY</span>
    <h1 class="hero-headline">
      The world is your classroom.<br>
      <em>Seven Areas of Educational Tourism</em>
    </h1>
    <p class="hero-subtext">
      Discover transformative learning experiences shaped by living heritage, urban innovation, agricultural technology, and primary rainforest ecosystems across Malaysia.
    </p>

    <div style="display: flex; gap: 0.5rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
      <a href="#section-02-areas" class="btn-secondary" style="font-size: 0.85rem; padding: 0.5rem 1.25rem;">02 Areas</a>
      <a href="#section-03-approach" class="btn-secondary" style="font-size: 0.85rem; padding: 0.5rem 1.25rem;">03 Approach</a>
      <a href="#section-04-destinations" class="btn-secondary" style="font-size: 0.85rem; padding: 0.5rem 1.25rem;">04 Destinations</a>
      <a href="#section-05-mflp" class="btn-secondary" style="font-size: 0.85rem; padding: 0.5rem 1.25rem;">05 MFLP 2027</a>
      <a href="#section-06-closing" class="btn-secondary" style="font-size: 0.85rem; padding: 0.5rem 1.25rem;">06 Next Steps</a>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECTION 02: THE SEVEN CORE AREAS OF EDUCATIONAL TOURISM
     ========================================================================== -->
<section class="exp-section" id="section-02-areas" style="padding: 4rem 2rem;">
  <div class="exp-container">
    <div class="section-header">
      <span class="section-eyebrow">FIELD LEARNING PORTFOLIO</span>
      <h2 class="section-title">The Seven Core <em>Areas of Experience</em></h2>
      <p class="section-description">
        Each focus area integrates academic coursework with direct observation, industry interaction, and cross-cultural reflection.
      </p>
    </div>

    <div style="display: flex; flex-direction: column; gap: 3.5rem;">
      @foreach($areas as $area)
        <article class="area-detail-row" id="area-{{ $area['id'] }}" style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); overflow: hidden; display: grid; grid-template-columns: 1fr 1.15fr; gap: 2.5rem; box-shadow: var(--shadow-soft); padding: 2rem;">
          <div style="position: relative; border-radius: var(--radius-md); overflow: hidden; min-height: 280px; background: #132418;">
            <img src="{{ $area['image'] }}" alt="{{ $area['title'] }}" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <span style="position: absolute; top: 1rem; left: 1rem; background: rgba(19, 36, 24, 0.85); backdrop-filter: blur(8px); color: #ffffff; padding: 0.35rem 0.9rem; border-radius: var(--radius-full); font-size: 0.8rem; font-weight: 600;">
              {{ $area['badge'] }}
            </span>
          </div>

          <div style="display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <span style="font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent-green); font-weight: 600;">FOCUS AREA {{ $area['id'] }}</span>
              <h3 style="font-size: 1.85rem; font-weight: 600; color: var(--text-dark); margin: 0.35rem 0 0.75rem;">{{ $area['title'] }}</h3>
              <p style="font-size: 1.05rem; font-style: italic; color: var(--accent-green); margin: 0 0 1rem;">{{ $area['lead'] }}</p>
              <p style="font-size: 0.98rem; line-height: 1.6; color: var(--text-muted); margin: 0 0 1.5rem;">{{ $area['description'] }}</p>

              <div style="background: var(--bg-sage); padding: 1.25rem; border-radius: var(--radius-md); margin-bottom: 1.5rem;">
                <span style="display: block; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.08em; font-weight: 600; color: var(--text-dark); margin-bottom: 0.6rem;">Key Learning Pillars &amp; Field Modules</span>
                <ul style="margin: 0; padding-left: 1.2rem; font-size: 0.92rem; color: var(--text-dark); line-height: 1.6;">
                  @foreach($area['pillars'] as $pillar)
                    <li style="margin-bottom: 0.35rem;">{{ $pillar }}</li>
                  @endforeach
                </ul>
              </div>
            </div>

            <div style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap;">
              <a href="{{ route('programmes') }}" class="btn-primary" style="font-size: 0.88rem; padding: 0.65rem 1.4rem;">
                <span>View Matching Programmes</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
              <a href="{{ route('contact') }}" class="btn-secondary" style="font-size: 0.88rem; padding: 0.65rem 1.4rem;">
                <span>Inquire for Faculty</span>
              </a>
            </div>
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>

<!-- Responsive layout media query for rows -->
<style>
@media (max-width: 900px) {
  .area-detail-row { grid-template-columns: 1fr !important; gap: 1.5rem !important; padding: 1.5rem !important; }
}
</style>

<!-- ==========================================================================
     SECTION 03: THE WAY WE LEARN
     ========================================================================== -->
<section class="exp-section exp-learning-section" id="section-03-approach" style="padding: 5rem 2rem;">
  <div class="exp-container">
    <div class="section-header">
      <span class="section-eyebrow">THE WAY WE LEARN</span>
      <h2 class="section-title">Learning Happens <em>Everywhere</em></h2>
      <p class="section-description">
        We believe meaningful learning extends beyond traditional classrooms. By experiencing the world directly, participants connect knowledge with reality and develop a deeper understanding of people, places, and environments.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
      @foreach($learningStages as $stage)
        <div style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 1.75rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: var(--shadow-soft);">
          <div>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
              <span style="font-size: 2rem; font-family: 'Saol Display', serif; font-style: italic; color: var(--accent-green); font-weight: 300;">{{ $stage['number'] }}</span>
              <span style="background: rgba(36, 70, 44, 0.08); color: var(--accent-green); padding: 0.25rem 0.65rem; border-radius: var(--radius-full); font-size: 0.75rem; font-weight: 600;">STAGE {{ $stage['number'] }}</span>
            </div>
            <div style="width: 100%; height: 170px; border-radius: var(--radius-sm); overflow: hidden; margin-bottom: 1.25rem;">
              <img src="{{ $stage['image'] }}" alt="{{ $stage['title'] }}" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            </div>
            <h3 style="font-size: 1.3rem; margin: 0 0 0.4rem; font-weight: 600; color: var(--text-dark);">{{ $stage['title'] }}</h3>
            <p style="font-size: 0.95rem; font-style: italic; color: var(--accent-green); margin: 0 0 0.75rem;">{{ $stage['tagline'] }}</p>
            <p style="font-size: 0.92rem; line-height: 1.55; color: var(--text-muted); margin: 0 0 1.25rem;">{{ $stage['desc'] }}</p>
          </div>
          <div style="display: flex; flex-wrap: wrap; gap: 0.35rem;">
            @foreach($stage['tags'] as $tag)
              <span style="background: var(--bg-sage); font-size: 0.75rem; padding: 0.25rem 0.6rem; border-radius: var(--radius-sm); color: var(--text-dark);">{{ $tag }}</span>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECTION 04: DISCOVER MALAYSIA (DESTINATIONS)
     ========================================================================== -->
<section class="exp-section exp-dest-section" id="section-04-destinations" style="padding: 5rem 2rem;">
  <div class="exp-container">
    <div class="section-header">
      <span class="section-eyebrow">DISCOVER MALAYSIA</span>
      <h2 class="section-title">One Destination. <em>Countless Ways to Learn.</em></h2>
      <p class="section-description">
        From smart cities and colonial heritage ports to primary rainforests and export agricultural corridors, Malaysia is a living open-air laboratory.
      </p>
    </div>

    <!-- Tab Selector -->
    <div class="exp-dest-tabs" style="display: flex; gap: 0.75rem; justify-content: center; flex-wrap: wrap; margin-bottom: 2.5rem;">
      @foreach($destinations as $idx => $dest)
        <button type="button" class="exp-dest-tab {{ $idx === 0 ? 'is-active' : '' }}" data-dest="{{ $idx }}" style="background: #ffffff; border: 1px solid var(--border-subtle); padding: 0.65rem 1.4rem; border-radius: var(--radius-full); font-size: 0.95rem; font-weight: 500; cursor: pointer; color: var(--text-dark); transition: var(--transition-fast);">
          <span style="font-weight: 600; color: var(--accent-green); margin-right: 0.35rem;">0{{ $idx + 1 }}</span>
          <span>{{ $dest['title'] }}</span>
        </button>
      @endforeach
    </div>

    <!-- Destination Panels -->
    <div style="position: relative;">
      @foreach($destinations as $idx => $dest)
        <div class="exp-dest-pane {{ $idx === 0 ? 'is-active' : '' }}" data-dest-pane="{{ $idx }}" style="display: {{ $idx === 0 ? 'grid' : 'none' }}; grid-template-columns: 1fr 1fr; gap: 2.5rem; background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 2.5rem; box-shadow: var(--shadow-soft);">
          <div style="position: relative; border-radius: var(--radius-md); overflow: hidden; min-height: 320px;">
            <img src="{{ $dest['image'] }}" alt="{{ $dest['title'] }}" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 1rem; left: 1rem; background: rgba(19, 36, 24, 0.85); backdrop-filter: blur(8px); color: #ffffff; padding: 0.4rem 0.9rem; border-radius: var(--radius-full); font-size: 0.8rem;">
              {{ $dest['ref'] }}
            </div>
          </div>

          <div style="display: flex; flex-direction: column; justify-content: center;">
            <span style="font-size: 0.8rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--accent-green); font-weight: 600;">{{ $dest['kicker'] }}</span>
            <h3 style="font-size: 2rem; font-weight: 600; margin: 0.35rem 0 0.75rem; color: var(--text-dark);">{{ $dest['title'] }}</h3>
            <p style="font-size: 1.1rem; font-style: italic; color: var(--accent-green); margin: 0 0 1rem;">{{ $dest['lead'] }}</p>
            <p style="font-size: 0.98rem; line-height: 1.6; color: var(--text-muted); margin: 0 0 1.5rem;">{{ $dest['desc'] }}</p>

            <div style="display: flex; flex-direction: column; gap: 0.5rem;">
              @foreach($dest['points'] as $pt)
                <div style="display: flex; align-items: flex-start; gap: 0.5rem; font-size: 0.92rem; color: var(--text-dark);">
                  <span style="color: var(--accent-green); font-weight: bold;">✦</span>
                  <span>{{ $pt }}</span>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<style>
.exp-dest-tab.is-active {
  background: var(--text-dark) !important;
  color: #ffffff !important;
  border-color: var(--text-dark) !important;
}
.exp-dest-tab.is-active span { color: #6ee7b7 !important; }
@media (max-width: 860px) {
  .exp-dest-pane { grid-template-columns: 1fr !important; padding: 1.5rem !important; }
}
</style>

<!-- ==========================================================================
     SECTION 05: FEATURED INTERNATIONAL PROGRAMME (MFLP 2027)
     ========================================================================== -->
<section class="exp-section exp-mflp-section" id="section-05-mflp" style="padding: 5rem 2rem;">
  <div class="exp-container">
    <div class="flagship-banner" style="margin: 0;">
      <div class="flagship-grid">
        <div>
          <span class="flagship-eyebrow">FEATURED INTERNATIONAL PROGRAMME</span>
          <h2 class="flagship-title">Malaysia Field Learning<br><em>Programme 2027</em></h2>
          <div style="font-size: 1.15rem; color: #6ee7b7; margin-bottom: 1rem; font-weight: 500;">
            Proposed 2027 Pilot for the University of Osaka, Japan
          </div>
          <p class="flagship-copy">
            An international field learning experience designed to connect Japanese and Malaysian students through collaborative exploration, industry exposure, cultural understanding, and real-world learning in Malaysia.
          </p>

          <div class="flagship-highlights">
            <div class="flagship-spec">
              <span class="flagship-spec-label">Programme</span>
              <span class="flagship-spec-val">MFLP 2027</span>
            </div>
            <div class="flagship-spec">
              <span class="flagship-spec-label">Duration</span>
              <span class="flagship-spec-val">6 Days, 5 Nights</span>
            </div>
            <div class="flagship-spec">
              <span class="flagship-spec-label">International Cohort</span>
              <span class="flagship-spec-val">12–16 Osaka Undergrads</span>
            </div>
            <div class="flagship-spec">
              <span class="flagship-spec-label">Local Peer Participants</span>
              <span class="flagship-spec-val">4–6 IUC Students</span>
            </div>
          </div>

          <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <a href="{{ route('programmes') }}" class="btn-primary" style="background: #6ee7b7; color: #132418; font-weight: 600; border: none;">
              <span>View 6-Day Itinerary</span>
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
</section>

<!-- ==========================================================================
     SECTION 06: TAKE THE NEXT STEP (PATHWAYS)
     ========================================================================== -->
<section class="exp-section exp-closing-section" id="section-06-closing" style="padding: 5rem 2rem 6rem;">
  <div class="exp-container">
    <div class="section-header">
      <span class="section-eyebrow">TAKE THE NEXT STEP</span>
      <h2 class="section-title">Your Next Journey Could Change the Way You <em>See the World</em></h2>
      <p class="section-description">
        Whether you are a student seeking new perspectives, an institution exploring international collaboration, or an organisation interested in meaningful learning initiatives.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
      <!-- Pathway 1: For Students -->
      <div style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 2.25rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: var(--shadow-soft);">
        <div>
          <span style="font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent-green); font-weight: 600;">01 · INDIVIDUALS &amp; STUDENTS</span>
          <h3 style="font-size: 1.5rem; margin: 0.4rem 0 1rem; color: var(--text-dark);">For Students</h3>
          <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted); margin-bottom: 1.75rem;">
            Explore educational experiences, international mobility opportunities, and cross-cultural learning initiatives designed to broaden your academic and personal perspectives.
          </p>
        </div>
        <a href="{{ route('programmes') }}" class="btn-primary" style="justify-content: center;">
          <span>Explore Programmes</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- Pathway 2: For Educational Institutions -->
      <div style="background: #ffffff; border: 2px solid var(--accent-green); border-radius: var(--radius-lg); padding: 2.25rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: var(--shadow-hover); position: relative;">
        <span style="position: absolute; top: -12px; left: 2rem; background: var(--accent-green); color: #ffffff; font-size: 0.75rem; font-weight: 600; padding: 0.2rem 0.8rem; border-radius: var(--radius-full); text-transform: uppercase; letter-spacing: 0.05em;">Recommended</span>
        <div>
          <span style="font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent-green); font-weight: 600;">02 · UNIVERSITIES &amp; INSTITUTIONS</span>
          <h3 style="font-size: 1.5rem; margin: 0.4rem 0 1rem; color: var(--text-dark);">For Educational Institutions</h3>
          <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted); margin-bottom: 1.75rem;">
            Discuss potential student mobility initiatives, customized field learning visits, credit-bearing study immersions, and bilateral academic faculty programs.
          </p>
        </div>
        <a href="{{ route('contact') }}" class="btn-primary" style="justify-content: center; background: var(--accent-green);">
          <span>Discuss Collaboration</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- Pathway 3: For Industry -->
      <div style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 2.25rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: var(--shadow-soft);">
        <div>
          <span style="font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent-green); font-weight: 600;">03 · INDUSTRY &amp; CORPORATE</span>
          <h3 style="font-size: 1.5rem; margin: 0.4rem 0 1rem; color: var(--text-dark);">For Organisations &amp; Industry</h3>
          <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted); margin-bottom: 1.75rem;">
            Explore opportunities for corporate briefings, professional learning tours, CSR initiatives, and knowledge exchange with emerging international leaders.
          </p>
        </div>
        <a href="{{ route('contact') }}" class="btn-primary" style="justify-content: center;">
          <span>Connect With Us</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
