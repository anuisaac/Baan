<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function post() {

        return view('post');
    }

    public function index() {

        $posts = Post::latest()->paginate(12);
        return view('home', compact('posts'));
    }

    public function store( Request $request ) {

        $title = $request->title;
        $content = $request->content;
        //dd($title);
        //validation code to be added

        $validated = $request->validate( [ 
            'title' => 'required',
            'content'  => 'required'
         ] );
         //$validated = 1;
        
            //dd($validated);
        $post = Post::create($validated);
        return redirect('/')->with( 'success', 'New post created.' ); 

    }

    public function show( $id ) {

        $post = Post::findOrFail( $id );
        return view('post_view', compact('post') );

    }

    public function edit( $id ) {
        
        $post = Post::findOrFail( $id );
        if(!$post)
        {
            echo "hi";
        }
        //dd( $post );
        return view('post_update', compact('post'));
    }
        public function update( Request $request ) {
            $post = Post::find($request->id);
            $validated = $request->validate( [ 
                'title' => 'required',
                'content' => 'required'
            ] );
            $post->update($validated);
            return back()->with('success', 'Post updated.');

        }

        public function delete($id ) {

            $post = Post::findorFail( $id );
            $post->delete();
            return back();
        }
    }

