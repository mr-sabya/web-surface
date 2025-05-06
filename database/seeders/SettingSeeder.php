<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Setting::create([
            'site_title' => 'My Website',
            'tagline' => 'Best website in the world!',
            'logo' => 'default-logo.png',  // Assuming you have the logo in your storage folder
            'white_logo' => 'default-white-logo.png', // Assuming you have the white logo in your storage folder
            'favicon' => 'favicon.ico', // Assuming you have the favicon in your storage folder
            'email' => 'contact@mywebsite.com',
            'phone' => '123-456-7890',
            'address' => '123 Main Street, City, Country',
            'website_link' => 'https://www.mywebsite.com',
            'footer_about' => 'This is a great website that provides amazing services.',
            'copyright' => '© 2025 My Website. All Rights Reserved.',
            'meta_description' => 'Welcome to My Website, the best website in the world!',
            'meta_tags' => 'website, blog, ecommerce',
            'meta_title' => 'My Website - Best Website',
            'og_title' => 'My Website',
            'og_description' => 'Welcome to My Website, your source for amazing content.',
            'og_image' => 'og-image.png',  // Assuming you have the image in your storage folder
            'maintenance_mode' => false,  // Set to true if you want to enable maintenance mode by default
        ]);
    }
}
