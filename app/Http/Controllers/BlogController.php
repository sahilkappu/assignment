<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function getBlogs()
    {
        try {
            $blogs = Blog::get();
            return view('site.blogs.index', compact('blogs'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Could not load the page');
        }
    }

    public function postCreateBlogs(Request $request)
    {
        try {
            // dd($request->all());
            DB::beginTransaction();
            $validator = Validator::make(
                $request->all(),
                [
                    "header" => "required",
                    'author' => "required",
                    'category' => "required",
                    'description' => 'required',
                    'icon' => 'required|image|mimes:png,jpeg,jpg,gif|max:2048',
                ]
            );
            if ($validator->fails()) {
                return back()->with('error',  $validator->getMessageBag()->first());
            }
            // $path = $request->file('icon')->store('public/assets/media/blogs');

            $path = ''; // Initialize path variable
            if ($request->hasFile('icon')) {
                $file = $request->file('icon');
                $filename = $file->getClientOriginalName();
                $path = $file->storeAs('public/assets/media/blogs', $filename);
            }

            Blog::create([
                'header' => $request['header'],
                'icon' => $filename,
                'author_name' => $request['author'],
                'category' => $request['category'],
                'description' => $request['description'],
            ]);
            DB::commit();
            return redirect()->route('show.blogs')->with('success', 'Blogs Added SuccessFully');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Could not load the page');
        }
    }

    public function getTechnologyBlogs()
    {
        try {
            $blogs = Blog::where('category', 'Technology')->get();
            return view('site.blogs.index', compact('blogs'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Could not load the page');
        }
    }
    public function getFoodBlogs()
    {
        try {
            $blogs = Blog::where('category', 'Food')->get();
            return view('site.blogs.index', compact('blogs'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Could not load the page');
        }
    }
    public function getHealthBlogs()
    {
        try {
            $blogs = Blog::where('category', 'Health')->get();
            return view('site.blogs.index', compact('blogs'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Could not load the page');
        }
    }
    public function getScienceBlogs()
    {
        try {
            $blogs = Blog::where('category', 'Science')->get();
            return view('site.blogs.index', compact('blogs'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Could not load the page');
        }
    }
}
