<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        try {
            return view('site.admin.dashboard');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Could not load the page');
        }
    }
    public function addBlogs()
    {
        try {
            return view('site.blogs.add');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Could not load the page');
        }
    }
}
