<x-app-layout>
    {{-- Hero Section --}}
    <section class="position-relative py-5 overflow-hidden"
        style="background: linear-gradient(to bottom right, #d0e7ff, #7dcaf9, #d0e7ff);">

        {{-- Blurred Circles --}}
        <div class="position-absolute w-100 h-100" style="opacity: 0.2; top: 0; left: 0; pointer-events: none;">
            <div class="position-absolute bg-white rounded-circle"
                style="width: 24rem; height: 24rem; top: 0; right: 25%; filter: blur(80px);"></div>
            <div class="position-absolute bg-white rounded-circle"
                style="width: 24rem; height: 24rem; bottom: 0; left: 25%; filter: blur(80px);"></div>
        </div>

        {{-- Text Content --}}
        <div class="container position-relative text-center" style="z-index: 2;">
            {{-- Chip - Photo Gallery --}}
            <div class="d-inline-block px-4 py-2 mb-4 rounded-pill border"
                style="background: rgb(145, 189, 225); backdrop-filter: blur(6px); border-color: rgba(255,255,255,0.3);">
                <span class="text-white-90 small fw-medium">📸 Photo Gallery</span>
            </div>

            {{-- Title --}}
            <h1 class="text-white mb-3">Life Football Club Gallery</h1>

            {{-- Description --}}
            <p class="text-white fs-5 mx-auto" style="max-width: 720px;">
                Explore our collection of memorable moments, from match-winning goals
                to behind-the-scenes glimpses of life at the club.
            </p>
        </div>
    </section>

    {{-- Filter Buttons --}}
    <section class="py-4 bg-white border-bottom sticky-top">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <button class="btn btn-primary position-relative px-4 py-2 rounded-pill filter-btn"
                    data-category="all">All Photos</button>
                <button class="btn btn-light px-4 py-2 rounded-pill filter-btn" data-category="hun_sen_cup">Hun Sen Cup
                    (2023)</button>
                <button class="btn btn-light px-4 py-2 rounded-pill filter-btn" data-category="pp_trip">Phnom Penh
                    Trip</button>
                <button class="btn btn-light px-4 py-2 rounded-pill filter-btn" data-category="prop_p">Proposal
                    Presentation</button>
                <button class="btn btn-light px-4 py-2 rounded-pill filter-btn" data-category="match_day">Match
                    Day</button>
                <button class="btn btn-light px-4 py-2 rounded-pill filter-btn" data-category="team_dinner">Team
                    Dinner</button>
            </div>
        </div>
    </section>

    {{-- <pre>{{ print_r($gallery) }}</pre> --}}

    {{-- Photo Grid --}}
    <section class="py-5">
        <div class="container">
            <div class="row g-3">
                @foreach ($gallery as $category => $images)
                    @foreach ($images as $image)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 gallery-item" data-category="{{ $category }}">
                            <div class="card overflow-hidden rounded-3"
                                style="background-color: rgba(173, 216, 230, 0.3);">
                                <div class="position-relative">
                                    <img src="{{ asset($image) }}" class="card-img-top img-fluid rounded-3"
                                        alt="{{ $category }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>

{{-- JS for Filter --}}
<script>
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    function filterGallery(category) {
        galleryItems.forEach(item => {
            item.style.display = (category === 'all' || item.dataset.category === category) ? 'block' : 'none';
        });

        // Toggle button styles
        filterButtons.forEach(b => b.classList.remove('btn-primary'));
        filterButtons.forEach(b => b.classList.add('btn-light'));
        document.querySelector(`.filter-btn[data-category="${category}"]`).classList.add('btn-primary');
        document.querySelector(`.filter-btn[data-category="${category}"]`).classList.remove('btn-light');
    }

    // Set default filter on page load
    document.addEventListener('DOMContentLoaded', () => {
        filterGallery('all'); // show all images initially
    });

    // Add click event listeners
    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterGallery(btn.dataset.category);
        });
    });
</script>
<style>
    .gallery-item {
        display: block;
        /* make sure they are visible initially */
    }
</style>
