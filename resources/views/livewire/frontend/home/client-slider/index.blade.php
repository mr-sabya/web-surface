<div class="weworkfor pt20 pb20 dark-bg2">
    <div class="container">
        <div class="logo-weworkfor owl-carousel">
            @forelse($clients as $client)
            <div class="items">
                <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}" class="img100w">
            </div>
            @empty
            <div class="items">
                <p class="text-center">No clients available at the moment.</p>
            </div>
            @endforelse

        </div>
    </div>
</div>