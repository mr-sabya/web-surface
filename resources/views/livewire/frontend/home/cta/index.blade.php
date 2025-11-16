<section class="app-cta pad-tb">
    <div class="container">
        @if ($section)
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading text-w">
                    <span>{{ $section->title }}</span>
                    <h2>{{ $section->subtitle }}</h2>
                    <a href="{{ $section->button_link ?? '#' }}" class="btn-main bg-btn4 lnk">
                        {{ $section->button_text }}<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                    </a>
                    <p class="cta-call">{{ $section->secondary_text }}
                        <a href="tel:{{ $section->phone_link }}">
                            <i class="fas fa-phone-alt"></i> {{ $section->phone_number }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
        @endif
    </div>
    <div class="shape shape-c1"></div>
    <div class="shape shape-c2"></div>
    <div class="shape shape-c3"></div>
</section>