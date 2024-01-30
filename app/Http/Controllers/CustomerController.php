<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        try {
            return view('site.customer.dashboard');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Could not load the page');
        }
    }
}
