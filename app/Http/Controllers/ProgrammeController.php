<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function index()
    {
        $days = [
            [
                'day' => '01',
                'title' => 'Arrival, Orientation & Academic Briefing',
                'theme' => 'Welcome & Cross-Cultural Inception',
                'tagline' => 'Arrival in Kuala Lumpur, orientation and peer-to-peer buddy matching.',
                'image' => asset('wp-content/uploads/experiences/mflp_day_01.jpg'),
                'activities' => [
                    'International arrival at Kuala Lumpur International Airport (KLIA) & transfer',
                    'Welcome orientation, safety protocol briefing and cultural conduct guidelines',
                    'Bilateral student pairing: Osaka University participants paired with IUC peer partners',
                    'Icebreaking dinner and program track distribution'
                ],
                'outcomes' => 'Smooth transition, peer cohesion, clarity on academic requirements and field assessment milestones.'
            ],
            [
                'day' => '02',
                'title' => 'Smart Administration & Planned Urbanism',
                'theme' => 'Putrajaya Administrative Capital Study',
                'tagline' => 'Analyzing modern city governance, tropical architecture and intelligent infrastructure.',
                'image' => asset('wp-content/uploads/programmes/mflp_day2_putrajaya.jpg'),
                'activities' => [
                    'Guided study tour of Putrajaya Government Administrative Precinct',
                    'Investigation of sustainable urban master planning and artificial wetlands filtration',
                    'Analysis of Islamic-contemporary architecture and high-efficiency government buildings',
                    'Faculty-guided field seminar on Southeast Asian public administration models'
                ],
                'outcomes' => 'Understanding deliberate city design, administrative centralization and tropical infrastructure.'
            ],
            [
                'day' => '03',
                'title' => 'Commercial Powerhouse & Global Financial Hub',
                'theme' => 'Kuala Lumpur Metro & Petronas Twin Towers',
                'tagline' => 'Exploring international finance, engineering marvels and corporate headquarters.',
                'image' => asset('wp-content/uploads/programmes/mflp_day3_petronas.jpg'),
                'activities' => [
                    'Technical architectural and structural engineering visit to the PETRONAS Twin Towers',
                    'Meeting with multinational business representatives in the central commercial district',
                    'Transit-oriented development audit: MRT/LRT multimodal connectivity systems',
                    'Evening multicultural food heritage and urban community dynamics walk'
                ],
                'outcomes' => 'Appreciation of high-density engineering, multinational investment, and dynamic metropolitan living.'
            ],
            [
                'day' => '04',
                'title' => 'Modern Agritech, Precision Farming & Halal Economy',
                'theme' => 'Sustainable Agriculture & Commodity Science',
                'tagline' => 'Field exposure to modern pineapple cultivation, processing and value-addition.',
                'image' => asset('wp-content/uploads/programmes/mflp_day4_pineapple.jpg'),
                'activities' => [
                    'On-site inspection of commercial pineapple research and cultivation farms',
                    'Understanding high-efficiency automated processing, packaging and cold-chain logistics',
                    'Briefing on Malaysia\'s world-leading Halal certification standards and global food trade',
                    'Student data gathering on soil health, crop yields and export market demand'
                ],
                'outcomes' => 'First-hand insight into modern agritech, international food standards and regional agricultural economies.'
            ],
            [
                'day' => '05',
                'title' => 'Industrial Evolution, Commodity Trade & Manufacturing',
                'theme' => 'Rubber Processing, Global Supply Chains & Ports',
                'tagline' => 'From raw natural resources to advanced specialized manufacturing and export.',
                'image' => asset('wp-content/uploads/programmes/mflp_day5_rubber.jpg'),
                'activities' => [
                    'Visit to established rubber plantation and modern polymer processing facility',
                    'Examination of medical-grade manufacturing technologies and quality validation',
                    'Maritime logistics overview: How Port Klang connects ASEAN trade corridors to East Asia',
                    'Team workshop session: Synthesizing field data for final capstone presentation'
                ],
                'outcomes' => 'Understanding resource-based industrialization, value-added export chains and industrial policy.'
            ],
            [
                'day' => '06',
                'title' => 'Academic Colloquium, Capstone Defense & Farewell',
                'theme' => 'Joint University Symposium & Certification',
                'tagline' => 'Student collaborative presentations, faculty evaluation and formal certification.',
                'image' => asset('wp-content/uploads/experiences/mflp_day_06.jpg'),
                'activities' => [
                    'Bilateral Academic Colloquium hosted at Innovative University College (IUC) campus',
                    'Multi-institution team capstone presentations evaluated by Japanese and Malaysian faculty',
                    'Formal Award Ceremony: Conferment of Certificates of Completion and Academic Transcripts',
                    'Farewell banquet, cultural exchange performances and departure transfers'
                ],
                'outcomes' => 'Demonstrated synthesis of learning, academic presentation skills, cross-border institutional friendships.'
            ],
        ];

        $faqs = [
            [
                'q' => 'Who is eligible to participate in MFLP 2027?',
                'a' => 'Undergraduate and postgraduate students enrolled in partner universities (including Osaka University) across disciplines including Social Sciences, Urban Studies, Engineering, International Business, Agriculture and Environmental Sciences.'
            ],
            [
                'q' => 'What is the primary language of instruction?',
                'a' => 'All lectures, briefings, site guides and symposiums are conducted in English, with bilingual Japanese-speaking coordinators and student mentors on hand throughout the duration.'
            ],
            [
                'q' => 'Can participants receive academic credits for this program?',
                'a' => 'Yes. MFLP 2027 is structured as a formal academic field learning program equivalent to 2 to 3 modular credits (ECTS/Japanese credit equivalent), subject to formal approval by the participant\'s home university faculty.'
            ],
            [
                'q' => 'How are accommodation and ground logistics managed?',
                'a' => 'All participants are accommodated in vetted, secure 4-star hotels in twin-sharing configurations. Dedicated air-conditioned private coaches handle all airport and inter-city field transfers with licensed tourist guides and first-aid trained coordinators.'
            ],
            [
                'q' => 'How do universities initiate an institutional partnership or custom cohort?',
                'a' => 'University international offices or faculty deans can submit an Academic Consultation Request or email our international partnership team at edutourism@olympia-education.com to schedule a briefing and customize dates, curriculum tracks and cohort sizes.'
            ]
        ];

        return view('programmes', compact('days', 'faqs'));
    }

    public function consultation(Request $request)
    {
        $validated = $request->validate([
            'institution_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cohort_size' => 'nullable|string|max:100',
            'target_period' => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
        ]);

        // In production, send email to edutourism@olympia-education.com or save to DB
        return redirect()->back()->with('success', 'Thank you! Your academic consultation request has been received. Our partnership team will contact your institution within 1-2 business days.');
    }
}

