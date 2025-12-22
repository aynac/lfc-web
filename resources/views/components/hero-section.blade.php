<div class="position-relative text-white d-flex align-items-center" style="min-height: 100vh;">

    <!-- Background Image + Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="
             background: url('{{ asset('slide_pic/slide_pic3.webp') }}') center/cover no-repeat;
             background-size: cover;
             background-position: center;
             background-attachment: fixed;
             filter: brightness(0.5) blur(2px);
             z-index: 0;
         ">
    </div>

    <!-- Content -->
    <div class="position-relative px-5" style="max-width: 720px; z-index: 1; text-align: left;">
        <!-- Season Badge -->
        <div class="d-inline-block px-3 py-1 mb-3 border rounded-pill border-white text-white"
            style="background-color: rgba(255,255,255,0.2);">
            ⚽ Season 2024/25
        </div>

        <!-- Title -->
        <h1 class="display-7 fw-bold mb-2 text-shadow">Welcome to Life Football Club</h1>

        <!-- Description -->
        <p class="lead mb-4 text-white-75 text-shadow">
            Experience the passion, dedication, and excellence that defines our club. Join us on our journey to
            greatness and become part of our legacy.
        </p>

        <!-- Action Buttons -->
        <div class="d-flex flex-wrap gap-3 mt-3">
            <a href="/store" class="btn btn-light text-primary fw-light shadow-lg"
                style="font-size: 1.25rem; padding: 1rem 2rem; border-radius: 0.75rem;">
                Explore Store
                <i class="bi bi-arrow-right ms-2"></i>
            </a>
            <a href="/fixture" class="btn btn-outline-light fw-light"
                style="font-size: 1.25rem; padding: 1rem 2rem; border-radius: 0.75rem;">
                View Fixtures
            </a>
        </div>
    </div>
</div>
