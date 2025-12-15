<x-app-layout>
    <main class="flex-grow-1">
        <div class="min-vh-100 bg-light">

            <!-- HERO SECTION -->
            <section class="position-relative" style="height: 600px; background-color: #111827; overflow:hidden;">
                <!-- Background Image -->
                <div class="position-absolute top-0 start-0 w-100 h-100">
                    <img src="{{ Storage::url('gallery/slide_pic/slide_pic3.webp') }}"
                        class="w-100 h-100 object-fit-cover" style="opacity: 0.5;" alt="Life FC Wins Championship Title">
                </div>

                <!-- Hero Content -->
                <div class="position-relative d-flex align-items-center h-100">
                    <div class="container">
                        <div class="col-lg-6">

                            <!-- Chip -->
                            <span class="px-3 py-2 rounded-pill text-white mb-3 d-inline-block"
                                style="background-color:#0284c7;">
                                Featured Achievement
                            </span>

                            <h1 class="text-white mb-3">Life FC Wins Championship Title</h1>

                            <div class="d-flex align-items-center text-light mb-3">
                                <i class="bi bi-calendar-event me-2"></i> November 20, 2025
                            </div>

                            <p class="text-light fs-5">
                                In an incredible display of skill and determination, Life Football Club secured
                                the championship title with a stunning 3-1 victory over their rivals.
                            </p>

                        </div>
                    </div>
                </div>
            </section>

            <!-- LATEST NEWS SECTION -->
            <section class="py-5">
                <div class="container">
                    <h2 class="text-dark mb-4">Latest News</h2>

                    <div class="row g-4">

                        <!-- Card -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100 hover-shadow">
                                <div class="ratio ratio-16x9 bg-light overflow-hidden">
                                    <img src="{{ Storage::url('gallery/news_pic/news_pic1.webp') }}"
                                        class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="card-body">
                                    <div class="text-muted small mb-2">
                                        <i class="bi bi-calendar-event me-1"></i> November 18, 2025
                                    </div>
                                    <h5 class="card-title">Life Football Club has Officially been elected as an observe
                                        member of the Football Federation of Cambodia.
                                    </h5>

                                    <!-- Short description -->
                                    <p class="card-text text-secondary" id="short-desc-1">
                                        Life Football Club was elected as an observe member of the Football Federation
                                        of Cambodia.
                                    </p>

                                    <!-- Full description collapse -->
                                    <div class="collapse" id="full-desc-1">
                                        <p class="card-text text-secondary">
                                            Ladies and Gentlemen,

                                            Today at the FFC Congress 2023 ceremony (March 11th of 2023), Life Football
                                            Club of Preah Sihanouk province have officially been elected as an observe
                                            member of the Football Federation of Cambodia.

                                            We thank the Football Federation of Cambodia, the Cambodian Premier League,
                                            and many others for making this possible. We thank all members, players, and
                                            staff of Life Football Club, and most importantly,
                                            we want to congratulate to you, our province, Preah Sihanouk province, this
                                            is for you Sihanouk province!
                                        </p>
                                    </div>

                                    <!-- Toggle button -->
                                    <a class="text-primary" data-bs-toggle="collapse" href="#full-desc-1" role="button"
                                        aria-expanded="false" aria-controls="full-desc-1">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100 hover-shadow">
                                <div class="ratio ratio-16x9 bg-light overflow-hidden">
                                    <img src="{{ Storage::url('gallery/news_pic/news_pic2.webp') }}"
                                        class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="card-body">
                                    <div class="text-muted small mb-2">
                                        <i class="bi bi-calendar-event me-1"></i> November 18, 2025
                                    </div>
                                    <h5 class="card-title">The official Life FC SHV Inauguration Ceremony 2023 media
                                        partner, Peak Digital Co., Ltd.</h5>

                                    <!-- Short description -->
                                    <p class="card-text text-secondary" id="short-desc-2">
                                        Life Football Club and VM Sport have officially signed a partnership...
                                    </p>

                                    <!-- Full description collapse -->
                                    <div class="collapse" id="full-desc-2">
                                        <p class="card-text text-secondary">
                                            The official Life FC SHV Inauguration Ceremony 2023 media partner, Peak
                                            Digital Co., Ltd.
                                            Thank you so much for capturing the historical and memorable day through
                                            photos, videos, and interviews of Life FC SHV!
                                        </p>
                                    </div>

                                    <!-- Toggle button -->
                                    <a class="text-primary" data-bs-toggle="collapse" href="#full-desc-2" role="button"
                                        aria-expanded="false" aria-controls="full-desc-2">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100 hover-shadow">
                                <div class="ratio ratio-16x9 bg-light overflow-hidden">
                                    <img src="{{ Storage::url('gallery/news_pic/news_pic3.webp') }}"
                                        class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="card-body">
                                    <div class="text-muted small mb-2">
                                        <i class="bi bi-calendar-event me-1"></i> November 18, 2025
                                    </div>
                                    <h5 class="card-title">Official MOU between Life Football Club and the Football
                                        Federation of Cambodia.</h5>

                                    <!-- Short description -->
                                    <p class="card-text text-secondary" id="short-desc-3">
                                        Life Football Club Official MOU between Life Football Club and the Football
                                        Federation of Cambodia.
                                    </p>

                                    <!-- Full description collapse -->
                                    <div class="collapse" id="full-desc-3">
                                        <p class="card-text text-secondary">
                                            The agreement will allow the Sihanoukville Football Academy to merge with
                                            Life Football Club's Youth Academy. Providing the opportunity for further
                                            strength in football development in Preah Sihanouk Province.

                                            The youth academy includes U18, U15, U13, and women's football U15 team.

                                            General Secretary of Life Football Club, Peter Koo:

                                            "We are committed to the development of youth football in our province. We
                                            hope to develop the youth system for both men's and women's football in our
                                            province with professionalism. Our goal, as a club, is to provide the
                                            platform and opportunity for Preah Sihanouk Province boys and girls to dream
                                            of becoming professional football players and to bring happiness to many who
                                            love the sport. This is a monumental event that aligns with our strategy. We
                                            will do our best to help educate, develop, and provide the football
                                            technical support for the boys and girls in our province. Thank you to the
                                            Football Federation of Cambodia for trusting us and for allowing us to work
                                            together with them!"
                                        </p>
                                    </div>

                                    <!-- Toggle button -->
                                    <a class="text-primary" data-bs-toggle="collapse" href="#full-desc-3" role="button"
                                        aria-expanded="false" aria-controls="full-desc-3">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100 hover-shadow">
                                <div class="ratio ratio-16x9 bg-light overflow-hidden">
                                    <img src="{{ Storage::url('gallery/news_pic/news_pic4.webp') }}"
                                        class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="card-body">
                                    <div class="text-muted small mb-2">
                                        <i class="bi bi-calendar-event me-1"></i> November 18, 2025
                                    </div>
                                    <h5 class="card-title">Partnership with MHM Sport Club</h5>

                                    <!-- Short description -->
                                    <p class="card-text text-secondary" id="short-desc-4">
                                        Life Football Club Partnership with MHM Sport Club
                                    </p>

                                    <!-- Full description collapse -->
                                    <div class="collapse" id="full-desc-4">
                                        <p class="card-text text-secondary">
                                            Life Football Club is very satisfied and grateful to MHM Sport Club for
                                            their partnership in providing a training ground for both our senior and
                                            youth teams. This collaboration has significantly improved the quality of
                                            our training and field maintenance, helping us prepare for the upcoming
                                            Cambodian Premier League 2024-2025 season.
                                        </p>
                                    </div>

                                    <!-- Toggle button -->
                                    <a class="text-primary" data-bs-toggle="collapse" href="#full-desc-4" role="button"
                                        aria-expanded="false" aria-controls="full-desc-4">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100 hover-shadow">
                                <div class="ratio ratio-16x9 bg-light overflow-hidden">
                                    <img src="{{ Storage::url('gallery/news_pic/news_pic5.webp') }}"
                                        class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="card-body">
                                    <div class="text-muted small mb-2">
                                        <i class="bi bi-calendar-event me-1"></i> November 18, 2025
                                    </div>
                                    <h5 class="card-title">Partnership with MHM Sport Club</h5>

                                    <!-- Short description -->
                                    <p class="card-text text-secondary" id="short-desc-5">
                                        Life Football Club Partnership with MHM Sport Club
                                    </p>

                                    <!-- Full description collapse -->
                                    <div class="collapse" id="full-desc-5">
                                        <p class="card-text text-secondary">
                                            Life Football Club is very satisfied and grateful to MHM Sport Club for
                                            their partnership in providing a training ground for both our senior and
                                            youth teams. This collaboration has significantly improved the quality of
                                            our training and field maintenance, helping us prepare for the upcoming
                                            Cambodian Premier League 2024-2025 season.
                                        </p>
                                    </div>

                                    <!-- Toggle button -->
                                    <a class="text-primary" data-bs-toggle="collapse" href="#full-desc-5"
                                        role="button" aria-expanded="false" aria-controls="full-desc-5">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100 hover-shadow">
                                <div class="ratio ratio-16x9 bg-light overflow-hidden">
                                    <img src="{{ Storage::url('gallery/news_pic/news_pic6.webp') }}"
                                        class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="card-body">
                                    <div class="text-muted small mb-2">
                                        <i class="bi bi-calendar-event me-1"></i> November 18, 2025
                                    </div>
                                    <h5 class="card-title">Official Photos of Manager Prak Sovannara as Our Manager.
                                    </h5>

                                    <!-- Short description -->
                                    <p class="card-text text-secondary" id="short-desc-6">
                                        Life Football Announc the new Manager
                                    </p>

                                    <!-- Full description collapse -->
                                    <div class="collapse" id="full-desc-6">
                                        <p class="card-text text-secondary">
                                            Ladies and Gentlemen,

                                            Today at the FFC Congress 2023 ceremony (March 11th of 2023), Life Football
                                            Club of Preah Sihanouk province have officially been elected as an observe
                                            member of the Football Federation of Cambodia.

                                            We thank the Football Federation of Cambodia, the Cambodian Premier League,
                                            and many others for making this possible. We thank all members, players, and
                                            staff of Life Football Club, and most importantly,
                                            we want to congratulate to you, our province, Preah Sihanouk province, this
                                            is for you Sihanouk province!
                                        </p>
                                    </div>

                                    <!-- Toggle button -->
                                    <a class="text-primary" data-bs-toggle="collapse" href="#full-desc-6"
                                        role="button" aria-expanded="false" aria-controls="full-desc-6">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100 hover-shadow">
                                <div class="ratio ratio-16x9 bg-light overflow-hidden">
                                    <img src="{{ Storage::url('gallery/news_pic/news_pic7.webp') }}"
                                        class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="card-body">
                                    <div class="text-muted small mb-2">
                                        <i class="bi bi-calendar-event me-1"></i> November 18, 2025
                                    </div>
                                    <h5 class="card-title"> A Memorandum of Understanding (MoU) was signed between Life
                                        Football Club Sihanoukville and Bay of Lights</h5>

                                    <!-- Short description -->
                                    <p class="card-text text-secondary" id="short-desc-7">
                                        On August 9th, a Memorandum of Understanding (MoU) was signed between Life
                                        Football Club Sihanoukville and Bay of Lights
                                    </p>

                                    <!-- Full description collapse -->
                                    <div class="collapse" id="full-desc-7">
                                        <p class="card-text text-secondary">
                                            On August 9th, a Memorandum of Understanding (MoU) was signed between Life
                                            Football Club Sihanoukville and Bay of Lights, supported by Canopy Sands
                                            Development, a world-class entertainment and business venue located in
                                            Sihanoukville. Sihanoukville, Cambodia.

                                            Thank you for capturing this historic day of partnership. We look forward to
                                            journeying together for the betterment of Sihanoukville.
                                        </p>
                                    </div>

                                    <!-- Toggle button -->
                                    <a class="text-primary" data-bs-toggle="collapse" href="#full-desc-7"
                                        role="button" aria-expanded="false" aria-controls="full-desc-7">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100 hover-shadow">
                                <div class="ratio ratio-16x9 bg-light overflow-hidden">
                                    <img src="{{ Storage::url('gallery/slide_pic/slide_pic3.webp') }}"
                                        class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="card-body">
                                    <div class="text-muted small mb-2">
                                        <i class="bi bi-calendar-event me-1"></i> November 18, 2025
                                    </div>
                                    <h5 class="card-title"> WE ARE CHAMPIONS!!!</h5>

                                    <!-- Short description -->
                                    <p class="card-text text-secondary" id="short-desc-8">
                                        CAMBODIAN LEAGUE 2 SEASON 2023-2024!!
                                    </p>

                                    <!-- Full description collapse -->
                                    <div class="collapse" id="full-desc-8">
                                        <p class="card-text text-secondary">
                                            For Cambodia - CAMBODIAN LEAGUE 2 SEASON 2023-2024, we became STRONGER to be
                                            the CHAMPIONSHIP!!!
                                        </p>
                                    </div>

                                    <!-- Toggle button -->
                                    <a class="text-primary" data-bs-toggle="collapse" href="#full-desc-8"
                                        role="button" aria-expanded="false" aria-controls="full-desc-8">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100 hover-shadow">
                                <div class="ratio ratio-16x9 bg-light overflow-hidden">
                                    <img src="{{ Storage::url('gallery/news_pic/news_pic9.webp') }}"
                                        class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="card-body">
                                    <div class="text-muted small mb-2">
                                        <i class="bi bi-calendar-event me-1"></i> November 18, 2025
                                    </div>
                                    <h5 class="card-title">Official Technology Supplier Partnership</h5>

                                    <!-- Short description -->
                                    <p class="card-text text-secondary" id="short-desc-9">
                                        Life Football Club has met officially with the Official Technology Supplier
                                        Partnership.
                                    </p>

                                    <!-- Full description collapse -->
                                    <div class="collapse" id="full-desc-9">
                                        <p class="card-text text-secondary">
                                            Life Football Club is proud to partner with MyTeb, a technology company that
                                            focuses on education development in Cambodia.

                                            The club is committed to utilizing technology to advance the efficient
                                            administration workflow, data processing, and sports science.

                                            <br>
                                            >> Check Out their website <br>
                                            <a href="https://www.mytebtech.com/index.html">MYTEB TECH</a>
                                            
                                        </p>
                                    </div>

                                    <!-- Toggle button -->
                                    <a class="text-primary" data-bs-toggle="collapse" href="#full-desc-9"
                                        role="button" aria-expanded="false" aria-controls="full-desc-9">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-0 h-100 hover-shadow">
                                <div class="ratio ratio-16x9 bg-light overflow-hidden">
                                    <img src="{{ Storage::url('gallery/news_pic/news_pic10.webp') }}"
                                        class="w-100 h-100 object-fit-cover">
                                </div>
                                <div class="card-body">
                                    <div class="text-muted small mb-2">
                                        <i class="bi bi-calendar-event me-1"></i> November 18, 2025
                                    </div>
                                    <h5 class="card-title">Life Football Club Inauguration Ceremony</h5>

                                    <!-- Short description -->
                                    <p class="card-text text-secondary" id="short-desc-10">
                                        We are LFC SHV.
                                    </p>

                                    <!-- Full description collapse -->
                                    <div class="collapse" id="full-desc-10">
                                        <p class="card-text text-secondary">
                                            Life Football Club is proud to have this Inauguration Ceremony, we became one, as LFC SHV - In Sihanouk Ville, Cambodia
                                            <br>
                                            >> Check out our University Website <br>
                                            <a href="https://lifeun.edu.kh/">Life Univeristy</a>

                                        </p>
                                    </div>

                                    <!-- Toggle button -->
                                    <a class="text-primary" data-bs-toggle="collapse" href="#full-desc-10"
                                        role="button" aria-expanded="false" aria-controls="full-desc-10">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </section>

        </div>
    </main>
</x-app-layout>
