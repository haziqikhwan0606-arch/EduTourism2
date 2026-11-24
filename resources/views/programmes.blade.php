@extends('layouts.app')

@section('title', 'Olympia EduTourism — Academic Mobility & Field Learning Programmes')

@push('styles')
<link rel="stylesheet" href="{{ asset('wp-content/themes/unseen/public/css/programmes.css') }}">
@endpush

@section('content')
<main id="main-content" class="prog-main-flow">

    <!-- ======================================================================
         SECTION 01: HERO SECTION
         ====================================================================== -->
    <section class="prog-hero-section exp-hero-section" id="section-01-hero">
      <div class="prog-container exp-hero-inner">
        <span class="exp-eyebrow">OLYMPIA EDUTOURISM · ACADEMIC MOBILITY & FIELD LEARNING</span>
        <h1 class="exp-headline t-serif t-italic">Field Learning & Academic Programmes.</h1>
        <p class="exp-subtext" style="max-width: 48rem;">
          Olympia EduTourism curates rigorous, high-impact field study programmes connecting international universities, student cohorts, and researchers with living communities, smart urban infrastructure, and sustainable industries across Malaysia.
        </p>

        <div class="prog-hero-actions" style="display: flex; gap: 1rem; align-items: center; margin-bottom: 2.5rem; flex-wrap: wrap;">
          <a href="#section-02-flagship" class="exp-next-section-btn js-prog-scroll-anchor" data-cursor="hide" style="padding: 0.65rem 1.6rem; font-size: 0.92rem;">
            <span>Explore Osaka 2027 Pilot</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#section-09-consultation" class="exp-next-section-btn js-prog-scroll-anchor" data-cursor="hide" style="background: rgba(255,255,255,0.7); color: #132418; border: 1px solid rgba(19,36,24,0.15); padding: 0.65rem 1.6rem; font-size: 0.92rem;">
            <span>Design a Custom Programme ↗</span>
          </a>
        </div>

        <!-- Official Brochure Watercolor Skyline Banner -->
        <div class="prog-hero-banner-wrap" style="position: relative; border-radius: 24px; overflow: hidden; box-shadow: 0 16px 45px rgba(19,36,24,0.12); margin-top: 1rem;">
          <img src="{{ asset('wp-content/uploads/programmes/mflp_brochure_banner_skyline.jpg') }}" alt="Malaysia Field Learning Programme Skyline" class="prog-hero-banner-img" style="width: 100%; height: auto; display: block;">
          <div class="prog-hero-floating-badge" style="position: absolute; bottom: 1.5rem; left: 1.5rem; background: rgba(19,36,24,0.88); backdrop-filter: blur(8px); color: #ffffff; padding: 0.5rem 1.25rem; border-radius: 999px; font-size: 0.82rem; font-weight: 600; display: flex; align-items: center; gap: 0.5rem;">
            <span style="width: 8px; height: 8px; border-radius: 50%; background: #4ade80;"></span>
            <span>Flagship Delegation · University of Osaka 2027 Pilot Collaboration</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================================================================
         SECTION 02: FLAGSHIP PROGRAMME OVERVIEW (OSAKA 2027 PILOT)
         ====================================================================== -->
    <section class="prog-section" id="section-02-flagship" style="padding-top: 4rem;">
      <div class="prog-container">
        
        <div class="exp-mflp-card" style="background: rgba(255, 255, 255, 0.85); border: 1px solid rgba(19,36,24,0.12); border-radius: 28px; padding: 3rem; box-shadow: 0 16px 45px rgba(19,36,24,0.08); backdrop-filter: blur(12px);">
          <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1.5rem; margin-bottom: 2rem;">
            <div>
              <span class="exp-eyebrow" style="color: #24462c;">FEATURED FLAGSHIP PROGRAMME</span>
              <h2 class="exp-mflp-title t-serif" style="font-size: clamp(2rem, 3.4vw, 2.8rem); line-height: 1.15; color: #132418; margin: 0.4rem 0;">
                Malaysia Field Learning Programme
              </h2>
              <div class="lang-en" style="font-size: 0.95rem; color: #5d7565; margin-top: 0.25rem; font-style: italic;">
                Proposed 2027 Pilot for the University of Osaka
              </div>
              <div class="lang-ja" style="font-size: 1.25rem; font-weight: 600; color: #24462c; margin-top: 0.2rem;">
                マレーシア現地研修プログラム (大阪大学向け 2027 年試行実施案)
              </div>
            </div>

            <div style="display: flex; gap: 1rem; align-items: center; background: rgba(19,36,24,0.05); padding: 0.85rem 1.35rem; border-radius: 16px;">
              <div style="text-align: right;">
                <div style="font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #5d7565;">Academic Consultation</div>
                <div style="font-size: 0.95rem; font-weight: 700; color: #132418;">Prof. Yoshinori Sumimura</div>
                <div class="lang-ja" style="font-size: 0.8rem; color: #384c3e;">住村欣範教授 との意見交換</div>
              </div>
            </div>
          </div>

          <!-- Key Programme Metrics Grid (From Brochure Page 1) -->
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.25rem; margin-bottom: 2.5rem;">
            
            <div style="background: rgba(255,255,255,0.92); border: 1px solid rgba(19,36,24,0.09); border-radius: 16px; padding: 1.35rem;">
              <div style="font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #5d7565; letter-spacing: 0.08em;">Duration & Schedule</div>
              <div style="font-size: 1.45rem; font-weight: 700; color: #132418; margin: 0.35rem 0 0.2rem 0;">6 days, 5 nights</div>
              <div class="lang-ja" style="font-size: 0.95rem; color: #24462c; font-weight: 600;">5 泊 6 日</div>
            </div>

            <div style="background: rgba(255,255,255,0.92); border: 1px solid rgba(19,36,24,0.09); border-radius: 16px; padding: 1.35rem;">
              <div style="font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #5d7565; letter-spacing: 0.08em;">Osaka University Cohort</div>
              <div style="font-size: 1.45rem; font-weight: 700; color: #132418; margin: 0.35rem 0 0.2rem 0;">12–16 Undergraduates</div>
              <div class="lang-ja" style="font-size: 0.95rem; color: #24462c; font-weight: 600;">大阪大学の学部生 (12〜16名)</div>
            </div>

            <div style="background: rgba(255,255,255,0.92); border: 1px solid rgba(19,36,24,0.09); border-radius: 16px; padding: 1.35rem;">
              <div style="font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #5d7565; letter-spacing: 0.08em;">Malaysian Peer Cohort</div>
              <div style="font-size: 1.45rem; font-weight: 700; color: #132418; margin: 0.35rem 0 0.2rem 0;">4–6 IUC Peers</div>
              <div class="lang-ja" style="font-size: 0.95rem; color: #24462c; font-weight: 600;">IUC の学生 (4〜6名)</div>
            </div>

            <div style="background: rgba(255,255,255,0.92); border: 1px solid rgba(19,36,24,0.09); border-radius: 16px; padding: 1.35rem;">
              <div style="font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #5d7565; letter-spacing: 0.08em;">Collaborative Format</div>
              <div style="font-size: 1.45rem; font-weight: 700; color: #132418; margin: 0.35rem 0 0.2rem 0;">Mixed Working Teams</div>
              <div class="lang-ja" style="font-size: 0.95rem; color: #24462c; font-weight: 600;">混成チームで学びます</div>
            </div>

          </div>

          <!-- Official Description & Coordination Quote -->
          <div style="background: rgba(19,36,24,0.04); border-left: 4px solid #132418; border-radius: 0 16px 16px 0; padding: 1.5rem 2rem;">
            <div class="lang-en">
              <p style="font-size: 1.05rem; line-height: 1.6; color: #132418; margin-bottom: 0.75rem;">
                <strong>Olympia Education</strong> would coordinate the programme, with <strong>Innovative University College (IUC)</strong> proposed as the Malaysian academic and campus host. Students from Osaka University and IUC will work in mixed teams across living laboratory environments.
              </p>
            </div>
            <div class="lang-ja">
              <p style="font-size: 1.05rem; line-height: 1.6; color: #132418; margin-bottom: 0.75rem;">
                <strong>オリンピア・エデュケーション</strong>が運営を担当し、<strong>IUC</strong> をマレーシア側の受入校として提案しています。大阪大学と IUC の学生は混成チームで学びます。
              </p>
            </div>
            <div style="margin-top: 1rem; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #5d7565;">
              Prepared by: The Registrar / Olympia Education Malaysia
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======================================================================
         SECTION 03: INTERACTIVE 6-DAY FIELD LEARNING STAGE
         ====================================================================== -->
    <section class="prog-section" id="section-03-itinerary" style="padding-top: 4rem;">
      <div class="prog-container">
        
        <div class="exp-section-header">
          <span class="exp-eyebrow">CURRICULUM & FIELDWORK ITINERARY</span>
          <h2 class="exp-headline t-serif t-italic">Interactive 6-Day Field Learning Syllabus.</h2>
          <p class="exp-subtext">
            Explore the day-by-day curriculum prepared for the University of Osaka 2027 delegation. Use the language controls to view official Japanese curriculum notes and Rōmaji transliterations.
          </p>
        </div>

        <!-- The Interactive Deck Container -->
        <div class="prog-itinerary-deck">
          
          <!-- Top Bar: Day Selector + Language Mode Switcher -->
          <div class="prog-itin-header-bar">
            
            <div class="prog-day-tabs" role="tablist">
              <button class="prog-day-btn is-active" data-day="0" role="tab" aria-selected="true">
                <span>Day 01</span>
                <span class="prog-day-btn__sub">Arrival</span>
              </button>
              <button class="prog-day-btn" data-day="1" role="tab" aria-selected="false">
                <span>Day 02</span>
                <span class="prog-day-btn__sub">IUC · Putrajaya</span>
              </button>
              <button class="prog-day-btn" data-day="2" role="tab" aria-selected="false">
                <span>Day 03</span>
                <span class="prog-day-btn__sub">Petronas Towers</span>
              </button>
              <button class="prog-day-btn" data-day="3" role="tab" aria-selected="false">
                <span>Day 04</span>
                <span class="prog-day-btn__sub">Pineapple & Palm Oil</span>
              </button>
              <button class="prog-day-btn" data-day="4" role="tab" aria-selected="false">
                <span>Day 05</span>
                <span class="prog-day-btn__sub">UCAM Rubber</span>
              </button>
              <button class="prog-day-btn" data-day="5" role="tab" aria-selected="false">
                <span>Day 06</span>
                <span class="prog-day-btn__sub">IUC Capstone</span>
              </button>
            </div>

            <!-- Global language switcher located in top header -->

          </div>

          <!-- The 6 Panes -->
          <div class="prog-itin-stage">

            <!-- PANE 1: DAY 1 -->
            <div class="prog-day-pane is-active" data-pane="0">
              <div class="prog-itin-visual">
                <img src="{{ asset('wp-content/uploads/experiences/mflp_day_01.jpg') }}" alt="Day 1 Arrival in Malaysia" class="prog-itin-visual__img">
                <div class="prog-itin-visual__overlay">
                  <span class="prog-itin-visual__badge">Orientation & Welcome</span>
                  <div>
                    <div class="prog-itin-visual__caption">Kuala Lumpur International Airport & Host Welcome</div>
                    <div class="prog-itin-visual__meta">
                      <span>📍 KLIA / Kuala Lumpur</span>
                      <span>👥 Mixed Cohort Icebreaker</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="prog-itin-details">
                <div>
                  <div class="prog-itin-badge-row">
                    <span class="prog-itin-day-label">Day 1 of 06 · Arrival & Orientation</span>
                    <span class="prog-itin-japanese-tag lang-ja">1 日目 · マレーシア到着</span>
                  </div>
                  <h3 class="prog-itin-title t-serif">Arrival in Malaysia</h3>
                  
                  <div class="prog-itin-en-text" style="font-size: 1.05rem; line-height: 1.55; color: #132418; margin-bottom: 0.75rem;">
                    Olympia Education and IUC welcome students and introduce the field learning programme.
                  </div>

                  <div class="prog-itin-bilingual-box">
                    <div class="prog-itin-jp-text">
                      オリンピアと IUC が学生を迎え、研修の概要を案内します。
                    </div>
                    <div class="prog-itin-romaji-text">
                      Ichinichime · Marēshia tōchaku: Orinpia to IUC ga gakusei o mukae, kenshū no gaiyō o annai shimasu.
                    </div>
                  </div>

                  <div class="prog-itin-timeline">
                    <div class="prog-itin-time-node">
                      <span class="prog-itin-time-tag">Afternoon</span>
                      <div class="prog-itin-time-desc">Arrival at KLIA, immigration reception, luggage transfer, and escort to hotel base in Greater Kuala Lumpur.</div>
                    </div>
                    <div class="prog-itin-time-node">
                      <span class="prog-itin-time-tag">Evening</span>
                      <div class="prog-itin-time-desc">Welcome dinner, safety briefing by Olympia Education, and initial meet-and-greet with Malaysian student peers from IUC.</div>
                    </div>
                  </div>
                </div>

                <div class="prog-itin-output-box">
                  <div class="prog-itin-output-box__title">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>Day 1 Milestones</span>
                  </div>
                  <p class="prog-itin-output-box__desc">Formation of 4 cross-cultural mixed working teams, distribution of field research guides, and collaborative goal setting.</p>
                </div>
              </div>
            </div>

            <!-- PANE 2: DAY 2 -->
            <div class="prog-day-pane" data-pane="1">
              <div class="prog-itin-visual">
                <img src="{{ asset('wp-content/uploads/programmes/mflp_day2_putrajaya.jpg') }}" alt="Day 2 IUC and Putrajaya Waterfront" class="prog-itin-visual__img">
                <div class="prog-itin-visual__overlay">
                  <span class="prog-itin-visual__badge">Campus Orientation & Urban Planning</span>
                  <div>
                    <div class="prog-itin-visual__caption">IUC Campus Orientation & Putrajaya Waterfront</div>
                    <div class="prog-itin-visual__meta">
                      <span>📍 Innovative University College & Putrajaya</span>
                      <span>🏛️ Wetland Ecology & Governance</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="prog-itin-details">
                <div>
                  <div class="prog-itin-badge-row">
                    <span class="prog-itin-day-label">Day 2 of 06 · Campus & Urban Design</span>
                    <span class="prog-itin-japanese-tag lang-ja">2 日目 · IUC・プトラジャヤ</span>
                  </div>
                  <h3 class="prog-itin-title t-serif">IUC and Putrajaya</h3>
                  
                  <div class="prog-itin-en-text" style="font-size: 1.05rem; line-height: 1.55; color: #132418; margin-bottom: 0.75rem;">
                    Begin with campus orientation at IUC. Study urban planning around the Putrajaya waterfront.
                  </div>

                  <div class="prog-itin-bilingual-box">
                    <div class="prog-itin-jp-text">
                      IUC でオリエンテーションを行い、プトラジャヤの水辺で都市計画を学びます。
                    </div>
                    <div class="prog-itin-romaji-text">
                      Futsukame · IUC · Putorajaya: IUC de orientēshon o okonai, Putorajaya no mizube de toshi keikaku o manabimasu.
                    </div>
                  </div>

                  <div class="prog-itin-timeline">
                    <div class="prog-itin-time-node">
                      <span class="prog-itin-time-tag">Morning</span>
                      <div class="prog-itin-time-desc">Academic orientation at Innovative University College (IUC). Campus tour, library induction, and lecture on modern Malaysian governance.</div>
                    </div>
                    <div class="prog-itin-time-node">
                      <span class="prog-itin-time-tag">Afternoon</span>
                      <div class="prog-itin-time-desc">Field study of Putrajaya waterfront master planning: lake ecosystem management, administrative architecture, and pedestrian accessibility.</div>
                    </div>
                  </div>
                </div>

                <div class="prog-itin-output-box">
                  <div class="prog-itin-output-box__title">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>Field Inquiry Focus</span>
                  </div>
                  <p class="prog-itin-output-box__desc">Mixed teams investigate how master-planned wetlands balance urban development with ecological conservation.</p>
                </div>
              </div>
            </div>

            <!-- PANE 3: DAY 3 -->
            <div class="prog-day-pane" data-pane="2">
              <div class="prog-itin-visual">
                <img src="{{ asset('wp-content/uploads/programmes/mflp_day3_petronas.jpg') }}" alt="Day 3 PETRONAS Twin Towers" class="prog-itin-visual__img">
                <div class="prog-itin-visual__overlay">
                  <span class="prog-itin-visual__badge">Megastructure & Engineering</span>
                  <div>
                    <div class="prog-itin-visual__caption">PETRONAS Twin Towers & High-Density Public Space</div>
                    <div class="prog-itin-visual__meta">
                      <span>📍 Kuala Lumpur City Centre (KLCC)</span>
                      <span>🏗️ Skybridge Structural Dynamics</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="prog-itin-details">
                <div>
                  <div class="prog-itin-badge-row">
                    <span class="prog-itin-day-label">Day 3 of 06 · Structural Engineering</span>
                    <span class="prog-itin-japanese-tag lang-ja">3 日目 · ペトロナス・ツインタワー</span>
                  </div>
                  <h3 class="prog-itin-title t-serif">PETRONAS Twin Towers</h3>
                  
                  <div class="prog-itin-en-text" style="font-size: 1.05rem; line-height: 1.55; color: #132418; margin-bottom: 0.75rem;">
                    Study the engineering of the Skybridge and the public space around the towers.
                  </div>

                  <div class="prog-itin-bilingual-box">
                    <div class="prog-itin-jp-text">
                      スカイブリッジの構造と公共空間を学びます。
                    </div>
                    <div class="prog-itin-romaji-text">
                      Mikkame · Petoronasu Tsuin Tawā: Sukaiburijji no kōzō to kōkyō kūkan o manabimasu.
                    </div>
                  </div>

                  <div class="prog-itin-timeline">
                    <div class="prog-itin-time-node">
                      <span class="prog-itin-time-tag">Morning</span>
                      <div class="prog-itin-time-desc">Skybridge technical briefing: dual-level floating bridge engineering, ball-and-socket wind sway compensation, and deep foundation engineering.</div>
                    </div>
                    <div class="prog-itin-time-node">
                      <span class="prog-itin-time-tag">Afternoon</span>
                      <div class="prog-itin-time-desc">KLCC 50-acre public park investigation: human-centric urban space, transit connectivity, water features, and sustainable cooling design.</div>
                    </div>
                  </div>
                </div>

                <div class="prog-itin-output-box">
                  <div class="prog-itin-output-box__title">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span><span class="lang-en">Fieldwork Output Commences</span><span class="lang-ja">研修の成果物作成開始</span></span>
                  </div>
                  <p class="prog-itin-output-box__desc">Each mixed team begins drafting their 1-page Field Brief, formulating one actionable urban planning recommendation.</p>
                </div>
              </div>
            </div>

            <!-- PANE 4: DAY 4 -->
            <div class="prog-day-pane" data-pane="3">
              <div class="prog-itin-visual">
                <img src="{{ asset('wp-content/uploads/programmes/mflp_day4_pineapple.jpg') }}" alt="Day 4 Sky Ladder Pineapple Farm & PKPKM Oil Palm" class="prog-itin-visual__img">
                <div class="prog-itin-visual__overlay">
                  <span class="prog-itin-visual__badge">Agro-Tourism & Commodity Agronomy</span>
                  <div>
                    <div class="prog-itin-visual__caption">Sky Ladder Pineapple Farm (Lukut) & PKPKM Smallholding</div>
                    <div class="prog-itin-visual__meta">
                      <span>📍 Lukut, Negeri Sembilan</span>
                      <span>🍍 Agro-Tourism & Certified Palm Oil</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="prog-itin-details">
                <div>
                  <div class="prog-itin-badge-row">
                    <span class="prog-itin-day-label">Day 4 of 06 · Agritech & Smallholders</span>
                    <span class="prog-itin-japanese-tag lang-ja">4 日目 · スカイラダー・パイナップル農園</span>
                  </div>
                  <h3 class="prog-itin-title t-serif">Sky Ladder Pineapple Farm, Lukut</h3>
                  
                  <div class="prog-itin-en-text" style="font-size: 1.05rem; line-height: 1.55; color: #132418; margin-bottom: 0.75rem;">
                    Study pineapple cultivation and farm tourism in the morning. Visit an oil palm smallholding with PKPKM in the afternoon.
                  </div>

                  <div class="prog-itin-bilingual-box">
                    <div class="prog-itin-jp-text">
                      午前はパイナップル栽培と農園観光を学びます。午後は PKPKM と小規模アブラヤシ農園へ。
                    </div>
                    <div class="prog-itin-romaji-text">
                      Yokkame · Sukai Radā Painappuru Nōen (Rukutto): Gozen wa painappuru saibai to nōen kankō o manabimasu. Gogo wa PKPKM to shōkibo aburayashi nōen e.
                    </div>
                  </div>

                  <div class="prog-itin-timeline">
                    <div class="prog-itin-time-node">
                      <span class="prog-itin-time-tag">Morning</span>
                      <div class="prog-itin-time-desc">Sky Ladder Farm in Lukut: cultivation cycles, value-added agro-products, agro-tourism operational models, and direct farmer-to-consumer sales.</div>
                    </div>
                    <div class="prog-itin-time-node">
                      <span class="prog-itin-time-tag">Afternoon</span>
                      <div class="prog-itin-time-desc">Visit to certified smallholder oil palm farm in partnership with PKPKM (National Association of Smallholders): sustainable harvesting, yield optimization, and livelihood support.</div>
                    </div>
                  </div>
                </div>

                <div class="prog-itin-output-box">
                  <div class="prog-itin-output-box__title">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>Comparative Agritech Inquiry</span>
                  </div>
                  <p class="prog-itin-output-box__desc">Comparing cooperative structures between Japan (JA) and Malaysia (PKPKM) in balancing export crops with environmental sustainability.</p>
                </div>
              </div>
            </div>

            <!-- PANE 5: DAY 5 -->
            <div class="prog-day-pane" data-pane="4">
              <div class="prog-itin-visual">
                <img src="{{ asset('wp-content/uploads/programmes/mflp_day5_rubber.jpg') }}" alt="Day 5 UCAM Rubber Tapping" class="prog-itin-visual__img">
                <div class="prog-itin-visual__overlay">
                  <span class="prog-itin-visual__badge">Commodity Heritage & Agriscience</span>
                  <div>
                    <div class="prog-itin-visual__caption">University College of Agrotechnology Malaysia (UCAM)</div>
                    <div class="prog-itin-visual__meta">
                      <span>📍 Alor Gajah, Melaka</span>
                      <span>🌳 Live Rubber Tapping & Agritech Transition</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="prog-itin-details">
                <div>
                  <div class="prog-itin-badge-row">
                    <span class="prog-itin-day-label">Day 5 of 06 · Commodity History</span>
                    <span class="prog-itin-japanese-tag lang-ja">5 日目 · UCAM（アロー・ガジャ）</span>
                  </div>
                  <h3 class="prog-itin-title t-serif">UCAM, Alor Gajah</h3>
                  
                  <div class="prog-itin-en-text" style="font-size: 1.05rem; line-height: 1.55; color: #132418; margin-bottom: 0.75rem;">
                    See a rubber tapping demonstration and learn about the history and traditions of natural rubber cultivation.
                  </div>

                  <div class="prog-itin-bilingual-box">
                    <div class="prog-itin-jp-text">
                      ゴムの樹液採取の実演を見学し、天然ゴム栽培の歴史と伝統を学びます。
                    </div>
                    <div class="prog-itin-romaji-text">
                      Itsukame · UCAM (Arō Gaja): Gomu no jueki saishu no jitsuen o kengaku shi, tennen gomu saibai no rekishi to dentō o manabimasu.
                    </div>
                  </div>

                  <div class="prog-itin-timeline">
                    <div class="prog-itin-time-node">
                      <span class="prog-itin-time-tag">Morning</span>
                      <div class="prog-itin-time-desc">Live rubber tapping demonstration at UCAM plantation: bark excision angles, latex cup collection, chemical coagulation, and processing.</div>
                    </div>
                    <div class="prog-itin-time-node">
                      <span class="prog-itin-time-tag">Afternoon</span>
                      <div class="prog-itin-time-desc">Seminar on the historical economic role of natural rubber in British Malaya and the current technological transition to automated tapping and clonal breeding.</div>
                    </div>
                  </div>
                </div>

                <div class="prog-itin-output-box">
                  <div class="prog-itin-output-box__title">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>Finalizing Deliverables</span>
                  </div>
                  <p class="prog-itin-output-box__desc">Teams finalize their slides, rehearse their 15-minute presentations, and print their 1-page Field Briefs for Day 6 evaluation.</p>
                </div>
              </div>
            </div>

            <!-- PANE 6: DAY 6 -->
            <div class="prog-day-pane" data-pane="5">
              <div class="prog-itin-visual">
                <img src="{{ asset('wp-content/uploads/experiences/mflp_day_06.jpg') }}" alt="Day 6 Presentations at IUC" class="prog-itin-visual__img">
                <div class="prog-itin-visual__overlay">
                  <span class="prog-itin-visual__badge">Capstone Evaluation & Departure</span>
                  <div>
                    <div class="prog-itin-visual__caption">Final Team Presentations at IUC & Academic Evaluation</div>
                    <div class="prog-itin-visual__meta">
                      <span>📍 IUC Main Campus Auditorium</span>
                      <span>🎓 Joint Certificate Award & Departure</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="prog-itin-details">
                <div>
                  <div class="prog-itin-badge-row">
                    <span class="prog-itin-day-label">Day 6 of 06 · Capstone Presentations</span>
                    <span class="prog-itin-japanese-tag lang-ja">6 日目 · IUC で成果発表</span>
                  </div>
                  <h3 class="prog-itin-title t-serif">Presentations at IUC</h3>
                  
                  <div class="prog-itin-en-text" style="font-size: 1.05rem; line-height: 1.55; color: #132418; margin-bottom: 0.75rem;">
                    Share team findings, receive feedback and depart Malaysia.
                  </div>

                  <div class="prog-itin-bilingual-box">
                    <div class="prog-itin-jp-text">
                      IUC で成果を発表し、講評を受けます。その後、マレーシアを出発します。
                    </div>
                    <div class="prog-itin-romaji-text">
                      Muikame · IUC de seika happyō: IUC de seika o happyō shi, kōhyō o ukemasu. Sono ato, Marēshia o shuppatsu shimasu.
                    </div>
                  </div>

                  <div class="prog-itin-timeline">
                    <div class="prog-itin-time-node">
                      <span class="prog-itin-time-tag">Morning</span>
                      <div class="prog-itin-time-desc">Official Capstone Presentation Session in the IUC Auditorium. 4 mixed teams present their field research briefs to an academic panel of IUC and Osaka faculty.</div>
                    </div>
                    <div class="prog-itin-time-node">
                      <span class="prog-itin-time-tag">Afternoon</span>
                      <div class="prog-itin-time-desc">Faculty feedback, award of official Completion Certificates, emotional farewell with IUC peer buddies, and transfer to KLIA for return flight.</div>
                    </div>
                  </div>
                </div>

                <div class="prog-itin-output-box">
                  <div class="prog-itin-output-box__title">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>Final Capstone Outcome</span>
                  </div>
                  <p class="prog-itin-output-box__desc">Submission of 4 completed 1-page Field Briefs + graduation certificates recognized towards academic field study credits.</p>
                </div>
              </div>
            </div>

          </div>

          <!-- Bottom Controls Bar -->
          <div class="prog-itin-controls-bar">
            <div class="prog-itin-progress">
              <span>Day <strong class="prog-itin-current-num">01</strong> of 06</span>
              <div class="prog-itin-progress-bar-wrap">
                <div class="prog-itin-progress-bar"></div>
              </div>
            </div>

            <div class="prog-itin-nav-arrows">
              <button class="prog-itin-arrow-btn js-prog-prev-day" aria-label="Previous day" data-cursor="hide">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
              </button>
              <button class="prog-itin-arrow-btn js-prog-next-day" aria-label="Next day" data-cursor="hide">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </button>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======================================================================
         SECTION 04: MIXED TEAMS COHORT ARCHITECTURE
         ====================================================================== -->
    <section class="prog-section" id="section-04-teams" style="padding-top: 4rem;">
      <div class="prog-container">
        
        <div class="exp-section-header">
          <span class="exp-eyebrow"><span class="lang-en">COHORT ARCHITECTURE</span><span class="lang-ja">混成チームの編成</span></span>
          <h2 class="exp-headline t-serif t-italic">4 Interdisciplinary Mixed Working Teams.</h2>
          <p class="exp-subtext">
            Students from the University of Osaka and Innovative University College (IUC) are grouped into 4 collaborative field teams, fostering authentic cross-border collaboration and peer problem-solving.
          </p>
        </div>

        <div class="prog-teams-grid">
          
          <!-- Team 1 -->
          <div class="prog-team-card">
            <div>
              <span class="prog-team-card__badge">Team Alpha · Urban Systems</span>
              <h3 class="prog-team-card__title">Putrajaya Waterfront & Sustainable Planning</h3>
              <div class="prog-team-card__composition">
                <span>🇯🇵 3–4 Osaka Undergraduates</span>
                <span>🇲🇾 1–2 IUC Peer Mentors</span>
                <span>🏛️ Putrajaya Master Plan & Wetlands</span>
              </div>
              <p class="prog-team-card__desc">
                Investigating modern administrative capital design, natural lake ecology, and urban wetland water management.
              </p>
            </div>
          </div>

          <!-- Team 2 -->
          <div class="prog-team-card">
            <div>
              <span class="prog-team-card__badge">Team Beta · Engineering</span>
              <h3 class="prog-team-card__title">PETRONAS Towers & Public Realm Design</h3>
              <div class="prog-team-card__composition">
                <span>🇯🇵 3–4 Osaka Undergraduates</span>
                <span>🇲🇾 1–2 IUC Peer Mentors</span>
                <span>🏗️ Skybridge Dynamics & KLCC Park</span>
              </div>
              <p class="prog-team-card__desc">
                Examining mega-tower structural mechanics, wind damper systems, and civic public space integration.
              </p>
            </div>
          </div>

          <!-- Team 3 -->
          <div class="prog-team-card">
            <div>
              <span class="prog-team-card__badge">Team Gamma · Agritech</span>
              <h3 class="prog-team-card__title">Pineapple Agro-Tourism & Circular Economy</h3>
              <div class="prog-team-card__composition">
                <span>🇯🇵 3–4 Osaka Undergraduates</span>
                <span>🇲🇾 1–2 IUC Peer Mentors</span>
                <span>🍍 Sky Ladder Lukut & PKPKM Cooperative</span>
              </div>
              <p class="prog-team-card__desc">
                Analyzing tropical fruit agronomy, experiential farm tourism, and smallholder oil palm sustainable livelihoods.
              </p>
            </div>
          </div>

          <!-- Team 4 -->
          <div class="prog-team-card">
            <div>
              <span class="prog-team-card__badge">Team Delta · Commodities</span>
              <h3 class="prog-team-card__title">UCAM Natural Rubber & Agrarian Heritage</h3>
              <div class="prog-team-card__composition">
                <span>🇯🇵 3–4 Osaka Undergraduates</span>
                <span>🇲🇾 1–2 IUC Peer Mentors</span>
                <span>🌳 UCAM Live Tapping Demonstration</span>
              </div>
              <p class="prog-team-card__desc">
                Studying commodity crop history, natural rubber polymer extraction, and technological modernization in plantation agriculture.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======================================================================
         SECTION 05: FIELDWORK OUTPUTS (KENSHU NO SEIKABUTSU)
         ====================================================================== -->
    <section class="prog-section" id="section-05-outputs" style="padding-top: 4rem;">
      <div class="prog-container">
        
        <div class="exp-section-header">
          <span class="exp-eyebrow"><span class="lang-en">ACADEMIC DELIVERABLES</span><span class="lang-ja">研修の成果物</span></span>
          <h2 class="exp-headline t-serif t-italic">Tangible Field Research Deliverables.</h2>
          <p class="exp-subtext">
            Each mixed team prepares structured academic outputs directly presented to and evaluated by faculty mentors at Innovative University College.
          </p>
        </div>

        <div class="prog-outputs-grid">
          
          <!-- Deliverable 1 -->
          <div class="prog-output-card">
            <div>
              <span class="prog-output-card__badge">DELIVERABLE 01</span>
              <h3 class="prog-output-card__title">One-Page Field Brief</h3>
              <div class="lang-ja" style="font-size: 0.95rem; color: #384c3e; margin-top: 0.5rem;">各チームは 1 ページの現地調査報告書をまとめます。</div>
              <p style="font-size: 0.94rem; line-height: 1.6; color: #384c3e;">
                A concise, publication-standard field brief synthesizing qualitative observations, empirical data, and comparative insights between Japanese and Malaysian practices.
              </p>
              <ul class="prog-output-card__list">
                <li>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                  <span>Field observation evidence from Putrajaya, KLCC, Lukut or UCAM.</span>
                </li>
                <li>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                  <span>Comparative analysis bridging Japanese theory with Malaysian reality.</span>
                </li>
                <li>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                  <span>One concrete, actionable policy or technological recommendation.</span>
                </li>
              </ul>
            </div>
            <div style="background: rgba(19,36,24,0.05); padding: 0.85rem 1rem; border-radius: 12px; font-size: 0.82rem; color: #24462c;">
              <strong>Format:</strong> Structured Executive Brief (Kaku chīmu wa ichi pēji no genchi chōsa hōkokusho)
            </div>
          </div>

          <!-- Deliverable 2 -->
          <div class="prog-output-card">
            <div>
              <span class="prog-output-card__badge">DELIVERABLE 02</span>
              <h3 class="prog-output-card__title">Capstone Faculty Presentation</h3>
              <div class="lang-ja" style="font-size: 0.95rem; color: #384c3e; margin-top: 0.5rem;">IUC で改善案を 1 つ発表します。</div>
              <p style="font-size: 0.94rem; line-height: 1.6; color: #384c3e;">
                A 15-minute bilingual presentation delivered by mixed student teams to a joint faculty panel at Innovative University College, defending their strategic recommendation.
              </p>
              <ul class="prog-output-card__list">
                <li>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                  <span>Co-presented by Osaka undergraduates and IUC peer mentors.</span>
                </li>
                <li>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                  <span>Q&A session with academic faculty on feasibility and sustainability.</span>
                </li>
                <li>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                  <span>Formal evaluation and issuance of verified Completion Certificates.</span>
                </li>
              </ul>
            </div>
            <div style="background: rgba(19,36,24,0.05); padding: 0.85rem 1rem; border-radius: 12px; font-size: 0.82rem; color: #24462c;">
              <strong>Venue:</strong> IUC Campus Auditorium · Evaluated by Joint Academic Jury
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======================================================================
         SECTION 06: BILATERAL COLLABORATION FRAMEWORK
         ====================================================================== -->
    <section class="prog-section" id="section-06-collaboration" style="padding-top: 4rem;">
      <div class="prog-container">
        
        <div class="exp-section-header">
          <span class="exp-eyebrow"><span class="lang-en">INSTITUTIONAL PARTNERSHIP</span><span class="lang-ja">連携体制</span></span>
          <h2 class="exp-headline t-serif t-italic">Three-Pillar Bilateral Governance.</h2>
          <p class="exp-subtext">
            A cohesive collaboration connecting programme coordination, Malaysian university hosting, and international university academic oversight.
          </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.75rem;">
          
          <div style="background: rgba(255,255,255,0.78); border: 1px solid rgba(19,36,24,0.1); border-radius: 20px; padding: 2rem;">
            <div style="font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #5d7565; letter-spacing: 0.08em; margin-bottom: 0.5rem;">Programme Coordination</div>
            <h3 style="font-size: 1.35rem; font-weight: 700; color: #132418; margin-bottom: 0.75rem;">Olympia Education Malaysia</h3>
            <p style="font-size: 0.9rem; line-height: 1.55; color: #384c3e;">
              Acts as the central programme director and registrar. Oversees comprehensive logistics, safety protocols, transport, insurance, industry liaisons, and cultural protocol.
            </p>
          </div>

          <div style="background: rgba(255,255,255,0.78); border: 1px solid rgba(19,36,24,0.1); border-radius: 20px; padding: 2rem;">
            <div style="font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #5d7565; letter-spacing: 0.08em; margin-bottom: 0.5rem;">Malaysian Academic Host</div>
            <h3 style="font-size: 1.35rem; font-weight: 700; color: #132418; margin-bottom: 0.75rem;">Innovative University College (IUC)</h3>
            <p style="font-size: 0.9rem; line-height: 1.55; color: #384c3e;">
              Serves as the official campus and academic host in Malaysia. Provides lecture facilities, orientation, Malaysian peer mentors, faculty evaluation, and joint academic certification.
            </p>
          </div>

          <div style="background: rgba(255,255,255,0.78); border: 1px solid rgba(19,36,24,0.1); border-radius: 20px; padding: 2rem;">
            <div style="font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #5d7565; letter-spacing: 0.08em; margin-bottom: 0.5rem;">Academic Partner</div>
            <h3 style="font-size: 1.35rem; font-weight: 700; color: #132418; margin-bottom: 0.75rem;">University of Osaka (Proposed 2027)</h3>
            <p style="font-size: 0.9rem; line-height: 1.55; color: #384c3e;">
              <span class="lang-en">Academic consultation led by <strong>Prof. Yoshinori Sumimura</strong> focusing on curriculum alignment, student recruitment, credit transfer, and official university liaison.</span><span class="lang-ja">カリキュラム適合、学生募集、単位認定、および大学間連携を中心とした<strong>住村欣範教授</strong>との学術相談。</span>
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- ======================================================================
         SECTION 07: CUSTOM FIELD MOBILITY DOMAINS (FOR OTHER INSTITUTIONS)
         ====================================================================== -->
    <section class="prog-section" id="section-07-domains" style="padding-top: 4rem;">
      <div class="prog-container">
        
        <div class="exp-section-header">
          <span class="exp-eyebrow">CUSTOM MOBILITY PROGRAMMES</span>
          <h2 class="exp-headline t-serif t-italic">Designed for Global Learning Communities.</h2>
          <p class="exp-subtext">
            Beyond our Osaka University pilot, Olympia EduTourism tailors bespoke 5-day to 14-day field learning delegations for universities, polytechnics, and schools worldwide across 5 core domains.
          </p>
        </div>

        <div class="prog-grid-5">
          
          <div class="exp-stage-card">
            <div class="exp-stage-card__number">01</div>
            <div class="exp-stage-card__image-wrap">
              <img src="{{ asset('wp-content/uploads/experiences/dest_01_cities.jpg') }}" alt="Urban Governance" class="exp-stage-card__img">
              <div class="exp-stage-card__badge">DOMAIN 01</div>
            </div>
            <div class="exp-stage-card__content">
              <h3 class="exp-stage-card__title">Urban Governance & Engineering</h3>
              <p class="exp-stage-card__tagline">Smart cities & structural systems.</p>
              <p class="exp-stage-card__desc">Putrajaya waterfront planning, LRT/MRT transit engineering, and Kuala Lumpur high-density infrastructure.</p>
            </div>
          </div>

          <div class="exp-stage-card">
            <div class="exp-stage-card__number">02</div>
            <div class="exp-stage-card__image-wrap">
              <img src="{{ asset('wp-content/uploads/experiences/dest_04_agriculture.jpg') }}" alt="Agritech & Commodities" class="exp-stage-card__img">
              <div class="exp-stage-card__badge">DOMAIN 02</div>
            </div>
            <div class="exp-stage-card__content">
              <h3 class="exp-stage-card__title">Sustainable Agriculture & Agritech</h3>
              <p class="exp-stage-card__tagline">Food security & plantation crops.</p>
              <p class="exp-stage-card__desc">Pineapple agronomy, sustainable smallholder oil palm with PKPKM, and natural rubber research with UCAM.</p>
            </div>
          </div>

          <div class="exp-stage-card">
            <div class="exp-stage-card__number">03</div>
            <div class="exp-stage-card__image-wrap">
              <img src="{{ asset('wp-content/uploads/experiences/dest_02_heritage.jpg') }}" alt="Living Heritage" class="exp-stage-card__img">
              <div class="exp-stage-card__badge">DOMAIN 03</div>
            </div>
            <div class="exp-stage-card__content">
              <h3 class="exp-stage-card__title">Living Heritage & Co-Creation</h3>
              <p class="exp-stage-card__tagline">Multicultural communities & arts.</p>
              <p class="exp-stage-card__desc">Historical conservation in Melaka and Penang, indigenous craftsmanship, and communal storytelling.</p>
            </div>
          </div>

          <div class="exp-stage-card">
            <div class="exp-stage-card__number">04</div>
            <div class="exp-stage-card__image-wrap">
              <img src="{{ asset('wp-content/uploads/experiences/dest_03_nature.jpg') }}" alt="Biodiversity" class="exp-stage-card__img">
              <div class="exp-stage-card__badge">DOMAIN 04</div>
            </div>
            <div class="exp-stage-card__content">
              <h3 class="exp-stage-card__title">Ecology & Conservation</h3>
              <p class="exp-stage-card__tagline">Rainforest & marine ecosystems.</p>
              <p class="exp-stage-card__desc">Tropical biodiversity surveys, mangrove wetland protection, and coral reef conservation science.</p>
            </div>
          </div>

          <div class="exp-stage-card">
            <div class="exp-stage-card__number">05</div>
            <div class="exp-stage-card__image-wrap">
              <img src="{{ asset('wp-content/uploads/experiences/05_industry_learning.jpg') }}" alt="Global Business" class="exp-stage-card__img">
              <div class="exp-stage-card__badge">DOMAIN 05</div>
            </div>
            <div class="exp-stage-card__content">
              <h3 class="exp-stage-card__title">ASEAN Business & Halal Economy</h3>
              <p class="exp-stage-card__tagline">Cross-border enterprise & ESG.</p>
              <p class="exp-stage-card__desc">Islamic finance governance, multinational headquarters briefings, and trade corridor dynamics.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======================================================================
         SECTION 08: FAQ ACCORDION
         ====================================================================== -->
    <section class="prog-section" id="section-08-faq" style="padding-top: 4rem;">
      <div class="prog-container" style="max-width: 900px;">
        
        <div class="exp-section-header">
          <span class="exp-eyebrow">COMMON QUESTIONS</span>
          <h2 class="exp-headline t-serif t-italic">Things You May Want to Know.</h2>
          <p class="exp-subtext">Everything you need to know about academic hosting, safety, language, and curriculum alignment.</p>
        </div>

        <div class="prog-faq-list">
          
          <div class="prog-faq-item">
            <button class="prog-faq-trigger" aria-expanded="false">
              <span>What is the role of Innovative University College (IUC) in the programme?</span>
              <svg class="prog-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="prog-faq-content">
              <div class="prog-faq-body">
                IUC acts as the official Malaysian academic and campus host. They provide lecture rooms, library access, faculty mentorship, recruit the 4–6 Malaysian peer student cohort, co-evaluate the Day 6 presentations, and co-issue the official academic Certificates of Completion.
              </div>
            </div>
          </div>

          <div class="prog-faq-item">
            <button class="prog-faq-trigger" aria-expanded="false">
              <span>What language is used for lectures, field study, and presentations?</span>
              <svg class="prog-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="prog-faq-content">
              <div class="prog-faq-body">
                The primary medium of instruction and presentation is English. In mixed working teams, IUC student peers facilitate language bridging and cultural translation, ensuring that Osaka undergraduates feel fully confident and supported during interviews and site investigations.
              </div>
            </div>
          </div>

          <div class="prog-faq-item">
            <button class="prog-faq-trigger" aria-expanded="false">
              <span>Can the 6-day itinerary be tailored for other international faculties?</span>
              <svg class="prog-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="prog-faq-content">
              <div class="prog-faq-body">
                Yes. While the Osaka 2027 pilot focuses on urban planning, engineering, and agritech commodity ecosystems, Olympia EduTourism customizes academic learning objectives, cohort sizes (from 10 to 60 students), and durations (5 to 14 days) to fit your university's specific syllabus and credit requirements.
              </div>
            </div>
          </div>

          <div class="prog-faq-item">
            <button class="prog-faq-trigger" aria-expanded="false">
              <span>How are student safety, medical coverage, and transport managed?</span>
              <svg class="prog-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="prog-faq-content">
              <div class="prog-faq-body">
                Olympia Education Malaysia oversees comprehensive risk management. We provide dedicated private tour coaches with licensed drivers, 24/7 bilingual on-ground chaperones, comprehensive group travel insurance, vetted twin-share hotel accommodation, and emergency medical protocols.
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======================================================================
         SECTION 09: CONSULTATION & PROPOSAL INQUIRY
         ====================================================================== -->
    <section class="prog-section" id="section-09-consultation" style="padding-top: 4rem; padding-bottom: 6rem;">
      <div class="prog-container" style="max-width: 960px;">
        
        <div style="background: rgba(255, 255, 255, 0.88); border: 1px solid rgba(19, 36, 24, 0.12); border-radius: 28px; padding: 3rem 2.5rem; box-shadow: 0 16px 45px rgba(19, 36, 24, 0.08); backdrop-filter: blur(16px);">
          <div style="text-align: center; max-width: 650px; margin: 0 auto 2.5rem auto;">
            <span class="exp-eyebrow">ACADEMIC CONSULTATION · 2026/2027</span>
            <h2 class="exp-headline t-serif t-italic" style="font-size: clamp(2rem, 3.2vw, 2.7rem); color: #132418; margin: 0.5rem 0;">
              Initiate a Programme Dialogue.
            </h2>
            <p style="font-size: 0.98rem; line-height: 1.6; color: #384c3e;">
              Whether planning participation in the Osaka University 2027 pilot or requesting a customized field study proposal for your faculty, our registrar will respond within 48 hours.
            </p>
          </div>

          <form action="{{ route('programmes.consultation') }}" method="POST">
            @csrf style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
            <div style="display: flex; flex-direction: column; gap: 0.4rem;">
              <label style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #132418;">Contact Name *</label>
              <input type="text" placeholder="e.g. Prof. Yoshinori Sumimura / Dean / Coordinator" required style="background: #ffffff; border: 1px solid rgba(19,36,24,0.18); border-radius: 12px; padding: 0.85rem 1rem; font-size: 0.92rem; color: #132418; font-family: inherit;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 0.4rem;">
              <label style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #132418;">Official Email *</label>
              <input type="email" placeholder="e.g. contact@osaka-u.ac.jp" required style="background: #ffffff; border: 1px solid rgba(19,36,24,0.18); border-radius: 12px; padding: 0.85rem 1rem; font-size: 0.92rem; color: #132418; font-family: inherit;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 0.4rem;">
              <label style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #132418;">Institution / University *</label>
              <input type="text" placeholder="e.g. University of Osaka" required style="background: #ffffff; border: 1px solid rgba(19,36,24,0.18); border-radius: 12px; padding: 0.85rem 1rem; font-size: 0.92rem; color: #132418; font-family: inherit;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 0.4rem;">
              <label style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #132418;">Programme of Interest *</label>
              <select style="background: #ffffff; border: 1px solid rgba(19,36,24,0.18); border-radius: 12px; padding: 0.85rem 1rem; font-size: 0.92rem; color: #132418; font-family: inherit;">
                <option value="mflp-2027">Malaysia Field Learning Programme (Osaka 2027 Pilot)</option>
                <option value="custom-urban">Custom Track: Urban Governance & Engineering</option>
                <option value="custom-agritech">Custom Track: Sustainable Agritech & Food Security</option>
                <option value="custom-heritage">Custom Track: Cultural Heritage & Co-Creation</option>
                <option value="custom-ecology">Custom Track: Tropical Biodiversity & Marine Ecology</option>
                <option value="custom-other">Other Custom Academic Mobility Programme</option>
              </select>
            </div>

            <div style="grid-column: 1 / -1; display: flex; flex-direction: column; gap: 0.4rem;">
              <label style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #132418;">Cohort Estimates & Academic Objectives</label>
              <textarea rows="4" placeholder="Expected number of students, proposed dates in 2026/2027, academic credits, or specific fieldwork sites required..." style="background: #ffffff; border: 1px solid rgba(19,36,24,0.18); border-radius: 12px; padding: 0.85rem 1rem; font-size: 0.92rem; color: #132418; font-family: inherit; resize: vertical;"></textarea>
            </div>

            <div style="grid-column: 1 / -1; text-align: center; margin-top: 0.75rem;">
              <button type="submit" class="exp-next-section-btn" data-cursor="hide" style="display: inline-flex; width: auto; padding: 0.85rem 2.5rem; font-size: 0.95rem; cursor: pointer;">
                <span>Submit Academic Consultation Request</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </button>
            </div>
          </form>
        </div>

      </div>
    </section>

  </main>
@endsection

@push('scripts')
<script src="{{ asset('wp-content/themes/unseen/public/scripts/programmes.js') }}"></script>
@endpush
