<?php

namespace App\Http\Controllers;

use App\Models\htmlprogress;
use App\Models\javascript;
use App\Models\JavaScriptProgress;
use Illuminate\Http\Request;

use App\Models\html;
use Illuminate\Support\Facades\Gate;


class JavaScriptController extends Controller
{

    public function courseCreate(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9' => 'required',
            'q10' => 'required',
            'q11' => 'required',
            'q12' => 'required',
            'q13' => 'required',
            'q14' => 'required',
            'q15' => 'required',
            'q16' => 'required',
            'q17' => 'required',
            'q18' => 'required',
            'q19' => 'required',
            'q20' => 'required',


        ]);

        // Retrieve all courses from the database
        $allCourses = javascript::all(); // Retrieves all records from the courses table

        // Extract only the 'answer' attribute
        $correctAnswers = $allCourses->pluck('answer')->toArray(); // Get an array of only the 'answer' attributes

        // Prepare the user answers from the validated request
        $userAnswers = [
            $validated['q1'],
            $validated['q2'],
            $validated['q3'],
            $validated['q4'],
            $validated['q5'],
            $validated['q6'],
            $validated['q7'],
            $validated['q8'],
            $validated['q9'],
            $validated['q10'],
            $validated['q11'],
            $validated['q12'],
            $validated['q13'],
            $validated['q14'],
            $validated['q15'],
            $validated['q16'],
            $validated['q17'],
            $validated['q18'],
            $validated['q19'],
            $validated['q20'],
        ];

        // Initialize counters for correct and wrong answers
        $correctCount = 0;
        $wrongCount = 0;

        // Compare user answers with correct answers
        $results = [];
        foreach ($userAnswers as $index => $userAnswer) {
            // Get the correct answer, or set it to a default value if not found
            $correctAnswer = $correctAnswers[$index] ?? null;

            // If the correct answer is not found, you might want to handle this
            if ($correctAnswer === null) {
                // Log a message or handle the error as needed
                // For now, let's just skip this iteration and continue
                continue;
            }

            // Determine if the answer is correct
            $isCorrect = strtolower($userAnswer) === strtolower($correctAnswer);

            // Increment the correct or wrong counter based on the result
            if ($isCorrect) {
                $correctCount++;
            } else {
                $wrongCount++;
            }

            // Save each question result
            JavaScriptProgress::create([
                'question' => 'q' . ($index + 1), // Set the question identifier
                'user_answer' => $userAnswer,
                'correct_answer' => $correctAnswer, // This should not be null
                'is_correct' => $isCorrect,
                'correct_count' => $correctCount,
                'wrong_count' => $wrongCount,
                'user_id' => $request->auth, // Assuming you have user authentication
            ]);
        }


        // Return a response or some feedback here
        return redirect('/course/progress');
    }
}
