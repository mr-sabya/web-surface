<section class="testinomial-section-app bg-none pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                @if ($section)
                    <div class="common-heading text-l">
                        <span>{{ $section->subtitle }}</span>
                        <h2>{{ $section->title }}</h2>
                    </div>
                    <div class="review-title-ref mt40">
                        <h4>{{ $section->review_platform_title }}</h4>
                    </div>
                @endif
                <div class="row mt30 justify-content-center">
                    {{-- Loop for the review platform icons --}}
                    @forelse ($platforms as $platform)
                        <a href="{{ $platform->link ?? '#' }}" target="_blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay="{{ ($loop->index * 0.2) + 0.2 }}s">
                            <img src="{{ asset('storage/' . $platform->image) }}" alt="{{ $platform->name }}" class="img-fluid">
                        </a>
                    @empty
                        <p>No review platforms to show.</p>
                    @endforelse
                </div>
            </div>
            <div class="col-lg-7">
                <div class="pl50">
                    <div class="shape shape-a1"><img src="{{ url('assets/frontend/images/shape/shape-3.svg') }}" alt="shape"></div>
                    <div class="testimonial-card-a tcd owl-carousel">
                        {{-- Loop for the actual testimonials --}}
                        @forelse ($testimonials as $testimonial)
                            <div class="testimonial-card">
                                <div class="tt-text">
                                    <p>{{ $testimonial->content }}</p> {{-- Assuming your column is named 'quote' --}}
                                </div>
                                <div class="client-thumbs mt30">
                                    <div class="media v-center upset">
                                        <div class="user-image bdr-radius">
                                            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="img-fluid rounded-circle" /> {{-- Assuming column names --}}
                                        </div>
                                        <div class="media-body user-info v-center">
                                            <h5>{{ $testimonial->name }}</h5>
                                            <p>{{ $testimonial->company }}, {{ $testimonial->position }}</p>
                                            <i class="fas fa-quote-right posiqut"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="testimonial-card">
                                <p class="text-center">No testimonials yet. Be the first to review us!</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>