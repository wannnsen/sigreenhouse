<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;

class DataTrainingController extends Controller
{
    public function index()
    {
        $conditions = Condition::latest()->first();
        return view('datatraining', compact('conditions'));
    }

    // Add other methods for handling form submissions, saving data, etc.
}
