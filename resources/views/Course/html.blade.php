<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-end items-center" >
            <a href="/course/progress" class="text-black px-4 py-2 rounded">
                Progress
            </a>

            <a href="/course/quiz" class="text-black px-8 py-2 rounded">
                Quiz
            </a>
        </div>
    </x-slot>

    <div class="py-12" style="background-color: #3AAFA9; min-height: 100vh;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div x-data="{
                        lessons: {
                            htmlLessons: [
                                { name: 'Introduction', href: 'javascript:void(0)' },
                                { name: 'Installing and Setting up', href: 'javascript:void(0)' },
                                { name: 'Basic Syntax and Data Types', href: 'javascript:void(0)' },
                                { name: 'Control Flow Statements', href: 'javascript:void(0)' },
                                { name: 'Functions and Modules', href: 'javascript:void(0)' },
                                { name: 'Ownership and Borrowing', href: 'javascript:void(0)' },
                                { name: 'Structs', href: 'javascript:void(0)' },
                                { name: 'Traits and Generics', href: 'javascript:void(0)' }
                            ],
                            advanceLessons: [
                                { name: 'Introduction', href: 'javascript:void(0)' },
                                { name: 'Installing and Setting up', href: 'javascript:void(0)' },
                                { name: 'Basic Syntax and Data Types', href: 'javascript:void(0)' },
                                { name: 'Control Flow Statements', href: 'javascript:void(0)' },
                                { name: 'Functions and Modules', href: 'javascript:void(0)' },
                                { name: 'Ownership and Borrowing', href: 'javascript:void(0)' },
                                { name: 'Structs', href: 'javascript:void(0)' },
                                { name: 'Traits and Generics', href: 'javascript:void(0)' }
                            ]
                        }
                    }">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!--  Lessons Section -->
                            <div>
                                <h3 class="pb-3 font-medium text-gray-800">HTML Basics</h3>
                                <div class="text-gray-600">
                                    <ul>
                                        <template x-for="(item, index) in lessons.htmlLessons" :key="index">
                                            <li>
                                                <a :href="item.href" class="block w-full py-2 px-4 border-l hover:border-indigo-600 hover:text-gray-900 duration-150 text-gray-500" x-text="item.name"></a>
                                            </li>
                                        </template>
                                    </ul>
                                </div>
                            </div>

                            <!--  Lessons Section -->
                            <div>
                                <h3 class="pb-3 font-medium text-gray-800">HTML ADVANCE</h3>
                                <div class="text-gray-600">
                                    <ul>
                                        <template x-for="(item, index) in lessons.advanceLessons" :key="index">
                                            <li>
                                                <a :href="item.href" class="block w-full py-2 px-4 border-l hover:border-indigo-600 hover:text-gray-900 duration-150 text-gray-500" x-text="item.name"></a>
                                            </li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
