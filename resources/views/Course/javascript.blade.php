<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-end items-center">
            <a href="/course/progress" class="text-black px-4 py-2 rounded">
                Progress
            </a>

            <a href="/course/quiz" class="text-black px-8 py-2 rounded">
                Quiz
            </a>
        </div>
    </x-slot>

    <div class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
            <h1 class="text-5xl font-bold mb-6 text-center">JavaScript Quiz</h1>

            <form id="quizForm" class="space-y-6">
                <!-- Questions -->
                <div class="space-y-2">
                    <p class="text-lg font-semibold">1. What is the correct syntax to print a message in JavaScript?</p>
                    <label>
                        <input type="radio" name="q1" value="a" class="mr-2"> console.log("Hello World!");
                    </label><br>
                    <label>
                        <input type="radio" name="q1" value="b" class="mr-2"> print("Hello World!");
                    </label><br>
                    <label>
                        <input type="radio" name="q1" value="c" class="mr-2"> echo("Hello World!");
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">2. Which of the following is not a JavaScript data type?</p>
                    <label>
                        <input type="radio" name="q2" value="a" class="mr-2"> String
                    </label><br>
                    <label>
                        <input type="radio" name="q2" value="b" class="mr-2"> Number
                    </label><br>
                    <label>
                        <input type="radio" name="q2" value="c" class="mr-2"> Character
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">3. How do you create a function in JavaScript?</p>
                    <label>
                        <input type="radio" name="q3" value="a" class="mr-2"> function myFunction() {}
                    </label><br>
                    <label>
                        <input type="radio" name="q3" value="b" class="mr-2"> function:myFunction() {}
                    </label><br>
                    <label>
                        <input type="radio" name="q3" value="c" class="mr-2"> create myFunction() {}
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">4. What is the result of 2 + '2' in JavaScript?</p>
                    <label>
                        <input type="radio" name="q4" value="a" class="mr-2"> 4
                    </label><br>
                    <label>
                        <input type="radio" name="q4" value="b" class="mr-2"> 22
                    </label><br>
                    <label>
                        <input type="radio" name="q4" value="c" class="mr-2"> "22"
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">5. Which of the following is used to declare a variable in JavaScript?</p>
                    <label>
                        <input type="radio" name="q5" value="a" class="mr-2"> var
                    </label><br>
                    <label>
                        <input type="radio" name="q5" value="b" class="mr-2"> let
                    </label><br>
                    <label>
                        <input type="radio" name="q5" value="c" class="mr-2"> Both a and b
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">6. What is the correct way to write a JavaScript array?</p>
                    <label>
                        <input type="radio" name="q6" value="a" class="mr-2"> var colors = "red", "green", "blue";
                    </label><br>
                    <label>
                        <input type="radio" name="q6" value="b" class="mr-2"> var colors = ["red", "green", "blue"];
                    </label><br>
                    <label>
                        <input type="radio" name="q6" value="c" class="mr-2"> var colors = (1:"red", 2:"green", 3:"blue");
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">7. How can you add a comment in JavaScript?</p>
                    <label>
                        <input type="radio" name="q7" value="a" class="mr-2"> // This is a comment
                    </label><br>
                    <label>
                        <input type="radio" name="q7" value="b" class="mr-2"> <!-- This is a comment -->
                    </label><br>
                    <label>
                        <input type="radio" name="q7" value="c" class="mr-2"> * This is a comment *
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">8. What is the purpose of the this keyword in JavaScript?</p>
                    <label>
                        <input type="radio" name="q8" value="a" class="mr-2"> Refers to the global object
                    </label><br>
                    <label>
                        <input type="radio" name="q8" value="b" class="mr-2"> Refers to the current function
                    </label><br>
                    <label>
                        <input type="radio" name="q8" value="c" class="mr-2"> Refers to the current object
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">9. How do you define an object in JavaScript?</p>
                    <label>
                        <input type="radio" name="q9" value="a" class="mr-2"> var obj = {};
                    </label><br>
                    <label>
                        <input type="radio" name="q9" value="b" class="mr-2"> var obj = [];
                    </label><br>
                    <label>
                        <input type="radio" name="q9" value="c" class="mr-2"> var obj = ();
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">10. Which of the following is a JavaScript framework?</p>
                    <label>
                        <input type="radio" name="q10" value="a" class="mr-2"> React
                    </label><br>
                    <label>
                        <input type="radio" name="q10" value="b" class="mr-2"> Django
                    </label><br>
                    <label>
                        <input type="radio" name="q10" value="c" class="mr-2"> Ruby on Rails
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">11. What is the output of typeof NaN?</p>
                    <label>
                        <input type="radio" name="q11" value="a" class="mr-2"> "number"
                    </label><br>
                    <label>
                        <input type="radio" name="q11" value="b" class="mr-2"> "NaN"
                    </label><br>
                    <label>
                        <input type="radio" name="q11" value="c" class="mr-2"> "undefined"
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">12. Which operator is used to assign a value to a variable?</p>
                    <label>
                        <input type="radio" name="q12" value="a" class="mr-2"> =
                    </label><br>
                    <label>
                        <input type="radio" name="q12" value="b" class="mr-2"> ==
                    </label><br>
                    <label>
                        <input type="radio" name="q12" value="c" class="mr-2"> ===
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">13. What will console.log(1 == '1') return?</p>
                    <label>
                        <input type="radio" name="q13" value="a" class="mr-2"> true
                    </label><br>
                    <label>
                        <input type="radio" name="q13" value="b" class="mr-2"> false
                    </label><br>
                    <label>
                        <input type="radio" name="q13" value="c" class="mr-2"> undefined
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">14. How do you create a new array in JavaScript?</p>
                    <label>
                        <input type="radio" name="q14" value="a" class="mr-2"> var arr = new Array();
                    </label><br>
                    <label>
                        <input type="radio" name="q14" value="b" class="mr-2"> var arr = [];
                    </label><br>
                    <label>
                        <input type="radio" name="q14" value="c" class="mr-2"> Both a and b
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">15. What does JSON stand for?</p>
                    <label>
                        <input type="radio" name="q15" value="a" class="mr-2"> JavaScript Object Notation
                    </label><br>
                    <label>
                        <input type="radio" name="q15" value="b" class="mr-2"> JavaScript Online Notation
                    </label><br>
                    <label>
                        <input type="radio" name="q15" value="c" class="mr-2"> Java Standard Object Notation
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">16. Which method converts a JSON string into a JavaScript object?</p>
                    <label>
                        <input type="radio" name="q16" value="a" class="mr-2"> JSON.parse()
                    </label><br>
                    <label>
                        <input type="radio" name="q16" value="b" class="mr-2"> JSON.stringify()
                    </label><br>
                    <label>
                        <input type="radio" name="q16" value="c" class="mr-2"> JSON.convert()
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">17. What will be the output of console.log(0.1 + 0.2 == 0.3)?</p>
                    <label>
                        <input type="radio" name="q17" value="a" class="mr-2"> true
                    </label><br>
                    <label>
                        <input type="radio" name="q17" value="b" class="mr-2"> false
                    </label><br>
                    <label>
                        <input type="radio" name="q17" value="c" class="mr-2"> undefined
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">18. Which method is used to remove the last element from an array?</p>
                    <label>
                        <input type="radio" name="q18" value="a" class="mr-2"> pop()
                    </label><br>
                    <label>
                        <input type="radio" name="q18" value="b" class="mr-2"> shift()
                    </label><br>
                    <label>
                        <input type="radio" name="q18" value="c" class="mr-2"> delete()
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">19. How can you convert a string to a number in JavaScript?</p>
                    <label>
                        <input type="radio" name="q19" value="a" class="mr-2"> parseInt()
                    </label><br>
                    <label>
                        <input type="radio" name="q19" value="b" class="mr-2"> parseFloat()
                    </label><br>
                    <label>
                        <input type="radio" name="q19" value="c" class="mr-2"> Both a and b
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">20. What will be the output of console.log(2 > 1 > 0)?</p>
                    <label>
                        <input type="radio" name="q20" value="a" class="mr-2"> true
                    </label><br>
                    <label>
                        <input type="radio" name="q20" value="b" class="mr-2"> false
                    </label><br>
                    <label>
                        <input type="radio" name="q20" value="c" class="mr-2"> NaN
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">21. What is a closure in JavaScript?</p>
                    <label>
                        <input type="radio" name="q21" value="a" class="mr-2"> A function having access to its outer function scope
                    </label><br>
                    <label>
                        <input type="radio" name="q21" value="b" class="mr-2"> A function that does not return anything
                    </label><br>
                    <label>
                        <input type="radio" name="q21" value="c" class="mr-2"> A function that calls itself
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">22. What will typeof null return?</p>
                    <label>
                        <input type="radio" name="q22" value="a" class="mr-2"> "object"
                    </label><br>
                    <label>
                        <input type="radio" name="q22" value="b" class="mr-2"> "null"
                    </label><br>
                    <label>
                        <input type="radio" name="q22" value="c" class="mr-2"> "undefined"
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">23. How do you create a promise in JavaScript?</p>
                    <label>
                        <input type="radio" name="q23" value="a" class="mr-2"> new Promise()
                    </label><br>
                    <label>
                        <input type="radio" name="q23" value="b" class="mr-2"> new Async()
                    </label><br>
                    <label>
                        <input type="radio" name="q23" value="c" class="mr-2"> new Callback()
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">24. Which method adds one or more elements to the end of an array?</p>
                    <label>
                        <input type="radio" name="q24" value="a" class="mr-2"> push()
                    </label><br>
                    <label>
                        <input type="radio" name="q24" value="b" class="mr-2"> unshift()
                    </label><br>
                    <label>
                        <input type="radio" name="q24" value="c" class="mr-2"> concat()
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">25. What will be the output of console.log(1 + '1')?</p>
                    <label>
                        <input type="radio" name="q25" value="a" class="mr-2"> 2
                    </label><br>
                    <label>
                        <input type="radio" name="q25" value="b" class="mr-2"> "11"
                    </label><br>
                    <label>
                        <input type="radio" name="q25" value="c" class="mr-2"> 1
                    </label>
                </div>
            </form>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-blue-500 text-white border px-6 py-2 rounded-lg" onclick="submitQuiz()">
                    Submit
                </button>
            </div>

            <div id="results" class="mt-6 text-center"></div>
        </div>
    </div>
</x-app-layout>
