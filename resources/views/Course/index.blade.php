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

            <div class="text-gray-900" style="background-color: #BF4D4D; padding: 40px; width: 100%; height: 220px; display: flex; align-items: center; justify-content: space-between;">
                    <a href="course/html" style="font-size: 50px; color: white; text-decoration: none; font-weight : bold">
                        {{ __("HTML") }}
                    </a>
                    <div style="display: flex; flex-direction: column; font-size: 30px; text-align: right;">
                        <h1>Full course 9hr</h1>
                        <h1>Conducted By Sajith</h1>
                    </div>
                </div>


                <div class="text-gray-900" style="background-color: #ECDFCC; padding: 40px; width: 100%; height: 220px; display: flex; align-items: center; justify-content: space-between;">
                    <a href="course/css" style="font-size: 50px; color: white; text-decoration: none; font-weight : bold">
                        {{ __("CSS") }}
                    </a>
                    <div style="display: flex; flex-direction: column; font-size: 30px; text-align: right;">
                        <h1>Full course 9hr</h1>
                        <h1>Conducted By Anura </h1>
                    </div>
                </div>


                <div class="text-gray-900" style="background-color: #598A8D; padding: 40px; width: 100%; height: 220px; display: flex; align-items: center; justify-content: space-between;">
                    <a href="course/javascript" style="font-size: 50px; color: white; text-decoration: none; font-weight : bold">
                        {{ __("JAVASCRIPT") }}
                    </a>
                    <div style="display: flex; flex-direction: column; font-size: 30px; text-align: right;">
                        <h1>Full course 9hr</h1>
                        <h1>Conducted by Ranil</h1>
                    </div>
                </div>

            </div>

        </div>
    </div>


</x-app-layout>