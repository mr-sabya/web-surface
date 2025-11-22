<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutPage;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutPage::create([
            'title' => 'About Us',
            'sub_title' => 'About Company',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
            'image_1' => 'assets/frontend/images/about/company-about.png',
            'image_2' => 'assets/frontend/images/about/leadership.jpg',

            // counters
            'counster_1' => 450,
            'counster_1_text' => 'Happy Clients',
            'counster_2' => 95,
            'counster_2_text' => 'Hours Worked',
            'counster_3' => 850,
            'counster_3_text' => 'Projects Done',

            // mission & vision
            'mission_vision_heading' => 'A group of creative minds dedicated to creating the best apps and websites in the world.',
            'mission_vision_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
            'mission' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'mission_icon' => 'assets/frontend/images/icons/mountain.png',
            'vision' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'vision_icon' => 'assets/frontend/images/icons/vision.png',

            // philosophy section
            'philosophy_section_title' => 'Our Philosophy',
            'philosophy_section_subtitle' => 'Our Business Philosophy',

            // why choose section
            'whychoose_section_title' => 'We Are Awesome',
            'whychoose_section_subtitle' => 'Why Choose Niwax',

            // timeline section
            'timeline_section_title' => 'The Time Machine',
            'timeline_section_subtitle' => 'A Timeline of Our Journey',

            // team section
            'team_section_title' => 'Meet our Team',
            'team_section_subtitle' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
    }
}
