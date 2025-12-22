<section class="py-16 pt-5" style="background-color: #f0f8ff;"> 
    <div class="container">
        <div class="row align-items-center">

            <!-- Text Content -->
            <div class="col-md-6 mb-6 mb-md-0">
                <!-- Chip Label -->
                <div class="mb-3">
                    <span class="d-inline-block px-3 py-1 rounded-pill fw-medium text-primary"
                        style="background-color: #d0e7ff;">
                        About Us
                    </span>
                </div>

                <h2 class="mb-4">About Life Football Club</h2>
            
                <p class="text-secondary mb-3">
                    Founded with a vision to inspire and unite, Life Football Club has become a symbol of excellence in
                    the world of football. Our commitment to developing talent and fostering team spirit has led us to
                    numerous victories.
                </p>
                <p class="text-secondary mb-4">
                    We pride ourselves on our strong community values, dedication to the sport, and the unwavering
                    support of our fans. Together, we continue to write our story on and off the pitch.
                </p>

                <!-- Stats Cards -->
                <div class="d-flex justify-content-between flex-wrap" style="gap: 1rem;">
                    <div class="stats-card text-center p-3 rounded-3 flex-fill">
                        <div class="fs-3 fw-bold text-primary mb-1">1</div>
                        <div class="text-secondary small">Trophies</div>
                    </div>

                    <div class="stats-card text-center p-3 rounded-3 flex-fill">
                        <div class="fs-3 fw-bold text-primary mb-1">5K+</div>
                        <div class="text-secondary small">Fans</div>
                    </div>

                    <div class="stats-card text-center p-3 rounded-3 flex-fill">
                        <div class="fs-3 fw-bold text-primary mb-1">11</div>
                        <div class="text-secondary small">Players</div>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('slide_pic/slide_pic1.webp') }}" alt="Team Celebration"
                    class="img-fluid rounded-3 shadow" style="max-height: 500px; width: 100%; object-fit: cover;">
            </div>


        </div>
    </div>
</section>

<style>
    .stats-card {
        background-color: #d0e7ff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .stats-card:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
</style>
