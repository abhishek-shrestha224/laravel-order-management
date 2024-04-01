<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $content = Content::where('name', $slug)->firstOrFail();
        return view('cms.edit', ['content' => $content]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'cta_text' => 'required|string|max:255',
            'bg_img' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('err', 'Something Went Wrong');
        }

        if ($request->hasFile('bg_img')) {
            $file = $request->file('bg_img');
            $extension = $file->getClientOriginalExtension();
            $filename = 'hero' . '.' . $extension;
            $path = 'uploads/';
            $file->move($path, $filename);

            $content = Content::where('name', $slug);

            if (File::exists($filename)) {
                File::delete($filename);
            }

            $content->update([
                'title' => $request->title,
                'message' => $request->message,
                'cta_text' => $request->cta_text,
                'bg_img' => $path . $filename,
            ]);
        }

        return redirect()->route('root');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        //
    }
}
