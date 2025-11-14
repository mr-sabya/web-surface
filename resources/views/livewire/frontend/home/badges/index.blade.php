<section class="badges-section pad-tb">
    <div class="container">
        {{-- Only display the header if section data exists --}}
        @if ($section)
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading w-tdxt">
                    <span>{{ $section->subtitle }}</span>
                    <h2>{{ $section->title }}</h2>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            {{-- Loop through each badge from the database --}}
            @forelse ($badges as $badge)
            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay="{{ ($loop->index * 0.2) + 0.2 }}s">
                <div class="badges-content">
                    {{-- Use the asset helper to get the correct image path from storage --}}
                    <img src="{{ asset('storage/' . $badge->image) }}" alt="{{ $badge->title }}" class="img-fluid">
                    <p>{{ $badge->title }}</p>
                </div>
            </div>
            @empty
            {{-- This message will be shown if there are no badges in the database --}}
            <div class="col-12">
                <p class="text-center">No badges to display at the moment.</p>
            </div>
            @endforelse
        </div>

        {{-- Only display the CTA if section data exists --}}
        @if ($section)
        <div class="-cta-btn mt70">
            <div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s">
                {{-- Use {!! !!} to render HTML tags like <span> from the database --}}
                <p>{!! $section->cta_text !!}</p>
                <a href="{{ $section->cta_button_link ?? '#' }}" class="btn-main bg-btn2 lnk">
                    {{ $section->cta_button_text }}<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                </a>
            </div>
        </div>
        @endif
    </div>
</section>