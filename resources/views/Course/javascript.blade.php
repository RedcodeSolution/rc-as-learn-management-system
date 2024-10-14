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

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-3xl overflow-auto h-4/5">
        <h1 class="text-5xl font-bold mb-6 text-center">JavaSript Quiz</h1>


        <form id="quizForm" method="POST" action="/JsForm" class="space-y-6">
            @csrf <!-- CSRF Token for security -->

            <input type="hidden" name="auth" value="{{auth()->user()->id}}">

            <div class="space-y-2">
                <p class="text-lg font-semibold">1. What does HTML stand for?</p>
                <label><input type="radio" name="q1" value="Hyper Text Markup Language" class="mr-2"> Hyper Text Markup Language</label><br>
                <label><input type="radio" name="q1" value="Home Tool Markup Language" class="mr-2"> Home Tool Markup Language</label><br>
                <label><input type="radio" name="q1" value="Hyperlinks and Text Markup Language" class="mr-2"> Hyperlinks and Text Markup Language</label>
                @error('q1')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">2. What is CSS used for?</p>
                <label><input type="radio" name="q2" value="Styling web pages" class="mr-2"> Styling web pages</label><br>
                <label><input type="radio" name="q2" value="Structuring web pages" class="mr-2"> Structuring web pages</label><br>
                <label><input type="radio" name="q2" value="Scripting" class="mr-2"> Scripting</label>
                @error('q2')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">3. Which JavaScript keyword is used to define a variable?</p>
                <label><input type="radio" name="q3" value="var" class="mr-2"> var</label><br>
                <label><input type="radio" name="q3" value="let" class="mr-2"> let</label><br>
                <label><input type="radio" name="q3" value="const" class="mr-2"> const</label>
                @error('q3')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">4. What does SQL stand for?</p>
                <label><input type="radio" name="q4" value="Structured Query Language" class="mr-2"> Structured Query Language</label><br>
                <label><input type="radio" name="q4" value="Stylesheet Query Language" class="mr-2"> Stylesheet Query Language</label><br>
                <label><input type="radio" name="q4" value="System Query Language" class="mr-2"> System Query Language</label>
                @error('q4')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">5. Which HTML tag is used to define an internal style sheet?</p>
                <label><input type="radio" name="q5" value="style" class="mr-2"> &lt;style&gt;</label><br>
                <label><input type="radio" name="q5" value="script" class="mr-2"> &lt;script&gt;</label><br>
                <label><input type="radio" name="q5" value="css" class="mr-2"> &lt;css&gt;</label>
                @error('q5')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">6. Which JavaScript method is used to write HTML output?</p>
                <label><input type="radio" name="q6" value="document.write()" class="mr-2"> document.write()</label><br>
                <label><input type="radio" name="q6" value="console.log()" class="mr-2"> console.log()</label><br>
                <label><input type="radio" name="q6" value="innerHTML" class="mr-2"> innerHTML</label>
                @error('q6')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">7. What is the correct syntax for referring to an external script called "script.js"?</p>
                <label><input type="radio" name="q7" value="&lt;script src='script.js'&gt;" class="mr-2"> &lt;script src='script.js'&gt;</label><br>
                <label><input type="radio" name="q7" value="&lt;script href='script.js'&gt;" class="mr-2"> &lt;script href='script.js'&gt;</label><br>
                <label><input type="radio" name="q7" value="&lt;script ref='script.js'&gt;" class="mr-2"> &lt;script ref='script.js'&gt;</label>
                @error('q7')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">8. How do you call a function named "myFunction" in JavaScript?</p>
                <label><input type="radio" name="q8" value="myFunction()" class="mr-2"> myFunction()</label><br>
                <label><input type="radio" name="q8" value="call myFunction()" class="mr-2"> call myFunction()</label><br>
                <label><input type="radio" name="q8" value="execute myFunction()" class="mr-2"> execute myFunction()</label>
                @error('q8')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">9. How do you add a comment in JavaScript?</p>
                <label><input type="radio" name="q9" value="// This is a comment" class="mr-2"> // This is a comment</label><br>
                <label><input type="radio" name="q9" value="&lt;!-- This is a comment --&gt;" class="mr-2"> &lt;!-- This is a comment --&gt;</label><br>
                <label><input type="radio" name="q9" value="** This is a comment **" class="mr-2"> ** This is a comment **</label>
                @error('q9')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">10. What is the correct way to declare a JavaScript array?</p>
                <label><input type="radio" name="q10" value="var colors = ['red', 'green', 'blue']" class="mr-2"> var colors = ['red', 'green', 'blue']</label><br>
                <label><input type="radio" name="q10" value="var colors = 'red', 'green', 'blue'" class="mr-2"> var colors = 'red', 'green', 'blue'</label><br>
                <label><input type="radio" name="q10" value="var colors = (1:'red', 2:'green', 3:'blue')" class="mr-2"> var colors = (1:'red', 2:'green', 3:'blue')</label>
                @error('q10')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">11. How do you find the number with the highest value of x and y in JavaScript?</p>
                <label><input type="radio" name="q11" value="Math.max(x, y)" class="mr-2"> Math.max(x, y)</label><br>
                <label><input type="radio" name="q11" value="Math.ceil(x, y)" class="mr-2"> Math.ceil(x, y)</label><br>
                <label><input type="radio" name="q11" value="ceil(x, y)" class="mr-2"> ceil(x, y)</label>
                @error('q11')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">12. Which operator is used to assign a value to a variable?</p>
                <label><input type="radio" name="q12" value="=" class="mr-2"> =</label><br>
                <label><input type="radio" name="q12" value="*" class="mr-2"> *</label><br>
                <label><input type="radio" name="q12" value="+" class="mr-2"> +</label>
                @error('q12')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">13. What will the following code return: Boolean(10 > 9)?</p>
                <label><input type="radio" name="q13" value="true" class="mr-2"> true</label><br>
                <label><input type="radio" name="q13" value="false" class="mr-2"> false</label><br>
                <label><input type="radio" name="q13" value="undefined" class="mr-2"> undefined</label>
                @error('q13')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">14. Which event occurs when the user clicks on an HTML element?</p>
                <label><input type="radio" name="q14" value="onclick" class="mr-2"> onclick</label><br>
                <label><input type="radio" name="q14" value="onchange" class="mr-2"> onchange</label><br>
                <label><input type="radio" name="q14" value="onmouseover" class="mr-2"> onmouseover</label>
                @error('q14')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">15. What is the correct way to write a JavaScript array?</p>
                <label><input type="radio" name="q15" value="var colors = ['red', 'green', 'blue']" class="mr-2"> var colors = ['red', 'green', 'blue']</label><br>
                <label><input type="radio" name="q15" value="var colors = 'red', 'green', 'blue'" class="mr-2"> var colors = 'red', 'green', 'blue'</label><br>
                <label><input type="radio" name="q15" value="var colors = (1:'red', 2:'green', 3:'blue')" class="mr-2"> var colors = (1:'red', 2:'green', 3:'blue')</label>
                @error('q15')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">16. How do you round the number 7.25 to the nearest integer in JavaScript?</p>
                <label><input type="radio" name="q16" value="Math.round(7.25)" class="mr-2"> Math.round(7.25)</label><br>
                <label><input type="radio" name="q16" value="Math.floor(7.25)" class="mr-2"> Math.floor(7.25)</label><br>
                <label><input type="radio" name="q16" value="Math.ceil(7.25)" class="mr-2"> Math.ceil(7.25)</label>
                @error('q16')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">17. How do you declare a JavaScript variable?</p>
                <label><input type="radio" name="q17" value="var carName;" class="mr-2"> var carName;</label><br>
                <label><input type="radio" name="q17" value="v carName;" class="mr-2"> v carName;</label><br>
                <label><input type="radio" name="q17" value="variable carName;" class="mr-2"> variable carName;</label>
                @error('q17')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">18. Which operator is used to compare two values?</p>
                <label><input type="radio" name="q18" value="==" class="mr-2"> ==</label><br>
                <label><input type="radio" name="q18" value="=" class="mr-2"> =</label><br>
                <label><input type="radio" name="q18" value="&&" class="mr-2"> &&</label>
                @error('q18')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">19. How do you find the length of a string in JavaScript?</p>
                <label><input type="radio" name="q19" value="str.length" class="mr-2"> str.length</label><br>
                <label><input type="radio" name="q19" value="str.len" class="mr-2"> str.len</label><br>
                <label><input type="radio" name="q19" value="str.size" class="mr-2"> str.size</label>
                @error('q19')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-2">
                <p class="text-lg font-semibold">20. How can you add a comment in a JavaScript file?</p>
                <label><input type="radio" name="q20" value="// This is a comment" class="mr-2"> // This is a comment</label><br>
                <label><input type="radio" name="q20" value="<!-- This is a comment -->" class="mr-2"> &lt;!-- This is a comment --&gt;</label><br>
                <label><input type="radio" name="q20" value="## This is a comment" class="mr-2"> ## This is a comment</label>
                @error('q20')
                <span class="text-red text-sm" style="color: red">{{ $message }}</span>
                @enderror
            </div>



            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
                    Submit Quiz
                </button>
            </div>
        </form>

        <div id="results" class="mt-6 text-center"></div>
    </div>
</x-app-layout>

