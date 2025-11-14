<section class="work-category pad-tb">
    <div class="container">
        {{-- Only display the header if section data has been added in the backend --}}
        @if ($section)
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>{{ $section->subtitle }}</span>
                        <h2>{{ $section->title }}</h2>
                        <p>{{ $section->description }}</p>
                    </div>
                </div>
            </div>
        @endif

        <div class="row mt30">
            {{-- Loop through each industry from the database --}}
            @forelse ($industries as $industry)
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="{{ ($loop->index * 0.2) + 0.1 }}s">
                    <div class="industry-workfor hoshd">
                        {{-- Use the asset() helper to get the correct icon path from storage --}}
                        <img src="{{ asset('storage/' . $industry->icon) }}" alt="{{ $industry->name }}">
                        <h6>{{ $industry->name }}</h6>
                    </div>
                </div>
            @empty
                {{-- This message is shown if the 'industries' table is empty --}}
                <div class="col-12">
                    <p class="text-center">No industries to display at the moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>