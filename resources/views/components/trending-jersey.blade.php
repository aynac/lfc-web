<section class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <!-- Heading -->
        <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap">
            <div>
                <span class="d-inline-block px-3 py-1 rounded-pill mb-2 text-dark-blue"
                    style="background-color: #e0f2fe;">
                    🔥 Trending
                </span>
                <h2 class="h3 mb-1">Popular Sport Uniforms</h2>
                <p class="text-muted mb-0">Get your official Life FC merchandise</p>
            </div>
            <a href="{{ route('user.product.index') }}"
                class="text-decoration-none fw-medium d-flex align-items-center" style="color : rgb(81, 174, 205);">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                    stroke="currentColor" stroke-width="2" class="ms-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="m12 5 7 7-7 7" />
                </svg>
            </a>
        </div>

        <!-- Cards -->
        <div class="row g-4">

            <x-product-card
                image="{{asset('storage/gallery/jersey/AwayGKfront.png')}}"
                title="Away Goal Keeper Jersey"
                price="$10.00"
                badge="Hot"
                :sale="true"
            />

            <x-product-card
                image="{{asset('storage/gallery/jersey/AwayPlayerFront.png')}}"
                title="Away Player Jersey"
                price="$10.00"
                badge="Hot"
                :sale="true"
            />

            <x-product-card
                image="{{asset('storage/gallery/jersey/HomePLayerFront.png')}}"
                title="Home Player Jersey"
                price="$10.00"
                badge="Hot"
                :sale="true"
            />

            <x-product-card
                image="{{asset('storage/gallery/jersey/HomeGKFront.png')}}"
                title="Home Goal Keeper Jersey"
                price="$10.00"
                badge="Hot"
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
