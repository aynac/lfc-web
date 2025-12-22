<x-app-layout>
    <main class="flex-grow-1">
        <!-- Header Section -->
        <section class="py-5" style="background-color:#e0f2fe;">
            <div class="container text-start">
                <h1 class="text-dark mb-3">Fixtures & Results</h1>
                <p class="text-secondary fs-5">Stay updated with our match schedule and latest results</p>
            </div>
        </section>
        <section class="py-5" style="background-color:#e0f2fe;">
            <div class="container">
            <a href="https://cpl-cambodia.com/fixtures" class="btn" style="background-color : #9ed8ff; color : rgb(72, 75, 75);">
                📅 Check The Official Match Fixture 
            </a>
            </div>
        </section>

        <!-- Filters -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-secondary">Competition</label>
                                <select id="filterCompetition" class="form-select">
                                    <option value="">All Competition</option>
                                    <option value="Cambodia Premier League">Cambodia Premier League</option>
                                    <option value="Cambodia Premier League 2">Cambodia Premier League 2</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary">Season</label>
                                <select id="filterSeason" class="form-select">
                                    <option value="">All Seasons</option>
                                    <option value="2025-2026">2025-2026</option>
                                    <option value="2024-2025">2024-2025</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Tab  --}}
                <ul class="nav nav-tabs mb-4" id="tabMenu">
                    <li class="nav-item"><a class="nav-link active text-primary fw-bold" href="#"
                            data-tab="fixtures">Fixtures</a></li>
                    <li class="nav-item"><a class="nav-link text-secondary" href="#"
                            data-tab="results">Results</a></li>
                    <li class="nav-item"><a class="nav-link text-secondary" href="#"
                            data-tab="standings">Standings</a></li>
                </ul>

                {{-- Tab Content  --}}
                <div id="tabContent">

                    {{-- Fixture  --}}
                    <div id="fixtures" class="tab-section">
                        <div id="fixtureContainer" class="d-flex flex-column gap-3">
                            @foreach ($matches as $m)
                                <div class="card border shadow-sm p-4 fixture-item"
                                    data-competition="{{ $m->competition }}" data-season="{{ $m->season }}">
                                    <div class="row align-items-center">

                                        <div class="col-2 text-center">
                                            <h4 class="mb-0">{{ \Carbon\Carbon::parse($m->match_date)->format('d') }}
                                            </h4>
                                            <div class="text-secondary">
                                                {{ \Carbon\Carbon::parse($m->match_date)->format('M') }}</div>
                                            <div class="text-muted small">
                                                {{ \Carbon\Carbon::parse($m->match_date)->format('Y') }}</div>
                                        </div>

                                        
                                        <div class="col-8 d-flex justify-content-center align-items-center gap-4">

                                            {{-- Home club  --}}
                                            <div class="d-flex flex-column align-items-center" style="min-width:250px;">
                                                <img src="{{ $m->homeClub->logo ? asset($m->homeClub->logo) : asset('images/placeholder.png') }}"
                                                    class="rounded-circle" width="55">
                                                <div class="fw-semibold mt-2 text-center" style="white-space: nowrap;">{{ $m->homeClub->name }}</div>
                                            </div>

                                            <div class="fs-4 fw-bold" style="color : rgb(102, 209, 245);">
                                                {{-- @if ($m->isPlayed())
                                                    {{ $m->home_score }} - {{ $m->away_score }}
                                                @else
                                                    VS
                                                @endif --}}
                                                VS
                                            </div>
                                            
                                            {{-- away club  --}}
                                            <div class="d-flex flex-column align-items-center" style="min-width:280px;">
                                                <img src="{{ $m->awayClub->logo ? asset($m->awayClub->logo) : asset('images/placeholder.png') }}"
                                                    class="rounded-circle" width="55">
                                                <div class="fw-semibold mt-2 text-center" style="white-space: nowrap;">{{ $m->awayClub->name }}</div>
                                            </div>

                                        </div>

                                        <div class="col-2 text-end">
                                            <div class="fw-bold" style="color : rgb(102, 209, 245);" >
                                                {{ \Carbon\Carbon::parse($m->match_time)->format('H:i') }}</div>
                                            <div class="text-muted small">{{ $m->competition }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Result  --}}
                    <div id="results" class="tab-section d-none">
                        <div id="resultContainer" class="d-flex flex-column gap-3">
                            @foreach ($matches->where('status', 'played') as $m)
                                <div class="card border shadow-sm p-4 result-item"
                                    data-competition="{{ $m->competition }}" data-season="{{ $m->season }}">
                                    <div class="row align-items-center">

                                        <div class="col-2 text-center">
                                            <h4 class="mb-0">{{ \Carbon\Carbon::parse($m->match_date)->format('d') }}
                                            </h4>
                                            <div class="text-secondary">
                                                {{ \Carbon\Carbon::parse($m->match_date)->format('M') }}</div>
                                            <div class="text-muted small">
                                                {{ \Carbon\Carbon::parse($m->match_date)->format('Y') }}</div>
                                        </div>

                                        <div class="col-8 d-flex justify-content-center align-items-center gap-4">
                                            {{-- Home club Score  --}}
                                            <div class="d-flex flex-column align-items-center" style="min-width:250px;">
                                                <img src="{{ $m->homeClub->logo ? asset($m->homeClub->logo) : asset('images/placeholder.png') }}"
                                                    class="rounded-circle" width="55">
                                                <div class="fw-semibold mt-2 text-center" style="white-space: nowrap;">{{ $m->homeClub->name }}</div>
                                            </div>

                                            <div class="fs-4 fw-bold" style="color : rgb(102, 209, 245);">{{ $m->home_score }} -
                                                {{ $m->away_score }}</div>

                                            {{-- away club score  --}}
                                            <div class="d-flex flex-column align-items-center" style="min-width:250px;">
                                                <img src="{{ $m->awayClub->logo ? asset($m->awayClub->logo) : asset('images/placeholder.png') }}"
                                                    class="rounded-circle" width="55">
                                                <div class="fw-semibold mt-2 text-center" style="white-space: nowrap;">{{ $m->awayClub->name }}</div>
                                            </div>

                                        </div>

                                        <div class="col-2 text-end">
                                            <div class="fw-bold" style="color : rgb(102, 209, 245);">
                                                {{ \Carbon\Carbon::parse($m->match_time)->format('H:i') }}</div>
                                            <div class="text-muted small">{{ $m->competition }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Standings -->
                    <div id="standings" class="tab-section d-none">
                        <div class="card shadow-sm p-3">
                            <table class="table table-striped table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Club</th>
                                        <th>PL</th>
                                        <th>W</th>
                                        <th>D</th>
                                        <th>L</th>
                                        <th>GF</th>
                                        <th>GA</th>
                                        <th>GD</th>
                                        <th>PTS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($standings) && $standings->count())
                                        @foreach ($standings as $s)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $s->club->name }}</td>
                                                <td>{{ $s->played }}</td>
                                                <td>{{ $s->win }}</td>
                                                <td>{{ $s->draw }}</td>
                                                <td>{{ $s->loss }}</td>
                                                <td>{{ $s->gf }}</td>
                                                <td>{{ $s->ga }}</td>
                                                <td>{{ $s->gd }}</td>
                                                <td>{{ $s->points }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="10" class="text-center">No standings available.</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const competitionSelect = document.getElementById('filterCompetition');
            const seasonSelect = document.getElementById('filterSeason');

            const fixtures = document.querySelectorAll('.fixture-item');
            const results = document.querySelectorAll('.result-item');

            const tabs = document.querySelectorAll('#tabMenu .nav-link');
            const sections = document.querySelectorAll('.tab-section');

            // Tab click
            tabs.forEach(tab => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = this.dataset.tab;

                    tabs.forEach(t => t.classList.remove('active', 'text-primary', 'fw-bold'));
                    tabs.forEach(t => t.classList.add('text-secondary'));
                    this.classList.add('active', 'text-primary', 'fw-bold');

                    sections.forEach(s => s.classList.add('d-none'));
                    document.getElementById(target).classList.remove('d-none');
                });
            });

            // Filter function
            function filterItems() {
                const competition = competitionSelect.value;
                const season = seasonSelect.value;

                [fixtures, results].forEach(list => {
                    list.forEach(item => {
                        const compMatch = !competition || item.dataset.competition === competition;
                        const seasonMatch = !season || item.dataset.season === season;
                        item.style.display = (compMatch && seasonMatch) ? 'flex' : 'none';
                    });
                });
            }

            competitionSelect.addEventListener('change', filterItems);
            seasonSelect.addEventListener('change', filterItems);
        });
    </script>
    <style>
        /* Fixtures tab active */
        #tabMenu .nav-link.active{
            color: #74c7fe !important; 
            font-weight: bold;
        }

        /* Optional: inactive tab color */
        #tabMenu .nav-link:not(.active) {
            color: #6c757d !important; 
        }
    </style>
</x-app-layout>
