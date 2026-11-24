<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $areas = [
            [
                'id' => '01',
                'title' => 'Educational Tourism',
                'description' => 'Learning through travel and real-world exploration across cultural, historical and institutional landmarks in Malaysia.',
                'lead' => 'Transformative journeys that bridge curriculum theory with authentic field contexts.',
                'image' => asset('wp-content/uploads/experiences/01_educational_tourism.jpg'),
                'badge' => 'AREA 01',
                'pillars' => [
                    'Curriculum-aligned destination field studies',
                    'Interactive workshops with local experts and master craftsmen',
                    'Comparative Southeast Asian societal and historical analysis',
                    'Guided observation notebooks and inquiry portfolios'
                ]
            ],
            [
                'id' => '02',
                'title' => 'International Student Mobility',
                'description' => 'Connecting students and educational institutions across borders through structured academic bilateral exchange.',
                'lead' => 'Fostering lifelong global perspectives through direct peer-to-peer campus integration.',
                'image' => asset('wp-content/uploads/experiences/02_student_mobility.jpg'),
                'badge' => 'AREA 02',
                'pillars' => [
                    'Bilateral university campus immersion & joint seminars',
                    'Academic credit transfer advisory & micro-credentialing',
                    'Multicultural student buddy systems & collaborative projects',
                    'Institutional MOU facilitation & faculty knowledge exchanges'
                ]
            ],
            [
                'id' => '03',
                'title' => 'Cultural Exchange & Heritage',
                'description' => 'Discovering diverse traditions, indigenous communities, multicultural harmony and living heritage.',
                'lead' => 'Experiencing the confluence of Malay, Chinese, Indian and indigenous cultures.',
                'image' => asset('wp-content/uploads/experiences/03_cultural_heritage.jpg'),
                'badge' => 'AREA 03',
                'pillars' => [
                    'UNESCO World Heritage explorations (Melaka & George Town)',
                    'Living community homestays and rural traditions',
                    'Traditional culinary arts, crafts and architectural preservation',
                    'Interfaith harmony, historical tolerance and social cohesion studies'
                ]
            ],
            [
                'id' => '04',
                'title' => 'Leadership & Professional Development',
                'description' => 'Building confidence, cross-cultural team communication, problem solving and global leadership capabilities.',
                'lead' => 'Empowering emerging thinkers to navigate ambiguity, lead diverse teams and create impact.',
                'image' => asset('wp-content/uploads/experiences/04_leadership_dev.jpg'),
                'badge' => 'AREA 04',
                'pillars' => [
                    'Cross-cultural team problem solving challenges',
                    'Public speaking, intercultural communication and negotiation clinics',
                    'Mentorship from corporate directors and academic leaders',
                    'Global leadership personal development portfolios'
                ]
            ],
            [
                'id' => '05',
                'title' => 'Industry & Professional Learning',
                'description' => 'Direct immersion into Southeast Asian industries, smart ports, digital transformation and corporate ecosystems.',
                'lead' => 'Behind-the-scenes access to leading technology hubs, logistics corridors and manufacturing plants.',
                'image' => asset('wp-content/uploads/experiences/05_industry_learning.jpg'),
                'badge' => 'AREA 05',
                'pillars' => [
                    'Corporate briefings with multinational business executives',
                    'Smart city infrastructure & high-tech manufacturing facility visits',
                    'Supply chain, regional logistics and financial technology showcases',
                    'Student capstone presentations evaluated by industry panels'
                ]
            ],
            [
                'id' => '06',
                'title' => 'Environmental Education & Sustainability',
                'description' => 'Exploring tropical rainforest conservation, sustainable agriculture, biodiversity and SDG initiatives.',
                'lead' => 'Direct immersion into 130-million-year-old tropical ecosystems and climate resilience solutions.',
                'image' => asset('wp-content/uploads/experiences/06_environmental_sustainability.jpg'),
                'badge' => 'AREA 06',
                'pillars' => [
                    'Rainforest biodiversity surveys & canopy conservation studies',
                    'Marine park preservation, mangrove restoration & coastal ecology',
                    'Sustainable agriculture, rubber & modern agritech field models',
                    'United Nations Sustainable Development Goals (SDG) practical audits'
                ]
            ],
            [
                'id' => '07',
                'title' => 'International Conferences & Knowledge Networking',
                'description' => 'Bringing universities, researchers, academic faculties and emerging leaders together for knowledge creation.',
                'lead' => 'Platform for international academic discourse, student colloquiums and multilateral research networks.',
                'image' => asset('wp-content/uploads/experiences/07_international_conferences.jpg'),
                'badge' => 'AREA 07',
                'pillars' => [
                    'International student research colloquiums & paper showcases',
                    'Academic keynote symposiums with international faculties',
                    'Bilateral institutional roundtable networking sessions',
                    'Joint publication and research grant collaboration initiatives'
                ]
            ]
        ];

        $learningStages = [
            [
                'number' => '01',
                'title' => 'OBSERVE',
                'tagline' => 'See the world from a different perspective.',
                'desc' => 'Participants observe real-world environments, identify key features and examine how places, communities and industries operate.',
                'image' => asset('wp-content/uploads/experiences/learning_01_observe.jpg'),
                'tags' => ['Field observation', 'Discovery', 'Awareness', 'Critical thinking']
            ],
            [
                'number' => '02',
                'title' => 'EXPLORE',
                'tagline' => 'Go beyond what you already know.',
                'desc' => 'Participants explore different environments, cultures, industries and destinations through structured visits and experiential activities.',
                'image' => asset('wp-content/uploads/experiences/learning_02_explore.jpg'),
                'tags' => ['Exploration', 'Discovery', 'Experiential learning', 'Practical exposure']
            ],
            [
                'number' => '03',
                'title' => 'CONNECT',
                'tagline' => 'Bridge knowledge with real experiences.',
                'desc' => 'Participants connect classroom concepts to real-world realities, engage with local people and build cross-cultural understanding.',
                'image' => asset('wp-content/uploads/experiences/learning_03_interact.jpg'),
                'tags' => ['Cross-cultural engagement', 'Communication', 'Empathy', 'Collaboration']
            ],
            [
                'number' => '04',
                'title' => 'TRANSFORM',
                'tagline' => 'Gain insights that stay with you.',
                'desc' => 'Through guided reflection, participants synthesize lessons learned, develop global perspectives and shape their personal and academic growth.',
                'image' => asset('wp-content/uploads/experiences/learning_04_understand.jpg'),
                'tags' => ['Reflection', 'Growth', 'Global perspective', 'Lifelong impact']
            ]
        ];

        $destinations = [
            [
                'title' => 'Cities & Architecture',
                'kicker' => 'URBAN ENVIRONMENTS',
                'lead' => 'Understanding how places are designed and developed.',
                'desc' => 'Explore the relationship between architecture, infrastructure, urban planning and the communities that shape modern cities.',
                'image' => asset('wp-content/uploads/experiences/dest_01_cities.jpg'),
                'ref' => 'Reference: Putrajaya & PETRONAS Twin Towers',
                'points' => [
                    'Urban planning and sustainable administrative city development',
                    'Iconic architecture, engineering structures and smart building tech',
                    'Public spaces, integrated transit corridors and waterfront development',
                    'Modern infrastructure systems coexisting with tropical climatic demands'
                ]
            ],
            [
                'title' => 'Culture & Heritage',
                'kicker' => 'LIVING TRADITIONS',
                'lead' => 'Discovering history, diversity and community identity.',
                'desc' => 'Experience Malaysia\'s multicultural heritage through living communities, historical architecture, languages and traditions.',
                'image' => asset('wp-content/uploads/experiences/dest_02_culture.jpg'),
                'ref' => 'Reference: Melaka UNESCO World Heritage Zone',
                'points' => [
                    'Historical trading port evolution and intercultural maritime exchange',
                    'Traditional crafts, batik, woodcarving and artisanal heritage',
                    'Multicultural harmony, religious architecture and community festivals',
                    'Living community heritage conservation and adaptive reuse projects'
                ]
            ],
            [
                'title' => 'Nature & Sustainability',
                'kicker' => 'ECOLOGICAL SYSTEMS',
                'lead' => 'Exploring tropical biodiversity and conservation efforts.',
                'desc' => 'Engage directly with ancient rainforests, mangrove shorelines, wildlife habitats and community-driven environmental conservation.',
                'image' => asset('wp-content/uploads/experiences/dest_03_nature.jpg'),
                'ref' => 'Reference: Royal Belum & Forest Research Institute Malaysia',
                'points' => [
                    'Primary tropical rainforest ecosystems, biodiversity and canopy layers',
                    'Mangrove conservation, carbon sequestration and coastal protection',
                    'Community ecotourism models and wildlife protection initiatives',
                    'Climate resilience solutions and national environmental policy insights'
                ]
            ],
            [
                'title' => 'Agriculture & Industry',
                'kicker' => 'ECONOMIC ENGINES',
                'lead' => 'Examining resource management, commodity trade and industry.',
                'desc' => 'Understand how primary commodities, modern processing, export supply chains and agricultural science drive regional economies.',
                'image' => asset('wp-content/uploads/experiences/dest_04_agriculture.jpg'),
                'ref' => 'Reference: Modern Agritech & Commodity Plantations',
                'points' => [
                    'Commercial plantation evolution: Rubber, pineapple and precision crops',
                    'Processing technologies, quality standards and global export logistics',
                    'Sustainable farming practices, circular waste utilization and agritech',
                    'Economic contributions of agriculture to national and regional growth'
                ]
            ]
        ];

        return view('experiences', compact('areas', 'learningStages', 'destinations'));
    }
}
