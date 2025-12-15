{{-- resources/views/admin/fixture/index.blade.php --}}
<x-app-layout>
    <div class="container py-4">
        <h2 class="mb-4">Manage Fixtures</h2>

        <a id="dynamicButton" href="{{ route('fixture.create') }}" class="btn mb-3" style="background-color:#74c7fe ">Create Fixture</a>

        {{-- Tabs --}}
        <ul class="nav nav-tabs mb-4" id="tabMenu">
            <li class="nav-item">
                <a class="nav-link active text-primary fw-bold" data-tab="fixtures" href="#">Fixtures</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" data-tab="results" href="#">Results</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" data-tab="standings" href="#">Standings</a>
            </li>
        </ul>

        <div id="tabContent">

            {{-- FIXTURES TAB --}}
            <div id="fixtures" class="tab-section">
                @foreach ($fixtures as $m)
                    <div
                        class="card mb-2 p-3 d-flex flex-column flex-md-row justify-content-between align-items-center">

                        {{-- Details --}}
                        <div>
                            <strong>{{ $m->match_date->format('d M Y') }}</strong> |
                            {{ $m->competition }} | {{ $m->season }}
                        </div>

                        {{-- Clubs --}}
                        <div class="d-flex align-items-center gap-3">
                            <div class="d-flex flex-column align-items-center" style="min-width:280px;">
                                <img src="{{ Storage::url($m->homeClub->logo) }}" width="50" class="rounded-circle">
                                <div>{{ $m->homeClub->name }}</div>
                            </div>

                            <div>VS</div>

                            <div class="d-flex flex-column align-items-center" style="min-width:280px;">
                                <img src="{{ Storage::url($m->awayClub->logo) }}" width="50" class="rounded-circle">
                                <div>{{ $m->awayClub->name }}</div>
                            </div>
                        </div>

                        {{-- Action --}}
                        <div class="text-end">
                            <a href="{{ route('fixture.edit', $m) }}"
                                class="btn btn-sm btn-outline-secondary">Edit</a>

                            <a href="{{ route('standing.index') }}" class="btn btn-info text-white">
                                Standings
                            </a>

                            <form action="{{ route('fixture.destroy', $m) }}" method="POST"
                                class="d-inline-block">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach

                {{ $fixtures->links() }}
            </div>

            {{-- RESULTS TAB --}}
            <div id="results" class="tab-section d-none">
                @foreach ($playedMatches as $m)
                    <div
                        class="card mb-2 p-3 d-flex flex-column flex-md-row justify-content-between align-items-center">

                        <div>{{ $m->match_date->format('d M Y') }} | {{ $m->competition }} | {{ $m->season }}
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <div class="d-flex flex-column align-items-center" style="min-width:280px;">
                                <img src="{{ Storage::url($m->homeClub->logo) }}" width="50"
                                    class="rounded-circle">
                                <div>{{ $m->homeClub->name }}</div>
                            </div>

                            <div class="fw-bold">{{ $m->home_score }} - {{ $m->away_score }}</div>

                            <div class="d-flex flex-column align-items-center" style="min-width:280px;">
                                <img src="{{ Storage::url($m->awayClub->logo) }}" width="50"
                                    class="rounded-circle">
                                <div>{{ $m->awayClub->name }}</div>
                            </div>
                        </div>

                        <a href="{{ route('fixture.edit', $m) }}" class="btn btn-sm btn-outline-secondary">Edit
                            Result</a>
                    </div>
                @endforeach
            </div>

            {{-- STANDINGS TAB --}}
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($standings as $s)
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

                                    <td>
                                        <a href="{{ route('standing.edit', [$s->match_id, $s->id]) }}"
                                            class="btn btn-sm btn-outline-secondary">Edit</a>

                                        <form action="{{ route('standing.destroy', [$s->match_id, $s->id]) }}"
                                            method="POST" class="d-inline-block">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="11" class="text-center">No standings available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>

    {{-- JS TAB SWITCH --}}
    <script>
        const dynamicBtn = document.getElementById('dynamicButton');

        document.querySelectorAll('#tabMenu .nav-link').forEach(tab => {
            tab.addEventListener('click', e => {
                e.preventDefault();

                let target = tab.dataset.tab;

                // --- Styling for tabs ---
                document.querySelectorAll('#tabMenu .nav-link').forEach(t => {
                    t.classList.remove('active', 'text-primary', 'fw-bold');
                    t.classList.add('text-secondary');
                });
                tab.classList.add('active', 'text-primary', 'fw-bold');

                // --- Show tab content ---
                document.querySelectorAll('.tab-section').forEach(s => s.classList.add('d-none'));
                document.getElementById(target).classList.remove('d-none');

                // --- CHANGE BUTTON BASED ON TAB ---
                if (target === "fixtures") {
                    dynamicBtn.textContent = "Add Fixture";
                    dynamicBtn.href = "{{ route('fixture.create') }}";
                    dynamicBtn.classList.remove("btn-info");
                    dynamicBtn.classList.add("btn-primary");
                }

                if (target === "standings") {
                    dynamicBtn.textContent = "Add Standing";
                    dynamicBtn.href = "{{ route('standing.create') }}";
                    dynamicBtn.classList.remove("btn-primary");
                    dynamicBtn.classList.add("btn-info");
                }

                if (target === "results") {
                    dynamicBtn.textContent = "Add Result";
                    dynamicBtn.href = "{{ route('fixture.result')}}"; 
                    dynamicBtn.classList.remove("btn-primary", "btn-info");
                    dynamicBtn.classList.add("btn-secondary");
                }
            });
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
