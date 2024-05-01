<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $forms = Form::where('user_id', $request->user()->id)->get();

        return view('dashboard', compact('forms'));
    }
}
