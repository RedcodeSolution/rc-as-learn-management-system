<x-app-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6 bg-gray-100">
        @foreach ($finalCount as $finalCoun)
        <a class="block bg-white shadow-md rounded-lg overflow-hidden transform transition hover:scale-105 hover:shadow-lg">
            <div class="p-6">
                <h2 class="font-bold text-xl mb-2 text-gray-700">Question: {{ $finalCoun->question }}</h2>
                <p class="text-lg text-gray-900">{{ $finalCoun->question }}</p>

                <h2 class="font-bold text-xl mt-4 text-gray-700">Your answer:</h2>
                <p class="text-lg text-gray-900">{{ $finalCoun->user_answer }}</p>

                <h2 class="font-bold text-xl mt-4 text-gray-700">Correct answer:</h2>
                <p class="text-lg text-gray-900">{{ $finalCoun->correct_answer }}</p>

                @if($finalCoun->is_correct == 1)
                <div class="mt-4 p-4 bg-yellow-200 text-yellow-800 rounded-lg">
                    <h2 class="font-bold text-xl">Correct answer.</h2>
                </div>
                @else
                <div class="mt-4 p-4 bg-red-100 text-red-800 rounded-lg">
                    <h2 class="font-bold text-xl">Wrong answer.</h2>
                </div>
                @endif
            </div>
        </a>
        @endforeach
    </div>
</x-app-layout>
