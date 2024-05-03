<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $informations = [
            'name' => 'Anass',
            'last_name' => 'Ait Ouaguerd',
            'image' => 'Anass.jpg',
            'title' => 'Full stack Developer',
            'location' => 'Elksiba, Morocco',
            'email' => 'aitouaguerdanass@gmail.com',
            'phone' => '+212697896452',
            'social' => [
                'linkedin' => 'https://www.linkedin.com/in/anass-ait-ouageurd/',
                'github' => 'https://github.com/Anassaitouaguerd',
                'gmail' => 'mailto:aitoauguerdanass@gmail.com'
            ],
            'summary' => 'I\'m Anass Ait Ouaguerd, a dedicated full-stack developer with a strong focus on backend technologies. My expertise lies in PHP Laravel, where I excel in crafting robust and scalable web applications.',
            'experience' => [],
            'education' => [
                [
                    'title' => 'full-stack developer',
                    'company' => 'Youcode Maroc',
                    'location' => 'Youssoufia, Morocco',
                    'date' => '2023 - 2024',
                ],
                [
                    'title' => 'Baccalauréat',
                    'company' => 'Lycee Eguig',
                    'location' => 'Elksiba, Morocco',
                    'date' => '2021 - 2022',
                ]
            ],
            'skills' => [
                'Programming Languages' => ['PHP', 'SQL', 'JavaScript'],
                'Frameworks & Libraries' => ['React', 'Laravel'],
                'Databases' => ['MySQL', 'MongoDB'],
                'Other' => ['Git', 'Github', 'Postman', 'StarUML', 'Jira', 'AWS', 'Laragon', 'Xampp', 'Figma', 'Trello', 'RESTful APIs', 'Docker']
            ],
            'projects' => [
                [
                    'name' => 'Travling Together',
                    'description' => 'The “TRAVELLING TOGETHER” project aims to revolutionize the rail experience in Morocco by offering a complete online platform. This platform will provide a user-friendly interface for travelers to access a wide range of services, from viewing and booking tickets to obtaining real-time information on trains and managing their travel itineraries.',
                    'technologies' => ['Laravel', 'Javascript', 'Mysql'],
                    'link' => 'https://github.com/Anassaitouaguerd/Traveling_Together'
                ],
                [
                    'name' => 'Evento',
                    'description' => '"Evento" aims to revolutionize event management with a cutting-edge platform dedicated to booking and managing event tickets. Designed to deliver an exceptional user experience for attendees, organizers, and administrators alike, this platform offers seamless discovery, booking, and ticket generation for a wide range of events. With the ability for organizers to create and oversee their own events, "Evento" promises to streamline the entire event lifecycle for all involved parties.',
                    'technologies' => ['Laravel', 'Javascript', 'MySQL'],
                    'link' => 'https://github.com/Anassaitouaguerd/Evento-'
                ],
                [
                    'name' => 'Portfolio',
                    'description' => 'Enhance your CV by integrating a comprehensive and functional portfolio showcasing your expertise in full-stack web development. This portfolio serves as a dynamic demonstration of your skills, highlighting your ability to create robust and user-friendly web applications from front to back end.',
                    'technologies' => ['React', 'Laravel', 'Javascript', 'MongoDB'],
                    'link' => 'https://github.com/Anassaitouaguerd/Portfolio'
                ],
                [
                    'name' => 'Wiki',
                    'description' => 'The project aims to develop a content management system for Wiki, focused on efficiency and user experience. Administrators manage categories and wikis, authors create and edit content. The front office offers a user-friendly interface with simplified registration and efficient search, encouraging collaboration to share wikis.',
                    'technologies' => ['PHP', 'SQL', 'PDO', 'Javascript', 'Mysql'],
                    'link' => 'https://github.com/Anassaitouaguerd/Wiki-Platform'
                ]
            ]
        ];

        // Insert the information into the database
        DB::table('mes')->insert([
            'informations' => json_encode($informations),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}