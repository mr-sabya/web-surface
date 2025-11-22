<?php

namespace App\Livewire\Backend\Page;

use App\Models\AboutPage;
use Livewire\Component;
use Livewire\WithFileUploads;

class About extends Component
{
    use WithFileUploads;

    public $aboutPage;

    // MAIN FIELDS
    public $title, $sub_title, $content;
    public $image_1, $image_2;
    public $image_1_preview, $image_2_preview;

    // COUNTERS
    public $counster_1, $counster_1_text;
    public $counster_2, $counster_2_text;
    public $counster_3, $counster_3_text;

    // MISSION / VISION
    public $mission_vision_heading, $mission_vision_text;
    public $mission, $mission_icon, $vision, $vision_icon;
    public $mission_icon_preview, $vision_icon_preview;

    // SECTIONS
    public $philosophy_section_title, $philosophy_section_subtitle;
    public $whychoose_section_title, $whychoose_section_subtitle;
    public $timeline_section_title, $timeline_section_subtitle;
    public $team_section_title, $team_section_subtitle;


    public function mount()
    {
        $this->aboutPage = AboutPage::first();

        if (!$this->aboutPage) {
            $this->aboutPage = AboutPage::create([]);
        }

        // MAIN
        $this->title = $this->aboutPage->title;
        $this->sub_title = $this->aboutPage->sub_title;
        $this->content = $this->aboutPage->content;

        $this->image_1_preview = $this->aboutPage->image_1;
        $this->image_2_preview = $this->aboutPage->image_2;

        // COUNTERS
        $this->counster_1 = $this->aboutPage->counster_1;
        $this->counster_1_text = $this->aboutPage->counster_1_text;
        $this->counster_2 = $this->aboutPage->counster_2;
        $this->counster_2_text = $this->aboutPage->counster_2_text;
        $this->counster_3 = $this->aboutPage->counster_3;
        $this->counster_3_text = $this->aboutPage->counster_3_text;

        // MISSION / VISION
        $this->mission_vision_heading = $this->aboutPage->mission_vision_heading;
        $this->mission_vision_text = $this->aboutPage->mission_vision_text;

        $this->mission = $this->aboutPage->mission;
        $this->mission_icon_preview = $this->aboutPage->mission_icon;

        $this->vision = $this->aboutPage->vision;
        $this->vision_icon_preview = $this->aboutPage->vision_icon;

        // SECTIONS
        $this->philosophy_section_title = $this->aboutPage->philosophy_section_title;
        $this->philosophy_section_subtitle = $this->aboutPage->philosophy_section_subtitle;

        $this->whychoose_section_title = $this->aboutPage->whychoose_section_title;
        $this->whychoose_section_subtitle = $this->aboutPage->whychoose_section_subtitle;

        $this->timeline_section_title = $this->aboutPage->timeline_section_title;
        $this->timeline_section_subtitle = $this->aboutPage->timeline_section_subtitle;

        $this->team_section_title = $this->aboutPage->team_section_title;
        $this->team_section_subtitle = $this->aboutPage->team_section_subtitle;
    }


    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'content' => 'nullable',

            'image_1' => 'nullable|image|max:1024',
            'image_2' => 'nullable|image|max:1024',

            'counster_1' => 'nullable',
            'counster_1_text' => 'nullable|string|max:255',
            'counster_2' => 'nullable',
            'counster_2_text' => 'nullable|string|max:255',
            'counster_3' => 'nullable',
            'counster_3_text' => 'nullable|string|max:255',

            'mission_vision_heading' => 'nullable|string|max:255',
            'mission_vision_text' => 'nullable',

            'mission' => 'nullable',
            'mission_icon' => 'nullable|image|max:1024',
            'vision' => 'nullable',
            'vision_icon' => 'nullable|image|max:1024',

            'philosophy_section_title' => 'nullable|string|max:255',
            'philosophy_section_subtitle' => 'nullable|string|max:255',

            'whychoose_section_title' => 'nullable|string|max:255',
            'whychoose_section_subtitle' => 'nullable|string|max:255',

            'timeline_section_title' => 'nullable|string|max:255',
            'timeline_section_subtitle' => 'nullable|string|max:255',

            'team_section_title' => 'nullable|string|max:255',
            'team_section_subtitle' => 'nullable|string|max:255',
        ]);

        // SAVE TEXT FIELDS
        $this->aboutPage->update([
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'content' => $this->content,

            'counster_1' => $this->counster_1,
            'counster_1_text' => $this->counster_1_text,
            'counster_2' => $this->counster_2,
            'counster_2_text' => $this->counster_2_text,
            'counster_3' => $this->counster_3,
            'counster_3_text' => $this->counster_3_text,

            'mission_vision_heading' => $this->mission_vision_heading,
            'mission_vision_text' => $this->mission_vision_text,

            'mission' => $this->mission,
            'vision' => $this->vision,

            'philosophy_section_title' => $this->philosophy_section_title,
            'philosophy_section_subtitle' => $this->philosophy_section_subtitle,

            'whychoose_section_title' => $this->whychoose_section_title,
            'whychoose_section_subtitle' => $this->whychoose_section_subtitle,

            'timeline_section_title' => $this->timeline_section_title,
            'timeline_section_subtitle' => $this->timeline_section_subtitle,

            'team_section_title' => $this->team_section_title,
            'team_section_subtitle' => $this->team_section_subtitle,
        ]);

        // SAVE IMAGES
        if ($this->image_1) {
            $this->aboutPage->image_1 = $this->image_1->store('about', 'public');
        }
        if ($this->image_2) {
            $this->aboutPage->image_2 = $this->image_2->store('about', 'public');
        }
        if ($this->mission_icon) {
            $this->aboutPage->mission_icon = $this->mission_icon->store('about/icons', 'public');
        }
        if ($this->vision_icon) {
            $this->aboutPage->vision_icon = $this->vision_icon->store('about/icons', 'public');
        }

        $this->aboutPage->save();

        session()->flash('message', 'About Page updated successfully!');
    }


    public function render()
    {
        return view('livewire.backend.page.about');
    }
}
