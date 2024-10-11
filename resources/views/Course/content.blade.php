<x-app-layout>

<x-slot name="header">
        <div class="flex justify-end items-center">
            <a href="/course/progress" class="text-black px-4 py-2 rounded">
                progress
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You can create a content") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>