<template>
    <div class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
            <h1 class="text-5xl font-bold mb-6 text-center">Programming Quiz</h1>

            <form @submit.prevent="submitQuiz" class="space-y-6">
                <!-- Questions -->
                <div class="space-y-2">
                    <p class="text-lg font-semibold">1. What does HTML stand for?</p>
                    <label>
                        <input type="radio" v-model="answers.q1" value="a" class="mr-2"> Hyper Text Markup Language
                    </label><br>
                    <label>
                        <input type="radio" v-model="answers.q1" value="b" class="mr-2"> Home Tool Markup Language
                    </label><br>
                    <label>
                        <input type="radio" v-model="answers.q1" value="c" class="mr-2"> Hyperlinks and Text Markup Language
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">2. What is the correct syntax for referring to an external script in HTML?</p>
                    <label>
                        <input type="radio" v-model="answers.q2" value="a" class="mr-2"> &lt;script src="script.js"&gt;
                    </label><br>
                    <label>
                        <input type="radio" v-model="answers.q2" value="b" class="mr-2"> &lt;script href="script.js"&gt;
                    </label><br>
                    <label>
                        <input type="radio" v-model="answers.q2" value="c" class="mr-2"> &lt;script ref="script.js"&gt;
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">3. What is CSS used for?</p>
                    <label>
                        <input type="radio" v-model="answers.q3" value="a" class="mr-2"> Structuring web content
                    </label><br>
                    <label>
                        <input type="radio" v-model="answers.q3" value="b" class="mr-2"> Styling web content
                    </label><br>
                    <label>
                        <input type="radio" v-model="answers.q3" value="c" class="mr-2"> Serving web pages
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">4. Which HTML tag is used to define an internal style sheet?</p>
                    <label>
                        <input type="radio" v-model="answers.q4" value="a" class="mr-2"> &lt;style&gt;
                    </label><br>
                    <label>
                        <input type="radio" v-model="answers.q4" value="b" class="mr-2"> &lt;css&gt;
                    </label><br>
                    <label>
                        <input type="radio" v-model="answers.q4" value="c" class="mr-2"> &lt;script&gt;
                    </label>
                </div>

                <div class="space-y-2">
                    <p class="text-lg font-semibold">5. How can you add a comment in JavaScript?</p>
                    <label>
                        <input type="radio" v-model="answers.q5" value="a" class="mr-2"> // This is a comment
                    </label><br>
                    <label>
                        <input type="radio" v-model="answers.q5" value="b" class="mr-2"> <!-- This is a comment -->
                    </label><br>
                    <label>
                        <input type="radio" v-model="answers.q5" value="c" class="mr-2"> ' This is a comment
                    </label>
                </div>

                <div class="flex justify-center mt-6">
                    <button type="submit" class="bg-blue-500 text-white border px-6 py-2 rounded-lg ">
                        Submit
                    </button>
                </div>
            </form>

            <div id="results" class="mt-6 text-center">
                <h2 v-if="showResults" class="text-2xl font-bold mb-4">Your Score: {{ score }}/5</h2>
                <div v-if="showResults" v-html="resultsHTML"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                answers: {
                    q1: '',
                    q2: '',
                    q3: '',
                    q4: '',
                    q5: ''
                },
                correctAnswers: {
                    q1: 'a',
                    q2: 'a',
                    q3: 'b',
                    q4: 'a',
                    q5: 'a'
                },
                score: 0, // Initialize the score variable
                resultsHTML: '',
                showResults: false
            };
        },
        methods: {
            submitQuiz() {
                this.score = 0; // Ensure score is reset on every submit
                this.resultsHTML = ''; // Reset results HTML

                for (let question in this.correctAnswers) {
                    if (this.answers[question] === this.correctAnswers[question]) {
                        this.score++;
                        this.resultsHTML += `<p class="text-green-500">Question ${question.slice(1)}: Correct</p>`;
                    } else {
                        this.resultsHTML += `<p class="text-red-500">Question ${question.slice(1)}: Incorrect</p>`;
                    }
                }
                this.showResults = true; // Show the results after form submission
            }
        }
    };
</script>

<style scoped>
    /* Add any additional styles if needed */
</style>
