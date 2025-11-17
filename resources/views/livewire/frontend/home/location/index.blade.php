<section class="our-office pad-tb">
    <div class="container">
        {{-- Only display the header if section data has been added in the backend --}}
        @if ($section)
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>{{ $section->title }}</span>
                        <h2>{{ $section->subtitle }}</h2>
                    </div>
                </div>
            </div>
        @endif

        <div class="row justify-content-center">
            {{-- Loop through each office location from the database --}}
            @forelse ($offices as $office)
                <div class="col-lg-4 col-sm-6 shape-loc wow fadeIn" data-wow-delay="{{ ($loop->index * 0.2) + 0.2 }}s">
                    <div class="office-card hoshd">
                        <div class="landscp">
                            {{-- Use the asset() helper for the correct storage path --}}
                            <img src="{{ asset('storage/' . $office->image) }}" alt="location {{ $office->country }}" class="img-fluid" />
                        </div>
                        <div class="info-text-div">
                            <h4>{{ $office->country }}</h4>
                            <h6 class="mt10">{{ $office->office_type }}</h6>
                            <p>{{ $office->address }}</p>
                            <ul class="-address-list mt10">
                                <li><a href="mailto:{{ $office->email }}"><i class="fas fa-envelope"></i> {{ $office->email }}</a></li>
                                <li><a href="tel:{{ $office->phone }}"><i class="fas fa-phone-alt"></i> {{ $office->phone }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @empty
                {{-- This message will be shown if the 'offices' table is empty --}}
                <div class="col-12">
                    <p class="text-center">Our office locations will be updated soon.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>