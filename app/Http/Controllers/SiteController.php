<?php

namespace App\Http\Controllers;

use App\Category;
use App\Site;
use App\comment;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data= post::with('Category','User')->orderBy('id','desc')->where('status',1)->paginate(5);
      $categories = Category::all();
       
        return view ('site.home',compact('data','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function singlepost($id){
            $data=post::find($id);
            
            return view('site.single',compact('data'));
    }

    public function postComment(Request $request){
        $comments = new comment();
        $comments->post_id = $request->input('post_id');
        $comments->user_id = Auth::id();
        $comments->comment = $request->input('comment');
        $comments->status = 'unapproved';
        if ($comments->save()) {
           return redirect()->back()->with('success','Comments will publish after review');
        }
        return $request;

    }

    public function category($id){

       $data= post::orderBy('id','desc')->where('status',1)->where('category_id',$id)->paginate(5);
       
       
        return view ('site.category',compact('data'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }
}
