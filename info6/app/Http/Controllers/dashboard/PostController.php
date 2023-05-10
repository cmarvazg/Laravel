<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($posts);
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        return view('dashboard.post.create', ['post' => $post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        Post::create($request->validated());
        return back() -> with('status', 'Post  creado satisfactoriamente');
                
        //echo "Post Store";
        //var_dump($request);
        //dd($request);

        /*
        $validate=$request->validate(['title' => 'required | min:5 | max:500', 'url_clean' => 'required', 'content' => 'required']);
        Post::create($validate);
        */
        

        //dd($validate);

        //FORMA DE MANDAR DATOS CON EL VALIDATE

        /*
        //FORMA DE MANDAR DATOS MANUALMENTE
        dd($request->title);
        dd($request->url_clean);
        dd($request->content);
        */

        /*
        Post::create(['title' => $request -> title, 
                      'url_clean' => $request -> url_clean, 
                      'content' => $request -> content,]);
          */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //$post = Post::find($id);
        //dd($post);
        return view('dashboard.post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return back()->with('status', 'Post actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //Eliminación física
        $post -> delete();
        return back()->with('status', 'Post eliminado correctamente');
    }
}
