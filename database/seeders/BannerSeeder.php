<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'heading' => 'Take your business to the next level with Web Surface — your trusted partner.',
            'paragraph' => "Whether you're a startup or an established brand, our expert team is here to craft tailored solutions that drive growth, enhance user experience, and ensure long-term success.",
            'video_link' => 'https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0', // optional
            'image' => 'banners/digital-marketing.png', // make sure this image exists in storage or public
            'btn_text' => 'Get Started',
            'btn_link' => '/get-started',
        ]);
    }
}
