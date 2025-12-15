<x-app-layout>
    <div class="container py-4">
        <h2 class="mb-4">Add Match Result</h2>

        <form action="{{ route('fixture.storeResult') }}" method="POST">
            @csrf

            {{-- Select Match --}}
            <div class="mb-3">
                <label class="form-label">Select Match</label>
                <select name="match_id" class="form-control" required>
                    <option value="">-- Choose Match --</option>
                    @foreach ($matches as $m)
                        <option value="{{ $m->id }}">
                            {{ $m->homeClub->name }} vs {{ $m->awayClub->name }}
                            ({{ $m->match_date->format('d M Y') }})
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Home Score --}}
            <div class="mb-3">
                <label class="form-label">Home Score</label>
                <input type="number" name="home_score" class="form-control" min="0" required>
            </div>

            {{-- Away Score --}}
            <div class="mb-3">
                <label class="form-label">Away Score</label>
                <input type="number" name="away_score" class="form-control" min="0" required>
            </div>

            {{-- Status --}}
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="played">Played</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>

            {{-- Notes --}}
            <div class="mb-3">
                <label class="form-label">Notes (optional)</label>
                <textarea name="notes" class="form-control" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Save Result</button>
            <a href="{{ route('fixture.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

</x-app-layout>
