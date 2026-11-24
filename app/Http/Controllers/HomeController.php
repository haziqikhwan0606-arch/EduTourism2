<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $areas = [
            [
                'id' => '01',
                'title' => 'Educational Tourism',
                'description' => 'Learning through travel and real-world exploration across cultural, historical and institutional landmarks.',
                'image' => asset('wp-content/uploads/experiences/01_educational_tourism.jpg'),
                'badge' => 'AREA 01',
                'tag' => 'Exploration & Culture',
            ],
            [
                'id' => '02',
                'title' => 'International Student Mobility',
                'description' => 'Connecting students and educational institutions across borders through structured academic bilateral exchange.',
                'image' => asset('wp-content/uploads/experiences/02_student_mobility.jpg'),
                'badge' => 'AREA 02',
                'tag' => 'Academic Exchange',
            ],
            [
                'id' => '03',
                'title' => 'Cultural Exchange & Heritage',
                'description' => 'Discovering diverse traditions, indigenous communities, multicultural harmony and living heritage.',
                'image' => asset('wp-content/uploads/experiences/03_cultural_heritage.jpg'),
                'badge' => 'AREA 03',
                'tag' => 'Living Heritage',
            ],
            [
                'id' => '04',
                'title' => 'Leadership & Professional Development',
                'description' => 'Building confidence, cross-cultural team communication, problem solving and global leadership capabilities.',
                'image' => asset('wp-content/uploads/experiences/04_leadership_dev.jpg'),
                'badge' => 'AREA 04',
                'tag' => 'Global Competencies',
            ],
            [
                'id' => '05',
                'title' => 'Industry & Professional Learning',
                'description' => 'Direct immersion into Southeast Asian industries, smart ports, digital transformation and corporate ecosystems.',
                'image' => asset('wp-content/uploads/experiences/05_industry_learning.jpg'),
                'badge' => 'AREA 05',
                'tag' => 'Industry Immersion',
            ],
            [
                'id' => '06',
                'title' => 'Environmental Education & Sustainability',
                'description' => 'Exploring tropical rainforest conservation, sustainable agriculture, biodiversity and SDG initiatives.',
                'image' => asset('wp-content/uploads/experiences/06_environmental_sustainability.jpg'),
                'badge' => 'AREA 06',
                'tag' => 'Conservation & SDGs',
            ],
            [
                'id' => '07',
                'title' => 'International Conferences & Knowledge Networking',
                'description' => 'Bringing universities, researchers, academic faculties and emerging leaders together for knowledge creation.',
                'image' => asset('wp-content/uploads/experiences/07_international_conferences.jpg'),
                'badge' => 'AREA 07',
                'tag' => 'Knowledge Exchange',
            ],
        ];

        $learningStages = [
            [
                'number' => '01',
                'title' => 'OBSERVE',
                'tagline' => 'See the world from a different perspective.',
                'desc' => 'Participants observe real-world environments, identify key features and examine how places, communities and industries operate.',
                'image' => asset('wp-content/uploads/experiences/learning_01_observe.jpg'),
                'tags' => ['Field observation', 'Discovery', 'Awareness', 'Critical thinking'],
            ],
            [
                'number' => '02',
                'title' => 'EXPLORE',
                'tagline' => 'Go beyond what you already know.',
                'desc' => 'Participants explore different environments, cultures, industries and destinations through structured visits and experiential activities.',
                'image' => asset('wp-content/uploads/experiences/learning_02_explore.jpg'),
                'tags' => ['Exploration', 'Discovery', 'Experiential learning', 'Practical exposure'],
            ],
            [
                'number' => '03',
                'title' => 'CONNECT',
                'tagline' => 'Bridge knowledge with real experiences.',
                'desc' => 'Participants connect classroom concepts to real-world realities, engage with local people and build cross-cultural understanding.',
                'image' => asset('wp-content/uploads/experiences/learning_03_interact.jpg'),
                'tags' => ['Cross-cultural engagement', 'Communication', 'Empathy', 'Collaboration'],
            ],
            [
                'number' => '04',
                'title' => 'TRANSFORM',
                'tagline' => 'Gain insights that stay with you.',
                'desc' => 'Through guided reflection, participants synthesize lessons learned, develop global perspectives and shape their personal and academic growth.',
                'image' => asset('wp-content/uploads/experiences/learning_04_understand.jpg'),
                'tags' => ['Reflection', 'Growth', 'Global perspective', 'Lifelong impact'],
            ],
        ];

        return view('home', compact('areas', 'learningStages'));
    }
}
