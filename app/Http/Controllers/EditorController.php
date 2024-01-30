<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index()
    {
        try {
            return view('site.editor.dashboard');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Could not load the page');
        }
    }
}
