<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts=Post::all();
        return view ('post/index',['posts'=>$posts]);
    }
    public function show(Post $posts)
    {
        return view('post/view',compact('posts'));
      
    }
    public function create()
    {
       return view('post/create');
    }
    public function store(Request $request,Post $post)
    {
        
        $posts = new Post; 
        $request -> validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);
        $posts->title = $request -> title;
        $posts->content = $request -> content;
        $posts->image = $request -> image;
        if($request->hasfile('image')){
            $request->file('image')->move('image/',$request->file('image')->getClientOriginalName());
            $posts->image = $request->file('image')->getClientOriginalName();
            $posts->save();    
        }
  
        return redirect('/post')->with('status','Input Succes');
    }
    
    public function destroy(Post $posts)
    {
        Post::destroy($posts->id); 
        return redirect('/post')->with('status','Deleting Succes');
       
    }
    public function edit(Post $posts)
    {
        return view('post/edit',compact('posts'));
    }

    public function update(Request $request,Post $posts)
    {
        $request -> validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        Post::where('id',$posts->id)
            ->update([
                'title'=>$request->title,
                'image'=>$request->image,
                'content'=>$request->content
                ]);
                if($request->hasfile('image')){
                    $request->file('image')->move('image/',$request->file('image')->getClientOriginalName());
                    $posts->image = $request->file('image')->getClientOriginalName();
                    $posts->save();    
                }
          
        return redirect('/post')->with('status','Editing Succes');    
    }
    public function json(){
        $posts=Post::all();
        return $posts;
    }
}

