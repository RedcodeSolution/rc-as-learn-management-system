<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Have a question or need assistance?
                    We'd love to hear from you! Reach out to us with your inquiries, feedback, or suggestions, and we'll get back to you as soon as possible. Your journey into coding is important to us, and we're here to help every step of the way") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
