<x-app-layout>
    <div class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
            <h1 class="text-5xl font-bold mb-6 text-center">Programming Quiz</h1>

            <form id="quizForm" class="space-y-6">
                <!-- Questions -->
                <div class="space-y-2">
                    <p class="text-lg font-semibold">1. What does HTML stand for?</p>
                    <label>
                        <input type="radio" name="q1" value="a" class="mr-2"> Hyper Text Markup Language
                    </label><br>
                    <label>
                        <input type="radio" name="q1" value="b" class="mr-2"> Home Tool Markup Language
                    </label><br>
                    <label>
                        <input type="radio" name="q1" value="c" class="mr-2"> Hyperlinks and Text Markup Language
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">2. What is the correct syntax for referring to an external script in HTML?</p>
                    <label>
                        <input type="radio" name="q2" value="a" class="mr-2"> &lt;script src="script.js"&gt;
                    </label><br>
                    <label>
                        <input type="radio" name="q2" value="b" class="mr-2"> &lt;script href="script.js"&gt;
                    </label><br>
                    <label>
                        <input type="radio" name="q2" value="c" class="mr-2"> &lt;script ref="script.js"&gt;
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">3. What is CSS used for?</p>
                    <label>
                        <input type="radio" name="q3" value="a" class="mr-2"> Structuring web content
                    </label><br>
                    <label>
                        <input type="radio" name="q3" value="b" class="mr-2"> Styling web content
                    </label><br>
                    <label>
                        <input type="radio" name="q3" value="c" class="mr-2"> Serving web pages
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">4. Which HTML tag is used to define an internal style sheet?</p>
                    <label>
                        <input type="radio" name="q4" value="a" class="mr-2"> &lt;style&gt;
                    </label><br>
                    <label>
                        <input type="radio" name="q4" value="b" class="mr-2"> &lt;css&gt;
                    </label><br>
                    <label>
                        <input type="radio" name="q4" value="c" class="mr-2"> &lt;script&gt;
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">5. How can you add a comment in JavaScript?</p>
                    <label>
                        <input type="radio" name="q5" value="a" class="mr-2"> // This is a comment
                    </label><br>
                    <label>
                        <input type="radio" name="q5" value="b" class="mr-2"> <!-- This is a comment -->
                    </label><br>
                    <label>
                        <input type="radio" name="q5" value="c" class="mr-2"> ' This is a comment
                    </label>
                </div>

                <div class="flex justify-center mt-6">
                    <button type="submit" class="bg-blue-500 text-white border px-6 py-2 rounded-lg ">
                        Submit
                    </button>

                </div>
            </form>

            <div id="results" class="mt-6 text-center"></div>
        </div>
    </div>

    <script>
        document.getElementById('quizForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const correctAnswers = {
                q1: 'a',
                q2: 'a',
                q3: 'b',
                q4: 'a',
                q5: 'a'
            };

            const userAnswers = {
                q1: document.querySelector('input[name="q1"]:checked')?.value,
                q2: document.querySelector('input[name="q2"]:checked')?.value,
                q3: document.querySelector('input[name="q3"]:checked')?.value,
                q4: document.querySelector('input[name="q4"]:checked')?.value,
                q5: document.querySelector('input[name="q5"]:checked')?.value
            };

            let score = 0;
            let resultsHTML = '';

            for (let question in correctAnswers) {
                if (userAnswers[question] === correctAnswers[question]) {
                    score++;
                    resultsHTML += `<p class="text-green-500">Question ${question.slice(1)}: Correct</p>`;
                } else {
                    resultsHTML += `<p class="text-red-500">Question ${question.slice(1)}: Incorrect</p>`;
                }
            }

            document.getElementById('results').innerHTML = `
                <h2 class="text-2xl font-bold mb-4">Your Score: ${score}/5</h2>
                ${resultsHTML}
            `;
        });
    </script>
</x-app-layout>
