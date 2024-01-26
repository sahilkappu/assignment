<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userProfile($slug)
    {
        try {
            $user = User::where('slug', $slug)->firstOrFail();
            return view('profiles.show', compact('user'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Could not Update the details');
        }
    }

    public function updateDetails(Request $request)
    {
        // dd($request->all());
        try {
            User::where('id', $request['id'])->update([
                'name' => $request['name'],
                'email' => $request['email'],
                'phone_number' => $request['phone_number'],
                'address' => $request['address'],
            ]);
            return redirect()->back()->with('success', 'User Data Updated SuccessFully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Could not Update the details');
        }
    }
}
