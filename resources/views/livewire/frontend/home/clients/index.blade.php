<section class="clients-section-app pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading text-w">
                    <span>{{ $client_section->title ?? 'Our happy customers' }}</span>
                    <h2 class="mb30">{{ $client_section->subtitle ?? 'Some of our Clients' }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="client-logoset">
                    <ul class="row text-center clearfix apppg">
                        {{-- Loop through each client and display their logo and name --}}
                        @forelse ($clients as $client)
                            <li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay="{{ ($loop->index + 1) * 0.2 }}s">
                                <div class="brand-logo hoshd">
                                    {{-- The logo is now a clickable link to the client's website --}}
                                    <a href="{{ $client->website }}" target="_blank" rel="noopener noreferrer">
                                        {{-- The image source is dynamically set from the database --}}
                                        <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }} Logo" class="img-fluid">
                                    </a>
                                </div>
                                <p>{{ $client->name }}</p>
                            </li>
                        @empty
                            {{-- This message will be shown if there are no clients in the database --}}
                            <div class="col-12">
                                <p class="text-center text-white">No clients to display at the moment.</p>
                            </div>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>