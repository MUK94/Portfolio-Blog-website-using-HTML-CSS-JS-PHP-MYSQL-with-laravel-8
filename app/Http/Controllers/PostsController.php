<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{   

    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$posts = Post:: all();
        $posts = Post::orderBy('created_at', 'desc')->paginate(16);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required | min:25',
            'body'  => 'required | min:1000',
            'cover' => 'image|nullable|mimes:jpeg,png,jpg,svg|max:1999',
            //'cover' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',

            // handle post comments
        ]);

        // handle the file upload

        if($request->hasFile('cover_image')){
            // get filename with extensions
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // filename to store
            $filenameToStore = $filename .'_'.time().'.'.$extension;
            // upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenameToStore);
        }else{
            $filenameToStore = 'noimage.jpg';
        }

        $post = new Post;
        $post -> title = $request->input('title');
        $post -> body = $request->input('body');
        $post -> user_id = auth()->user()->id ;
        $post -> cover_image = $filenameToStore;
        $post -> save ();

        return redirect('/posts')->with('success', 'Post Created');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id); 
        return view('posts.show')->with('post', $post);
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $post = Post::find($id); 

        if(auth()->user()->name !==  "#@m@dou20_22_!?#"){
            return redirect('/posts')->with('error', 'Unauthorized page');
        }
        return view('posts.edit')->with('post', $post);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required | min:20',
            'body'  => 'required | min:1000',
            //'cover' => 'image|required|max:1999',
            'cover' => 'image|nullable|mimes:jpeg,png,jpg,svg|max:1999'
        ]);
        $post =  Post::find($id);
        // handle the file upload
        if($request->hasFile('cover_image')){
            // get filename with extensions
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // filename to store
            $filenameToStore = $filename .'_'.time().'.'.$extension;
            // upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenameToStore);
            // Delete file if exists
            Storage::delete('public/cover_images/'.$post->cover_image);
		
	   //Make thumbnails
	    $thumbStore = 'thumb.'.$filename.'_'.time().'.'.$extension;
            $thumb = Image::make($request->file('cover_image')->getRealPath());
            $thumb->resize(80, 80);
            $thumb->save('storage/cover_images/'.$thumbStore);
        }
        // update post 
        
        $post -> title = $request->input('title');
        $post -> body = $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $filenameToStore;
        }
        $post -> save ();

        return redirect('/posts')->with('success', 'Post Updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $post =  Post::find($id);
        //Check if post exists before deleting
        if (!isset($post)){
            return redirect('/posts')->with('error', 'No Post Found');
        }
        // delete if user id matches post id 
        if(auth()->user()->name !==  "#@m@dou20_22_!?#"){
            return redirect('/posts')->with('error', 'Unauthorized page');
        }
        if($post->cover_image != 'noimage.jpg'){
            Storage::delete('public/cover_images/' .$post->cover_image);
        }

        $post -> delete();

        return redirect('/posts')->with('success', 'Post Removed');
    }
}
