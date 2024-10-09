<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-end items-center">
            <a href="/course/create" class="text-black px-4 py-2 rounded">
                Create
            </a>
        </div>
    </x-slot>



    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="text-gray-900" style="font-size: 50px; background-color: #BF4D4D; padding: 40px; width: 100%; height: 250px; display: flex; align-items: center;">
                <a href="">
                        {{ __("HTML") }}
                        {{ __("full course 9hr conducted by john 50 videos") }}
                    </a>
                </div>


                <div class="text-gray-900" style="font-size: 50px; background-color: #ECDFCC; padding: 40px; width: 100%; height: 250px; display: flex; align-items: center;">
                <a href="">
                        {{ __("CSS") }}
                        {{ __("full course 9hr conducted by john 50 videos") }}
                    </a>
                </div>


                <div class="text-gray-900" style="font-size: 50px; background-color: #598A8D; padding: 40px; width: 100%; height: 250px; display: flex; align-items: center;">
                    <a href="">
                        {{ __("JAVASCRIPT") }}
                        {{ __("full course 9hr conducted by john 50 videos") }}
                    </a>
                </div>


            </div>

        </div>
    </div>


</x-app-layout>