<x-app-layout>
    <div class="container py-4">
        <h2 class="mb-4">Manage Standings</h2>


        <a href="{{ route('standing.create') }}" class="btn mb-3" style="background-color:#74c7fe; color:white;">Add Standing</a>

        {{-- Tabs --}}
        <ul class="nav nav-tabs mb-4" id="tabMenu">
            <li class="nav-item">
                <a class="nav-link active text-primary fw-bold" data-tab="standings" href="#">Standings</a>
            </li>
        </ul>

        <div id="tabContent">

            {{-- STANDINGS TAB --}}
            <div id="standings" class="tab-section">
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

                                    <td class="d-flex gap-1">
                                        <a href="{{ route('standing.edit', [$s->match_id, $s->id]) }}"
                                            class="btn btn-sm btn-outline-secondary">Edit</a>

                                        <form action="{{ route('standing.destroy', [$s->match_id, $s->id]) }}"
                                            method="POST" class="d-inline-block">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete this standing?')">Delete</button>
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
        document.querySelectorAll('#tabMenu .nav-link').forEach(tab => {
            tab.addEventListener('click', e => {
                e.preventDefault();

                let target = tab.dataset.tab;

                document.querySelectorAll('#tabMenu .nav-link').forEach(t => {
                    t.classList.remove('active', 'text-primary', 'fw-bold');
                    t.classList.add('text-secondary');
                });

                tab.classList.add('active', 'text-primary', 'fw-bold');

                document.querySelectorAll('.tab-section').forEach(s => s.classList.add('d-none'));
                document.getElementById(target).classList.remove('d-none');
            });
        });
    </script>


</x-app-layout>
