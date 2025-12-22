<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function about()
    {
        $services = [
            [
                'icon' => 'images/site/service-01.svg',
                'title' => 'Website',
                'description' => 'I build responsive and scalable websites using modern technologies, focusing on performance, usability, and clean code structure.',
            ],
            [
                'icon' => 'images/site/service-02.svg',
                'title' => 'App',
                'description' => 'I develop web-based applications with structured backend logic, APIs, and databases to support real business needs.',
            ],
            [
                'icon' => 'images/site/service-03.svg',
                'title' => 'Desain',
                'description' => 'I create clean and user-focused UI/UX designs that improve user experience and align with business goals.',
            ],
            [
                'icon' => 'images/site/service-04.svg',
                'title' => 'Data Analyst',
                'description' => 'I analyze and visualize data to generate insights, support decision-making, and help businesses understand their performance.',
            ],
        ];


        return view('about', compact('services'));
    }

    public function resume()
    {
        $workHistories = [
            [
                'period' => 'July 2024 - Current',
                'position' => 'Fullstack Developer & System Analyst',
                'company' => 'Javatekno MitraSolusi - Ponorogo',
                'description' => 'Responsible for analyzing system requirements and developing web-based applications. Involved in frontend and backend development, API integration, database design, and system optimization to support business and operational processes.',
            ],
            [
                'period' => 'Aug 2024 - Dec 2024',
                'position' => 'Backend Developer Intern',
                'company' => 'Technopartner Indonesia - Yogyakarta',
                'description' => 'Developed Content Management Systems (CMS) for two projects using the Laravel framework. Collaborated closely with the team through the Agile Scrum methodology to ensure structured development and alignment with project requirements.',
            ],
            [
                'period' => 'Sep 2023 – Dec 2023',
                'position' => 'Surveyor & Backend Engineer',
                'company' => 'ADS Digital Partner – Malang',
                'description' => 'Assisted the backend team in developing features using the Laravel framework and performed API testing using Postman.',
            ],
        ];

        $educations = [
            [
                'period' => '2021 - 2025',
                'major' => 'Business Information System',
                'institution' => 'Politeknik Negeri Malang',
                'description' => 'Focused on business process analysis, information systems development, database management, and data-driven decision making. Experienced in building web-based systems to support operational and managerial needs.',
            ],
        ];

        $designSkills = [
            ['name' => 'Figma', 'percent' => 85],
            ['name' => 'Adobe Photoshop', 'percent' => 80],
            ['name' => 'Canva', 'percent' => 85],
        ];

        $codingSkills = [
            ['name' => 'Laravel', 'percent' => 80],
            ['name' => 'Next JS', 'percent' => 75],
            ['name' => 'React JS', 'percent' => 75],
            ['name' => 'PHP', 'percent' => 80],
            ['name' => 'JavaScript', 'percent' => 80],
            ['name' => 'TypeScript', 'percent' => 75],
            ['name' => 'MySQL', 'percent' => 80],
        ];

        return view('resume', compact(
            'workHistories',
            'educations',
            'designSkills',
            'codingSkills'
        ));
    }

    private function portfolios()
    {
        return [
            1 => [
                'id' => 1,
                'title' => 'Instagram Feed Post',
                'type' => 'apps',
                'category' => 'Apps',
                'image' => 'images/hmti/1.png',

                // AJAX behavior
                'link_type' => 'ajax',
                'link' => route('portofolio.show', 1),

                'description' => 'Design and development of Instagram feed content focused on visual consistency, brand identity, and audience engagement. This project emphasizes clean layout, balanced typography, and effective color usage to strengthen digital presence.',
                'client' => 'Organization Project',
                // 'date' => '2019-03-01',
                'services' => 'Branding, Desain',
                // 'project_url' => 'https://www.behance.net/gallery/77400809/Vans-Faces',

                'gallery' => [
                    'images/hmti/1.png',
                    'images/hmti/2.png',
                    'images/hmti/3.png',
                ],
            ],

            2 => [
                'id' => 2,
                'title' => 'QR Code Library System',
                'type' => 'website',
                'category' => 'Website',
                'image' => 'images/library/4.png',

                'link_type' => 'ajax',
                'link' => route('portofolio.show', 2),

                'description' => 'A digital library system that utilizes QR Code technology for book borrowing and returning processes, combined with a gamification approach to increase user engagement. Users earn points, achievements, and levels through reading activities, making the library experience more interactive and motivating.',
                'client' => 'Academic Project',
                // 'date' => '',
                'services' => 'System Design, Backend Development, QR Code Integration, Gamification Design',
                'project_url' => null,

                'gallery' => [
                    'images/library/1.png',
                    'images/library/2.png',
                    'images/library/3.png',
                ],
            ],
            3 => [
                'id' => 3,
                'title' => 'Company Profile – Academy Sahabat Ponorogo',
                'type' => 'website',
                'category' => 'Website',
                'image' => 'images/sahabat/1.png',

                'link_type' => 'ajax',
                'link' => route('portofolio.show', 3),

                'description' => 'A company profile website developed for Academy Sahabat Ponorogo Basketball to showcase the academy’s vision, programs, coaching staff, and achievements. The website is designed to strengthen brand identity, improve information accessibility, and serve as a digital presence for parents, athletes, and partners.',
                'client' => 'Academy Sahabat Ponorogo',
                // 'date' => '2024-06-10',
                'services' => 'Website Development, UI/UX Design, Content Management, Branding',
                'project_url' => 'sahabatponorogo.com',
                'gallery' => [
                    'images/sahabat/home.png',
                ],
            ],
            4 => [
                'id' => 4,
                'title' => 'Mobile App UI/UX Mockup Design',
                'type' => 'apps',
                'category' => 'Apps',
                'image' => 'images/mockup-mobile/1.png',

                'link_type' => 'ajax',
                'link' => route('portofolio.show', 4),

                'description' => 'A mobile application UI/UX mockup designed to deliver a clean, intuitive, and user-centered experience. The design focuses on clear information hierarchy, smooth user flow, and modern visual elements to ensure usability and engagement. This mockup serves as a foundation for development-ready mobile applications.',
                'client' => 'Personal / Concept Project',
                // 'date' => '2024-07-15',
                'services' => 'UI/UX Design, Mobile App Design, Wireframing, Prototyping',
                'project_url' => null,
                'gallery' => [
                    'images/mockup-mobile/1.png',
                    'images/mockup-mobile/2.png',
                    'images/mockup-mobile/3.png',
                    // 'images/mockup-mobile/4.png',
                    'images/mockup-mobile/5.png',
                    'images/mockup-mobile/6.png',
                ],
            ],
            5 => [
                'id' => 5,
                'title' => 'Gamified Match Management Information System',
                'type' => 'website',
                'category' => 'Website',
                'image' => 'images/sim-pertandingan/1.png',

                'link_type' => 'ajax',
                'link' => route('portofolio.show', 5),

                'description' => 'A web-based match management information system designed to manage basketball competitions efficiently with the implementation of gamification concepts. The system handles match scheduling, player statistics, scoring, and performance evaluation. Gamification elements such as leaderboards, player ratings, and progress tracking are applied to increase engagement, motivation, and transparency for players, coaches, and administrators.',
                'client' => 'Basketball Academy / Sports Organization',
                // 'date' => '2024-08-20',
                'services' => 'System Analysis, Web Development, Database Design, Gamification Design, Dashboard & Reporting',
                'project_url' => null,
                'gallery' => [
                    'images/sim-pertandingan/1.png',
                    'images/sim-pertandingan/2.png',
                    'images/sim-pertandingan/3.png',
                ],
            ],


        ];
    }


    // LIST
    public function portofolio()
    {
        $portfolioFilters = [
            ['key' => '*', 'label' => 'All'],
            ['key' => 'website', 'label' => 'Website'],
            ['key' => 'apps', 'label' => 'Apps'],
            ['key' => 'desain', 'label' => 'Desain'],
            // ['key' => 'video', 'label' => 'Video'],
        ];
        $portfolios = collect($this->portfolios())->values();
        return view('portfolio.index', compact('portfolios', 'portfolioFilters'));
    }

    // DETAIL
    public function showPortofolio($id)
    {
        $portfolio = $this->portfolios()[$id] ?? abort(404);
        return view('portfolio.show', compact('portfolio'));
    }
}
