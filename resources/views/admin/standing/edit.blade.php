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

        <form action="{{ route('standing.update', $standing) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Match Info (readonly) --}}
            <div class="mb-3">
                <label class="form-label">Match</label>
                <input type="text" class="form-control"
                    value="{{ $standing->match ? $standing->match->competition . ' | ' . $standing->match->match_date->format('d M Y H:i') : 'N/A' }}"
                    disabled>
                <input type="hidden" name="match_id" value="{{ $standing->match_id }}">
            </div>

            {{-- Club Info (readonly) --}}
            <div class="mb-3">
                <label class="form-label">Club</label>
                <input type="text" class="form-control" value="{{ $standing->club ? $standing->club->name : 'N/A' }}"
                    disabled>
                <input type="hidden" name="club_id" value="{{ $standing->club_id }}">
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
                    'gd' => 'GD',
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

            <button type="submit" class="btn btn-primary">Update Standing</button>
            <a href="{{ route('standing.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</x-app-layout>
