<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Category;
use Illuminate\Http\Request;


class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = Content::all();
        return view("content.data", ['contents' => $contents]);
    }

    public function create()
    {
        $categories = Category::all();
        return view("content.create", ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'title' => 'required|min:10|unique:contents',
            'content' => 'required',
            'picture' => 'required'
        ]);

        $content = new Content();
        $content->id_cat = $request->category;
        $content->title = $request->title;
        $content->content = $request->content;

        if ($request->file('picture') != null) {
            $file = $request->file('picture');

            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSave = time() . '.' . $extension;

            $destinationPath = 'uploads';
            $file->move($destinationPath, $filenameSave);
        }

        $content->picture = $filenameSave;
        $content->save();
        return redirect('/contents');
    }

    public function show($id)
    {
        $content = Content::find($id);
        return view("content.show", ['content' => $content]);
    }

    public function edit($id)
    {
        $categories = Category::all();
        $content = Content::find($id);
        return view("content.edit", ['content' => $content, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'title' => 'required|min:10',
            'content' => 'required',
        ]);

        $content = Content::find($id);
        $content->id_cat = $request->category;
        $content->title = $request->title;
        $content->content = $request->content;

        if ($request->file('picture') != null) {
            $file = $request->file('picture');

            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSave = time() . '.' . $extension;

            $destinationPath = 'uploads';
            $file->move($destinationPath, $filenameSave);

            $picture_old = $destinationPath . '/' . $request->picture_old;
            if (file_exists(public_path($picture_old))) {
                unlink(public_path($picture_old));
            }
        } else {
            $filenameSave = $content->picture;
        }

        $content->picture = $filenameSave;
        $content->save();
        return redirect('/contents');
    }

    public function destroy($id)
    {
        $content = Content::find($id);
        $content->delete();
        return redirect('/contents');
    }
}
