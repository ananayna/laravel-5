<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    private $rules=[
        'author'=>'required|max:50|string',
        'title'=>'required|max:50|min:10|string',
        'due_date'=>'required|date',
        'description'=>'required|max:500|string',
    ];
    private $custom_meg=[
        'due_date.required' => "Date & Time is required",
        'due_date.date' => "Date & Time is not validate."
    ];
    private function storedatabase($post, $request){
        $post->author = $request->author;
        $post->title = $request->title;
        $post->due_date = $request->due_date;
        $post->description = $request->description;
        $post->save();
        return back();
    }
    public function store(Request $request){
        $request->validate($this->rules, $this->custom_meg);

        $post = new post();
        $this->storedatabase($post,$request);
        return back();
    }

    public function listPost(){
        $posts = post::latest()->get();
        return view ('post.list', compact('posts'));
    }
    public function edit($id){
        $post = post::find($id);
        return view ('post.edit', compact('post'));
    }
    public function update(Request $request, $id){
        $request->validate($this->rules,$this->custom_meg);
        $post = post::find($id);

        $this->storedatabase($post, $request);
        return back();
    }
    public function view($id){
        $post = post::find($id);
        return view ('post.view', compact('post'));
    }

}
