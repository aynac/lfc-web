<x-app-layout>
    <div class="container py-4">
        <h2 class="mb-4">Edit Fixture</h2>

        <form action="{{ route('fixture.update', $match) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Home --}}
            <div class="mb-3">
                <label class="form-label">Home Club</label>
                <select name="home_club_id" class="form-control">
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}" {{ $club->id == $match->home_club_id ? 'selected' : '' }}>
                            {{ $club->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Away --}}
            <div class="mb-3">
                <label class="form-label">Away Club</label>
                <select name="away_club_id" class="form-control">
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}" {{ $club->id == $match->away_club_id ? 'selected' : '' }}>
                            {{ $club->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Others --}}
            <div class="mb-3">
                <label class="form-label">Match Date</label>
                <input type="date" name="match_date" class="form-control" value="{{ old('match_date', $match->match_date->format('Y-m-d')) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Match Time</label>
                <input type="time" name="match_time" class="form-control" value="{{ $match->match_time }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Competition</label>
                <input type="text" name="competition" class="form-control" value="{{ $match->competition }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Season</label>
                <input type="text" name="season" class="form-control" value="{{ $match->season }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="scheduled" {{ $match->status == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                    <option value="played" {{ $match->status == 'played' ? 'selected' : '' }}>Played</option>
                    <option value="cancelled" {{ $match->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Home Score</label>
                <input type="number" name="home_score" class="form-control" value="{{ $match->home_score }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Away Score</label>
                <input type="number" name="away_score" class="form-control" value="{{ $match->away_score }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Fixture</button>
        </form>
    </div>
</x-app-layout>
