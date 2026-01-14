<x-app-layout>
    <div class="container py-4">
        <h2 class="mb-4">Create New Fixture</h2>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('fixture.store') }}" method="POST">
            @csrf

            {{-- Home Club --}}
            <div class="mb-3">
                <label class="form-label">Home Club</label>
                <select name="home_club_id" class="form-control" required>
                    <option value="">-- Select Home Club --</option>
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}" {{ old('home_club_id') == $club->id ? 'selected' : '' }}>
                            {{ $club->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Away Club --}}
            <div class="mb-3">
                <label class="form-label">Away Club</label>
                <select name="away_club_id" class="form-control" required>
                    <option value="">-- Select Away Club --</option>
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}" {{ old('away_club_id') == $club->id ? 'selected' : '' }}>
                            {{ $club->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Match Date --}}
            <div class="mb-3">
                <label class="form-label">Match Date</label>
                <input type="date" name="match_date" class="form-control" value="{{ old('match_date') }}" required>
            </div>

            {{-- Match Time --}}
            <div class="mb-3">
                <label class="form-label">Match Time</label>
                <input type="time" name="match_time" class="form-control" value="{{ old('match_time') }}">
            </div>

            {{-- Competition --}}
            <div class="mb-3">
                <label class="form-label">Competition</label>
                <input type="text" name="competition" class="form-control" value="{{ old('competition') }}">
            </div>

            {{-- Season --}}
            <div class="mb-3">
                <label class="form-label">Season</label>
                <input type="text" name="season" class="form-control" value="{{ old('season') }}">
            </div>

            {{-- Submit --}}
            <button type="submit" class="btn btn-primary">Create Fixture</button>
            <a href="{{ route('fixture.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</x-app-layout>
