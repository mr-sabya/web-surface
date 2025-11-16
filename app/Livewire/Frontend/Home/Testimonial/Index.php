<?php

namespace App\Livewire\Frontend\Home\Testimonial;

use App\Models\ReviewPlatform;
use App\Models\Testimonial;
use App\Models\TestimonialSection;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // 1. Fetch the static section content
        $section = TestimonialSection::first();

        // 2. Fetch the review platform icons, ordered correctly
        $platforms = ReviewPlatform::orderBy('order', 'asc')->get();

        // 3. Fetch the testimonials (you may want to add an 'order' column to your Testimonial model too)
        $testimonials = Testimonial::latest()->get(); // Example: gets the newest ones first

        return view('livewire.frontend.home.testimonial.index', [
            'section' => $section,
            'platforms' => $platforms,
            'testimonials' => $testimonials,
        ]);
    }
}