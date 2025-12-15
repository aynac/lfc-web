<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create New Fixture
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-6 shadow-sm sm:rounded-lg">

                <form action="{{ route('fixture.store') }}" method="POST">
                    @csrf

                    <!-- Home Club -->
                    <div class="mb-2">
                        <label class="block font-medium text-sm text-gray-700">Home Club</label>
                        <select name="home_club_id" class="form-select mt-1 block w-full" required>
                            <option value="">-- Select Home Club --</option>
                            @foreach ($clubs as $club)
                                <option value="{{ $club->id }}">{{ $club->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Away Club -->
                    <div class="mb-3">
                        <label class="block font-medium text-sm text-gray-700">Away Club</label>
                        <select name="away_club_id" class="form-select mt-1 block w-full" required>
                            <option value="">-- Select Away Club --</option>
                            @foreach ($clubs as $club)
                                <option value="{{ $club->id }}">{{ $club->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Match Date -->
                    <div class="mb-3">
                        <label class="block font-medium text-sm text-gray-700">Match Date</label>
                        <input type="date" name="match_date" class="form-input mt-1 block w-full" required>
                    </div>

                    <!-- Match Time -->
                    <div class="mb-3">
                        <label class="block font-medium text-sm text-gray-700">Match Time</label>
                        <input type="time" name="match_time" class="form-input mt-1 block w-full">
                    </div>

                    <!-- Competition -->
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">Competition</label>
                        <input type="text" name="competition" class="form-input mt-1 block w-full">
                    </div>

                    <!-- Season -->
                    <div class="mb-3">
                        <label class="block font-medium text-sm text-gray-700">Season</label>
                        <input type="text" name="season" class="form-input mt-1 block w-full">
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                            class="px-4 py-2 bg-blue-600 text-white rounded-md" style="background-color:#74c7fe ">
                            Create Fixture
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
