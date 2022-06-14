<?php

namespace App\Http\Controllers;

use App\Models\Content;
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
        return view("content.create");
    }

    public function store(Request $request)
    {
        $content = new Content();
        $content->id_cat = $request->category;
        $content->title = $request->title;
        $content->content = $request->content;
        $content->picture = $request->picture;
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
        $content = Content::find($id);
        return view("content.edit", ['content' => $content]);
    }

    public function update(Request $request, $id)
    {
        $content = Content::find($id);
        $content->id_cat = $request->category;
        $content->title = $request->title;
        $content->content = $request->content;
        $content->picture = $request->picture;
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
