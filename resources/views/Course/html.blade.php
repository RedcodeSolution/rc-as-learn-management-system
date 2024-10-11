<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-end items-center">
            <a href="/course/progress" class="text-black px-4 py-2 rounded">
                Progress
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div x-data="{
                        activeLesson: '', // keeps track of current lesson
                        isLoading: false, // to manage loading state
                        loadLesson(lesson) {
                            this.isLoading = true; // Start loading
                            this.activeLesson = ''; // Reset active lesson
                            setTimeout(() => {
                                this.activeLesson = lesson; // Set the lesson after delay
                                this.isLoading = false; // Stop loading
                            }, 500); // Simulating loading time (500ms)
                        },
                        lessons: [
                            { name: 'Introduction to HTML', id: 'introduction' },
                            { name: 'HTML Document Structure', id: 'document-structure' },
                            { name: 'HTML Headings', id: 'headings' },
                            { name: 'HTML Paragraphs', id: 'paragraphs' },
                            { name: 'HTML Links', id: 'links' },
                            { name: 'HTML Images', id: 'images' },
                            { name: 'HTML Lists', id: 'lists' },
                            { name: 'HTML Forms', id: 'forms' }
                        ]
                    }" class="flex"> <!-- sidebar and content -->
                        <!-- Sidebar (Left) -->
                        <div class="w-1/4 pr-6"> <!-- Adjust the width of the sidebar using 'w-1/4' -->
                            <h3 class="pb-3 font-medium text-gray-800">HTML BASIC</h3>
                            <div class="text-gray-600">
                                <ul>
                                    <template x-for="lesson in lessons" :key="lesson.id">
                                        <li>
                                            <a href="javascript:void(0)"
                                               @click="loadLesson(lesson.id)"
                                               class="block w-full py-2 px-4 border-l hover:border-indigo-600 hover:text-gray-900 duration-150 text-gray-500"
                                               x-text="lesson.name">
                                            </a>
                                        </li>
                                    </template>
                                </ul>
                            </div><br>

                            <h3 class="pb-3 font-medium text-gray-800">HTML ADVANCE</h3>
                            <div class="text-gray-600">
                                <ul>
                                    <template x-for="lesson in lessons" :key="lesson.id">
                                        <li>
                                            <a href="javascript:void(0)"
                                               @click="loadLesson(lesson.id)"
                                               class="block w-full py-2 px-4 border-l hover:border-indigo-600 hover:text-gray-900 duration-150 text-gray-500"
                                               x-text="lesson.name">
                                            </a>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                        </div>


                        <!-- Right Content Area -->
                        <div class="w-3/4">
                            <!-- Loading -->
                            <div x-show="isLoading" class="flex items-center justify-center h-64">
                                <div class="text-lg font-bold text-gray-700">Loading...</div>
                            </div>

                            <!-- HTML Introduction Content -->
                            <div x-show="activeLesson === 'introduction'" x-transition>
                                <h2 class="text-xl font-bold">Introduction to HTML</h2>
                                <p class="mt-2 text-gray-600">
                                    HTML (Hypertext Markup Language) is the standard markup language used for creating web pages.
                                    It allows you to structure your content using elements like headings, paragraphs, lists, links, images, and more.
                                    With HTML, you can define the layout and structure of a webpage, which serves as the foundation for any web development project.
                                </p>
                                <p class="mt-2 text-gray-600">
                                    In this lesson, we will cover the basic elements of HTML, how to create a simple webpage, and the role of HTML in web development.
                                    By the end of this introduction, you should have a clear understanding of how HTML works and how it is used in conjunction with CSS and JavaScript to build interactive websites.
                                </p>
                            </div>

                            <!-- HTML DOCUMENT STructure -->
                            <div x-show="activeLesson === 'document-structure'" x-transition>
                                <h2 class="text-xl font-bold">HTML Document Structure</h2>
                                <p class="mt-2 text-gray-600">
                                    An HTML document is structured with a specific format that defines the elements of the webpage.
                                    The basic structure of an HTML document includes the following components:
                                </p>
                                <pre class="mt-4 p-4 bg-gray-100 rounded-md border border-gray-300">
                                    <code>
            &lt;!DOCTYPE html&gt;
            &lt;html lang="en"&gt;
                &lt;head&gt;
                    &lt;meta charset="UTF-8"&gt;
                    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                    &lt;title&gt;Document Title&lt;/title&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    &lt;h1&gt;Hello, World!&lt;/h1&gt;
                    &lt;p&gt;This is a sample paragraph.&lt;/p&gt;
                &lt;/body&gt;
            &lt;/html&gt;
        </code>
                                </pre>
                                <p class="mt-2 text-gray-600">
                                    In this structure:
                                </p>
                                <ul class="mt-2 text-gray-600 list-disc list-inside">
                                    <li><strong>&lt;!DOCTYPE html&gt;</strong>: This declaration defines the document type and version of HTML being used.</li>
                                    <li><strong>&lt;html&gt;</strong>: The root element that wraps all the content on the page.</li>
                                    <li><strong>&lt;head&gt;</strong>: Contains meta-information such as the document title, character set, and responsive settings.</li>
                                    <li><strong>&lt;body&gt;</strong>: Contains the visible content of the webpage, such as text, images, links, and other elements.</li>
                                </ul>


                            </div>

                            <!-- Html headings -->
                            <div x-show="activeLesson === 'headings'" x-transition>
                                <h2 class="text-xl font-bold">HTML Headings</h2>
                                <p class="mt-2 text-gray-600">
                                    HTML headings are used to define the headings of a webpage. They range from <strong>&lt;h1&gt;</strong> to <strong>&lt;h6&gt;</strong>,
                                    with <strong>&lt;h1&gt;</strong> being the most important and <strong>&lt;h6&gt;</strong> the least important.
                                    Headings help organize content and improve readability for both users and search engines.
                                </p>
                                <p class="mt-2 text-gray-600">
                                    Here is how you can use HTML headings:
                                </p>
                                <pre class="mt-4 p-4 bg-gray-100 rounded-md border border-gray-300">
                                             <code>
            &lt;h1&gt;This is a Heading 1&lt;/h1&gt;   <!-- Most important heading -->
            &lt;h2&gt;This is a Heading 2&lt;/h2&gt;   <!-- Second level heading -->
            &lt;h3&gt;This is a Heading 3&lt;/h3&gt;   <!-- Third level heading -->
            &lt;h4&gt;This is a Heading 4&lt;/h4&gt;   <!-- Fourth level heading -->
            &lt;h5&gt;This is a Heading 5&lt;/h5&gt;   <!-- Fifth level heading -->
            &lt;h6&gt;This is a Heading 6&lt;/h6&gt;   <!-- Least important heading -->
        </code>
                                </pre>
                                <p class="mt-2 text-gray-600">
                                    In this example:
                                </p>
                                <ul class="mt-2 text-gray-600 list-disc list-inside">
                                    <li><strong>&lt;h1&gt;</strong>: Used for main titles or headings. There should be only one <strong>&lt;h1&gt;</strong> per page for optimal SEO.</li>
                                    <li><strong>&lt;h2&gt;</strong>: Used for subheadings that divide sections of content.</li>
                                    <li><strong>&lt;h3&gt;</strong> to <strong>&lt;h6&gt;</strong>: Used for further subsections and smaller headings.</li>
                                </ul>
                            </div>

                            <!-- Control Flow Statements Form -->
                            <div x-show="activeLesson === 'control'" x-transition>
                                <h2 class="text-xl font-bold">Control Flow Statements Form</h2>
                                <form>
                                    <div class="mt-4">
                                        <label for="control-condition" class="block text-sm font-medium text-gray-700">Condition</label>
                                        <input type="text" id="control-condition" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                                    </div>
                                    <div class="mt-4">
                                        <label for="control-loop" class="block text-sm font-medium text-gray-700">Loop Type</label>
                                        <input type="text" id="control-loop" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
