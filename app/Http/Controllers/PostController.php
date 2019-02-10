<?php

namespace App\Http\Controllers;

use App\Category;
use App\post;
use File;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = post::all();
        return view ('admin.posts.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
       return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            
            'features_image'=>'required'
            // 'status'->'required'
                    ],
        [
         'title.required'=>'Please Provide a Title',
         'description.required'=>'Please Provide a Description',
         
  ]
);
 
        $data = new post();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->category_id = $request->name;
        // $data->status = $request->status;

        if($request->file('features_image')){
            $image = $request->file('features_image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path ('post/'.$img);
            Image::make($image)->save($location);
            $data->features_image = $img;

        }

        $data->save();
       return redirect()->route('admin.posts.index')->with('success','post has added successfully !!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
       if(File::exists('post/'.$post->features_image)){
        File::delete('post/'.$post->features_image);
       }

        $post->delete();
        return redirect()->route('admin.posts.index')->with('success','Deleted Successfully !!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {    
        $categories = Category::all();
        return view('admin.posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, post $post)
    {
        $this->validate($request,
          [
            'title'=>'required',
            'description'=>'required',
            'features_image'=>'nullable|image'


        ],
        [
            'title.required'=>'Please Edit a Title ',
            'description.required'=>'Please Edit a Description',
         ]
        );
         //Data Edit
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->name;
        
        //Data Delete

        if(File::exists('post/'.$post->features_image)){
            File::delete('post/'.$post->features_image);
        }
               //Data Insert
         if($request->file('features_image')){
            $image = $request->file('features_image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path ('post/'.$img);
            Image::make($image)->save($location);
            $post->features_image = $img;

        }


        $post->save();


        return redirect()->route('admin.posts.index')->with('success','Edited Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        /*$post->delete();
        return redirect()->route('admin.posts.index')->with('success','Deleted Successfully !!');*/

       
    }
}
