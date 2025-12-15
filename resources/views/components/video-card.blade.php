<a href="{{ $link }}" target="_blank" class="text-decoration-none text-dark">
    <div class="position-relative">
        <img src="{{ $thumbnail }}" class="card-img-top" alt="{{ $title }}">

        <!-- Play Button -->
        <div
            class="position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 opacity-75">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="bi bi-play-fill text-white"
                viewBox="0 0 16 16">
                <path d="M5.5 3.5v9l7-4.5-7-4.5z" />
            </svg>
        </div>

        <!-- Duration -->
        <span class="position-absolute bottom-0 end-0 m-2 px-2 py-1 bg-dark bg-opacity-75 text-white small rounded">
            {{ $duration }}
        </span>
    </div>

    <div class="card-body">
        <h6 class="card-title text-truncate">{{ $title }}</h6>
        <p class="text-secondary small mb-0">{{ $date }}</p>
    </div>
</a>
