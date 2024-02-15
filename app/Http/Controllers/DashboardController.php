<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Contracts\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('dashboard', [
            'questions' => Question::all(),
        ]);
    }
}
