<section class="py-5" style="background: #f8fafc;">
    <div class="container">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap">
            <div>
                <span class="d-inline-block px-3 py-1 bg-success text-white rounded-pill mb-2"
                    style="font-size: 0.8rem;"> 👀 New Arrivals</span>
                <h2 class="h3 mb-1">Latest Collection</h2>
                <p class="text-muted mb-0">Fresh styles just landed</p>
            </div>
            <a href="{{ route('user.product.index') }}"
                class="text-decoration-none fw-medium d-flex align-items-center mt-2 mt-md-0" style="color : rgb(81, 174, 205);">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                    stroke="currentColor" stroke-width="2" class="ms-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="m12 5 7 7-7 7" />
                </svg>
            </a>
        </div>

        {{-- New Arrival Product List --}}
        <div class="row g-4">
            <x-product-card
                image="{{asset('gallery/jersey/HomePlayerFront.png')}}"
                title="Home Player Jersey"
                price="$10.00"
                badge="New"
                :sale="true"
            />

        </div>
    </div>
</section>

<style>
    .card-img-top:hover {
        transform: scale(1.05);
    }
</style>
