<x-app-layout>


    <section class="text-center py-10" style="background-color: #3AAFA9;">
        <h1 style="font-size: 4vw" class="text-4xl font-bold text-gray-800 mb-8">Your Progress</h1>

        <!-- Progress cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-items-center">

            <!-- HTML Progress -->
            <div style="position: absolute ; left: 10vw; top: 40vh" class="flex items-center space-x-4 mt-8 ">
                <div class="relative">
                    <svg class="w-16 h-16 transform -rotate-90" viewBox="0 0 36 36">
                        <path fill="none" stroke="#e5e7eb" stroke-width="3" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <path fill="none" stroke="#3b82f6" stroke-width="3" stroke-dasharray="10, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831" />
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <p class="text-sm">1 of 50</p>
                    </div>
                </div>
                <div>
                    <h2 class="text-blue-500 font-bold text-lg">HTML</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <!-- CSS Progress -->
            <div style="position: absolute ; left: 60vw; top: 40vh" class="flex items-center space-x-4 mt-8">
                <div class="relative">
                    <svg class="w-16 h-16 transform -rotate-90" viewBox="0 0 36 36">
                        <path fill="none" stroke="#e5e7eb" stroke-width="3" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <path fill="none" stroke="#ef4444" stroke-width="3" stroke-dasharray="10, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831" />
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <p class="text-sm">1 of 45</p>
                    </div>
                </div>
                <div>
                    <h2 class="text-red-500 font-bold text-lg">CSS</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <!-- JavaScript Progress -->
            <div style="position: absolute ; left: 10vw; top: 70vh" class="flex items-center space-x-4 mt-8">
                <div class="relative">
                    <svg class="w-16 h-16 transform -rotate-90" viewBox="0 0 36 36">
                        <path fill="none" stroke="#e5e7eb" stroke-width="3" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <path fill="none" stroke="#f59e0b" stroke-width="3" stroke-dasharray="10, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831" />
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <p class="text-sm">1 of 70</p>
                    </div>
                </div>
                <div>
                    <h2 class="text-yellow-500 font-bold text-lg">JAVASCRIPT</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

        </div>
    </section>

</x-app-layout>