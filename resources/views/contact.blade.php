@extends('layouts.app')

@section('title', 'Olympia EduTourism — Contact & Academic Consultation')

@section('content')

<!-- ==========================================================================
     HERO SECTION
     ========================================================================== -->
<section class="hero-section" style="padding-bottom: 3rem;">
  <div class="hero-container">
    <span class="hero-eyebrow">GET IN TOUCH</span>
    <h1 class="hero-headline">
      Say hello.<br>
      <em>We look forward to hearing from you.</em>
    </h1>
    <p class="hero-subtext">
      Whether discussing institutional partnership agreements, customized student cohorts, or academic research collaboration across Malaysia.
    </p>
  </div>
</section>

<!-- ==========================================================================
     CONTACT CHANNELS & TABS
     ========================================================================== -->
<section style="padding: 0 2rem 5rem;">
  <div class="section-container" style="max-width: 1080px;">

    <!-- Inquiry Type Tabs -->
    <div style="display: flex; justify-content: center; gap: 0.75rem; margin-bottom: 2.5rem; flex-wrap: wrap;">
      <button type="button" class="btn-secondary js-inquiry-tab is-active" data-inquiry-type="partnerships" style="padding: 0.75rem 1.75rem;">
        <span>Partnerships &amp; Academic MOUs</span>
      </button>
      <button type="button" class="btn-secondary js-inquiry-tab" data-inquiry-type="general" style="padding: 0.75rem 1.75rem;">
        <span>General Inquiries</span>
      </button>
    </div>

    <!-- Contact Info Cards -->
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 3.5rem;">
      <!-- Partnerships Card -->
      <div class="js-inquiry-panel is-active" data-panel="partnerships" style="background: #ffffff; border: 2px solid var(--accent-green); border-radius: var(--radius-lg); padding: 2.5rem; box-shadow: var(--shadow-soft);">
        <span style="font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent-green); font-weight: 600;">INSTITUTIONAL DESK</span>
        <h3 style="font-size: 1.5rem; margin: 0.5rem 0 0.75rem; color: var(--text-dark);">Academic Partnerships &amp; MOUs</h3>
        <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted); margin-bottom: 1.5rem;">
          Direct communication for university international offices, provosts, deans, and academic coordinators planning bilateral field programs and formal MOUs.
        </p>
        <div style="background: var(--bg-sage); padding: 1.25rem; border-radius: var(--radius-md);">
          <span style="display: block; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--text-muted); margin-bottom: 0.25rem;">Direct Email Address</span>
          <a href="mailto:edutourism@olympia-education.com" style="font-size: 1.15rem; font-weight: 600; color: var(--accent-green); text-decoration: none; word-break: break-all;">
            edutourism@olympia-education.com
          </a>
        </div>
      </div>

      <!-- General Enquiries Card -->
      <div class="js-inquiry-panel" data-panel="general" style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 2.5rem; box-shadow: var(--shadow-soft);">
        <span style="font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--text-muted); font-weight: 600;">INFORMATION DESK</span>
        <h3 style="font-size: 1.5rem; margin: 0.5rem 0 0.75rem; color: var(--text-dark);">General Enquiries &amp; Logistics</h3>
        <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted); margin-bottom: 1.5rem;">
          Inquiries regarding student admissions, ground itineraries, safety guidelines, and general orientation across all educational tourism tracks.
        </p>
        <div style="background: var(--bg-sage); padding: 1.25rem; border-radius: var(--radius-md);">
          <span style="display: block; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--text-muted); margin-bottom: 0.25rem;">Direct Email Address</span>
          <a href="mailto:info@olympia.edu.my" style="font-size: 1.15rem; font-weight: 600; color: var(--accent-green); text-decoration: none; word-break: break-all;">
            info@olympia.edu.my
          </a>
        </div>
      </div>

      <!-- Head Office Card -->
      <div style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 2.5rem; box-shadow: var(--shadow-soft); grid-column: 1 / -1; display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center;">
        <div>
          <span style="font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent-green); font-weight: 600;">HEADQUARTERS</span>
          <h3 style="font-size: 1.4rem; margin: 0.35rem 0 0.75rem; color: var(--text-dark);">Olympia Education Malaysia</h3>
          <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted); margin: 0;">
            Kuala Lumpur, Malaysia<br>
            Operating in academic collaboration with partner universities and institutions.
          </p>
        </div>
        <div style="text-align: right;">
          <a href="{{ asset('Osaka_2027_Malaysia_Field_Learning_Brochure (1).pdf') }}" target="_blank" class="btn-secondary" style="font-size: 0.9rem;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
            <span>Download Osaka 2027 Brochure</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Interactive Message Form -->
    <div style="background: #ffffff; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 3rem 2.5rem; box-shadow: var(--shadow-soft);">
      <div style="text-align: center; max-width: 620px; margin: 0 auto 2.5rem;">
        <span class="hero-eyebrow">MESSAGE DISPATCH</span>
        <h2 style="font-size: 2rem; margin: 0 0 0.75rem; color: var(--text-dark);">Send an Academic Consultation Request</h2>
        <p style="font-size: 0.98rem; color: var(--text-muted);">
          Our academic liaison desk reviews and responds to all institutional requests within 24 to 48 business hours.
        </p>
      </div>

      <form action="{{ route('contact.submit') }}" method="POST" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
        @csrf
        <input type="hidden" name="inquiry_type" id="inquiryTypeInput" value="partnerships">

        <div>
          <label style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.4rem; color: var(--text-dark);">Full Name *</label>
          <input type="text" name="name" required placeholder="e.g. Prof. / Dr. / Ms. Taro Yamada" style="width: 100%; padding: 0.85rem 1rem; border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); font-size: 0.95rem; font-family: inherit;">
        </div>

        <div>
          <label style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.4rem; color: var(--text-dark);">Official Academic / Corporate Email *</label>
          <input type="email" name="email" required placeholder="name@university.ac.jp" style="width: 100%; padding: 0.85rem 1rem; border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); font-size: 0.95rem; font-family: inherit;">
        </div>

        <div>
          <label style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.4rem; color: var(--text-dark);">University / Institution Name</label>
          <input type="text" name="department" placeholder="e.g. Osaka University / Faculty of Letters" style="width: 100%; padding: 0.85rem 1rem; border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); font-size: 0.95rem; font-family: inherit;">
        </div>

        <div>
          <label style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.4rem; color: var(--text-dark);">Subject *</label>
          <input type="text" name="subject" required placeholder="e.g. Inquiry on 2027 Field Learning Cohort" style="width: 100%; padding: 0.85rem 1rem; border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); font-size: 0.95rem; font-family: inherit;">
        </div>

        <div style="grid-column: 1 / -1;">
          <label style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.4rem; color: var(--text-dark);">Detailed Inquiry / Requirements *</label>
          <textarea name="message" rows="5" required placeholder="Please outline your cohort interests, estimated student count, target travel window, and specific curricular objectives..." style="width: 100%; padding: 0.85rem 1rem; border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); font-size: 0.95rem; font-family: inherit; resize: vertical;"></textarea>
        </div>

        <div style="grid-column: 1 / -1; text-align: center; margin-top: 1rem;">
          <button type="submit" class="btn-primary" style="padding: 1rem 3rem; font-size: 1.05rem;">
            <span>Submit Academic Consultation Request</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
        </div>
      </form>
    </div>

  </div>
</section>

<style>
.js-inquiry-tab.is-active {
  background: var(--text-dark) !important;
  color: #ffffff !important;
  border-color: var(--text-dark) !important;
}
.js-inquiry-panel {
  display: block;
}
@media (max-width: 768px) {
  form { grid-template-columns: 1fr !important; }
  div[style*="grid-template-columns: 1fr 1fr"] { grid-template-columns: 1fr !important; }
}
</style>

@endsection
