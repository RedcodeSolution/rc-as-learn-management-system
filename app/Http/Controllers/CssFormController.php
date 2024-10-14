<?php

namespace App\Http\Controllers;

use App\Models\CssForm;
use App\Models\CssProgress;
use App\Models\htmlprogress;
use Illuminate\Http\Request;



class CssFormController extends Controller
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
            'q21' => 'required',
            'q22' => 'required',
            'q23' => 'required',
            'q24' => 'required',
            'q25' => 'required',
            'q26' => 'required',
            'q27' => 'required',
            'q28' => 'required',
            'q29' => 'required',
            'q30' => 'required',
            'q31' => 'required',
            'q32' => 'required',
            'q33' => 'required',
            'q34' => 'required',
            'q35' => 'required',
            'q36' => 'required',
            'q37' => 'required',
            'q38' => 'required',
            'q39' => 'required',
            'q40' => 'required',
            'q41' => 'required',
            'q42' => 'required',
            'q43' => 'required',
            'q44' => 'required',
            'q45' => 'required',
            'q46' => 'required',
            'q47' => 'required',
            'q48' => 'required',
            'q49' => 'required',
            'q50' => 'required',

        ]);

        // Retrieve all courses from the database
        $allCourses = CssForm::all(); // Retrieves all records from the courses table

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
            $validated['q21'],
            $validated['q22'],
            $validated['q23'],
            $validated['q24'],
            $validated['q25'],
            $validated['q26'],
            $validated['q27'],
            $validated['q28'],
            $validated['q29'],
            $validated['q30'],
            $validated['q31'],
            $validated['q32'],
            $validated['q33'],
            $validated['q34'],
            $validated['q35'],
            $validated['q36'],
            $validated['q37'],
            $validated['q38'],
            $validated['q39'],
            $validated['q40'],
            $validated['q41'],
            $validated['q42'],
            $validated['q43'],
            $validated['q44'],
            $validated['q45'],
            $validated['q46'],
            $validated['q47'],
            $validated['q48'],
            $validated['q49'],
            $validated['q50'],
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
            CssProgress::create([
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
