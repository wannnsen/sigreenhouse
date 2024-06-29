<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;

class DashboardController extends Controller
{
    public function index()
    {
        $conditions = Condition::latest()->first();
        return view('dashboard', compact('conditions'));
    }
}
