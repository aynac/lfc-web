<x-app-layout>
    <div class="container py-4">
        <h2 class="mb-4">Edit Standing</h2>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('standing.update', $standing->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Match ID --}}
            <div class="mb-3"> <label class="form-label">Match ID</label> <input type="number" name="match_id"
                    class="form-control" value="{{ old('match_id', $standing->match_id) }}"> </div>

            {{-- Club --}}
            <div class="mb-3">
                <label class="form-label">Club</label>
                <select name="club_id" class="form-control">
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}" {{ $club->id == $standing->club_id ? 'selected' : '' }}>
                            {{ $club->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Stats --}}
            @php
                $fields = [
                    'played' => 'Played',
                    'win' => 'Win',
                    'draw' => 'Draw',
                    'loss' => 'Loss',
                    'gf' => 'GF',
                    'ga' => 'GA',
                    'points' => 'Points',
                ];
            @endphp

            @foreach ($fields as $key => $label)
                <div class="mb-3">
                    <label class="form-label">{{ $label }}</label>
                    <input type="number" name="{{ $key }}" class="form-control"
                        value="{{ old($key, $standing->$key) }}">
                </div>
            @endforeach

            {{-- Competition --}}
            <div class="mb-3">
                <label class="form-label">Competition</label>
                <input type="text" name="competition" class="form-control"
                    value="{{ old('competition', $standing->competition) }}">
            </div>

            {{-- Season --}}
            <div class="mb-3">
                <label class="form-label">Season</label>
                <input type="text" name="season" class="form-control"
                    value="{{ old('season', $standing->season) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Standing</button>
            <a href="{{ route('standing.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

</x-app-layout>
