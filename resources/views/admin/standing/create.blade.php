<x-app-layout>
    <div class="container py-4">
        <h2 class="mb-4">Add Standing</h2>

        {{-- ERROR ALERT --}}
        @if ($errors->any())
            <div class="mb-4 p-4 bg-danger bg-opacity-25 text-danger rounded">
                <ul class="mb-0 ps-3">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('standing.store') }}" method="POST">
            @csrf

            {{-- CLUB --}}
            <div class="mb-3">
                <label class="form-label">Club</label>
                <select name="club_id" class="form-control">
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}">{{ $club->name }}</option>
                    @endforeach
                </select>
            </div>

            {{-- PLAYED --}}
            <div class="mb-3">
                <label class="form-label">Played (PL)</label>
                <input type="number" name="played" class="form-control" value="{{ old('played') }}" required>
            </div>

            {{-- WIN --}}
            <div class="mb-3">
                <label class="form-label">Wins (W)</label>
                <input type="number" name="win" class="form-control" value="{{ old('win') }}" required>
            </div>

            {{-- DRAW --}}
            <div class="mb-3">
                <label class="form-label">Draws (D)</label>
                <input type="number" name="draw" class="form-control" value="{{ old('draw') }}" required>
            </div>

            {{-- LOSS --}}
            <div class="mb-3">
                <label class="form-label">Losses (L)</label>
                <input type="number" name="loss" class="form-control" value="{{ old('loss') }}" required>
            </div>

            {{-- GOALS FOR --}}
            <div class="mb-3">
                <label class="form-label">Goals For (GF)</label>
                <input type="number" name="gf" class="form-control" value="{{ old('gf') }}" required>
            </div>

            {{-- GOALS AGAINST --}}
            <div class="mb-3">
                <label class="form-label">Goals Against (GA)</label>
                <input type="number" name="ga" class="form-control" value="{{ old('ga') }}" required>
            </div>

            {{-- GOAL DIFFERENCE --}}
            <div class="mb-3">
                <label class="form-label">Goal Difference (GD)</label>
                <input type="number" name="gd" class="form-control" value="{{ old('gd') }}" required>
            </div>

            {{-- POINTS --}}
            <div class="mb-3">
                <label class="form-label">Points (PTS)</label>
                <input type="number" name="points" class="form-control" value="{{ old('points') }}" required>
            </div>

            {{-- SUBMIT BUTTONS --}}
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('standing.index') }}" class="btn btn-secondary">Cancel</a>

        </form>
    </div>
</x-app-layout>
