<x-app-layout>
    <main class="flex-grow">
        <div class="min-vh-100 bg-light">

            <section class="py-5" style="background-color: #e0f2fe;">
                <div class="container">
                    <h1 class="text-dark mb-3">Match Highlights</h1>
                    <p class="text-secondary fs-5">Watch the best moments from our recent matches</p>
                </div>
            </section>

            {{-- Feature video  --}}
            <section class="py-5">
                <div class="container">

                    <!-- Featured Video Card -->
                    <div class="card mb-4 shadow">
                        <div class="ratio ratio-16x9">
                            <iframe src="{{ asset('gallery/slide_pic/slide_pic3.webp') }}"
                                title="Life FC | Championship Victory"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Life FC WINNER | Championship Victory</h5>
                            <h6 class="card-title">Cambdoia League 2 Season 2023/24</h6>
                            <p class="card-text text-secondary">November 22, 2025</p>
                        </div>
                    </div>

                    {{-- Highlight card  --}}
                    <h2 class="mb-4">More Highlights</h2>
                    <div class="row g-4">
                        @foreach ($videos as $video)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm hover-shadow">
                                    <x-video-card :thumbnail="$video['thumbnail']" :title="$video['title']" :duration="$video['duration']"
                                        :date="$video['date']" :link="$video['link']" />
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
        </div>
    </main>
</x-app-layout>

<style>
    .hover-shadow:hover {
        box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, .15) !important;
        transition: box-shadow 0.3s;
    }
</style>
