<x-app-layout>
    <div class="py-12" style="background-color: #3AAFA9; min-height: 100vh;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg" style="background-color: #86D293;">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-wrap md:flex-nowrap justify-between">
                        <!-- Left Side (Paragraph) -->
                        <div class="w-full md:w-1/2 mb-6 md:mb-0 pr-4">
                            <h1 class="lg:text-2xl font-bold mb-4 p-6">Contact Us</h1>
                            <p class="text-lg p-6 text-gray-700">
                                Have a question or need assistance? We'd <br> love to hear from you!
                                Reach out to us <br> with your inquiries, feedback, or <br>suggestions,
                                and we'll get back to you as <br>soon as possible. Your journey into<br>
                                coding is important to us, and we're here<br> to help every step of the way.
                            </p>
                        </div>

                        <!-- Right Side (Contact Form) -->
                        <div class="w-full md:w-1/2 p-6">
                            @if (session('success'))
                            <div id="success-message" class="bg-green-100 text-green-700 p-4 rounded-md mb-4">
                                {{ session('success') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('contact.submit') }} " class="space-y-6 p-4 bg-gray-50 rounded-lg" style="background-color: #86D293;">
                                @csrf
                                <div>
                                    <input type="text" name="name" placeholder="Name"
                                           class="border border-gray-300 rounded-md p-2 w-full " required />
                                </div>
                                <div>
                                    <input type="email" name="email" placeholder="Email"
                                           class="border border-gray-300 rounded-md p-2 w-full" required />
                                </div>
                                <div>
                                    <input type="text" name="phone" placeholder="Phone Number"
                                           class="border border-gray-300 rounded-md p-2 w-full" required />
                                </div>
                                <div>
                                    <textarea name="subject" placeholder="Subject"
                                              class="border border-gray-300 rounded-md p-2 w-full h-32" required></textarea>
                                </div>

                                <div class="text-right ">
                                    <x-primary-button type="submit">
                                        SUBMIT
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- hide success message after 1 seconds -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 1000); // 1 seconds
            }
        });
    </script>
</x-app-layout>