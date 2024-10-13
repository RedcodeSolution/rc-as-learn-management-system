<?php

namespace App\Http\Controllers;

use App\Models\CssProgress;
use App\Models\htmlprogress;
use App\Models\JavaScriptProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\html;
use Illuminate\Support\Facades\Gate;


class ProgressController extends Controller
{

    public function getResults(Request $request)
    {
        // Get the logged-in user's ID
        $userId = Auth::id();

        // Retrieve the records for the logged-in user
        $userResults = htmlprogress::where('user_id', $userId)->get();

        // Get the correct count from the results (assuming you store the correct count in the correct_count column)
        $finalCount = $userResults->max('correct_count');

        $userResultsCss = CssProgress::where('user_id', $userId)->get();

        $finalCountCss = $userResultsCss->max('correct_count');

        $userResultsJs = JavaScriptProgress::where('user_id', $userId)->get();

        $finalCountJs = $userResultsJs->max('correct_count');

        return view('Course.progress', ['finalCount' => $finalCount, 'finalCountCss' => $finalCountCss,'finalCountJs' => $finalCountJs]);


      }
    }
