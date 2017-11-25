<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
         {
             $categories = category::all();
             return view('admin.category.show',compact('categories'));
         }
         /**
          * Show the form for creating a new resource.
          *
          * @return \Illuminate\Http\Response
          */
         public function create()
         {
             return view('admin.category.index');
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
                 'category_name' => 'required',
                 ]);

             $category = new category;
             $category->category_name = $request->category_name;
             $category->save();
             return redirect(route('category.index'));
         }
         /**
          * Display the specified resource.
          *
          * @param  int  $id
          * @return \Illuminate\Http\Response
          */
         public function show($id)
         {
             //
         }
         /**
          * Show the form for editing the specified resource.
          *
          * @param  int  $id
          * @return \Illuminate\Http\Response
          */
         public function edit($id)
         {
             $category = category::where('id',$id)->first();
             return view('admin.category.edit',compact('category'));
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
             $this->validate($request,[
                 'category_name' => 'required',
                 ]);
             $category = category::find($id);
             $category->category_name = $request->category_name;
             $category->save();
             return redirect(route('category.index'));
         }
         /**
          * Remove the specified resource from storage.
          *
          * @param  int  $id
          * @return \Illuminate\Http\Response
          */
         public function destroy($id)
         {
             category::where('id',$id)->delete();
             return redirect()->back();
         }
}
