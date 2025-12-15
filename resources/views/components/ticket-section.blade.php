<section class="py-5 mt-5 " style="background-color: #e6f0ff; position: relative; overflow: hidden;">
    <!-- Decorative Blurs (optional) -->
    <div style="position: absolute; top: -50px; right: -50px; width: 300px; height: 300px; background-color: rgba(100, 149, 237, 0.3); border-radius: 50%; filter: blur(80px);"></div>
    <div style="position: absolute; bottom: -50px; left: -50px; width: 300px; height: 300px; background-color: rgba(70, 130, 180, 0.3); border-radius: 50%; filter: blur(80px);"></div>

    <div class="container position-relative">
        <div class="bg-white rounded-4 shadow p-4 p-md-5 border" style="border-color: #cce0ff;">
            <div class="row align-items-center g-4">
                
                <!-- Left: Icon + Text -->
                <div class="col-md-8 d-flex align-items-center">
                    <!-- Icon -->
                    <div class="position-relative me-4">
                        <div class="d-flex justify-content-center align-items-center rounded-3 shadow" style="width: 64px; height: 64px; background: linear-gradient(135deg, #4a90e2, #357ab7);">
                            <!-- Ticket SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5v2"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17v2"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 11v2"/>
                            </svg>
                        </div>
                        <div class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-white rounded-circle"></div>
                    </div>

                    <div>
                        <h3 class="mb-2">Get Your Match Tickets</h3>
                        <p class="mb-2">Don't miss out on the action. Book your seats now and be part of the incredible atmosphere!</p>
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-muted small">Next Match</span>
                            <span class="badge bg-success text-light rounded-pill">Available</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Button -->
                <div class="col-md-4 text-md-end">
                    @auth
                        <!-- Logged-in users go directly to ticket site -->
                        <a href="https://fctickets.lifeun.edu.kh/" class="btn btn-lg px-4"
                        style="background-color: #cce0ff; color: rgb(74, 77, 78);">
                            Purchase Your Ticket
                        </a>
                    @else
                        <!-- Guests are redirected to login page first -->
                        <a href="{{ route('login') }}" class="btn btn-lg px-4"
                        style="background-color: #cce0ff; color: rgb(74, 77, 78);">
                            Purchase Your Ticket
                        </a>
                    @endauth
                </div>

            </div>
        </div>
    </div>
</section>
