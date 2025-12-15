<section class="py-5 position-relative overflow-hidden" 
         style="background: linear-gradient(135deg, #0f172a, #1e293b, #0f172a);">

    <!-- Blur Background Circles -->
    <div class="position-absolute inset-0 w-100 h-100" style="opacity: 0.12; pointer-events: none;">
        <!-- Top Blur -->
        <div class="position-absolute rounded-circle"
             style="
                 top: -50px;
                 left: 25%;
                 width: 380px; height: 380px;
                 background: #3b82f6;
                 filter: blur(100px);
             ">
        </div>

        <!-- Bottom Blur -->
        <div class="position-absolute rounded-circle"
             style="
                 bottom: -50px;
                 right: 25%;
                 width: 380px; height: 380px;
                 background: #2563eb;
                 filter: blur(100px);
             ">
        </div>
    </div>

    <!-- Content -->
    <div class="container text-center position-relative">

        <!-- Small Pill Tag -->
        <div class="d-inline-block px-4 py-2 rounded-pill mb-4"
             style="
                 background: rgba(255,255,255,0.1); 
                 backdrop-filter: blur(8px);
                 border: 1px solid rgba(255,255,255,0.2);
             ">
            <span class="text-white small fw-medium">🎥 Video Highlights</span>
        </div>

        <!-- Heading -->
        <h2 class="text-white mb-4 fw-bold">Relive the Best Moments</h2>

        <!-- Subtitle -->
        <p class="text-light mx-auto mb-4" style="max-width: 650px; font-size: 1.2rem;">
            Watch our top match highlights and experience the excitement, passion, 
            and unforgettable goals all over again.
        </p>

        <!-- Gradient Button -->
        <a href="/highlight"
           class="btn btn-lg px-5 py-3 d-inline-flex align-items-center text-white shadow-lg"
           style="
               background: linear-gradient(to right, #83b0f5, #4aadef);
               border-radius: 14px;
               font-size: 1.25rem;
               transition: .35s;
           "
           onmouseover="this.style.transform='scale(1.05)'"
           onmouseout="this.style.transform='scale(1)'"
        >
            Explore Highlights
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" 
                 fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round"
                 class="ms-2">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
            </svg>
        </a>

    </div>

</section>
