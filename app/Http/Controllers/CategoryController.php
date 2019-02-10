<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

	public function index(){
	$data = Category::all();
	return view ('admin.categories.index',compact('data'));
	}





	public function store(Request $request){
		$this->validate($request,[
		'name'=>'required',
		    ]
                 );
	$category = new Category();
	$category->name = $request->name;
	$category -> save();
	return redirect()->route('admin.categories.index')->with('success',' category has Added  succesful !!');
		
	}




	public function edit($id)
	{
		$data = Category::find($id);
		return view('admin.categories.edit',compact('data'));
	}



	public function update(Request $request,$id){
		$this->validate($request,[
		'name'=>'required',
		]);
		$category = Category::find($id);
		$category->name = $request->name;
		$category -> save();
		return redirect()->route('admin.categories.index')->with('success',' category has Edited  succesfully !!');

	}



	public function show($id){
		Category::find($id)->delete();
		return redirect()->route('admin.categories.index')->with('success',' category has Deleted  succesful !!');
	}




	public function destroy($id){
		
	}
	


}