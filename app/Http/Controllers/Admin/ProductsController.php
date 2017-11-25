<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = product::all();
 return view('admin.product.show',compact('products'));
      //
      // return view('products');
      //  $categories =  Category::pluck('category_name', 'id');
      //  return view('products',compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories =category::all();
        return view('admin.product.index',compact('categories'));


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
            'subtitle' => 'required',
            'image' => 'required',
            ]);

        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }else{
            // return 'No';
        }

        $products = new Product;
        $products->image = $imageName;
        $products->title = $request->title;
        $products->subtitle = $request->subtitle;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->brand = $request->brand;
        $products->save();
        $products->categories()->sync($request->categories);

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $url = Storage::url('test.jpg');
        return "<img src='".$url."'/>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // $category = category::where('id',$id)->first();

      $product = product::with('categories')->where('id',$id)->first();
         $categories =category::all();
         return view('admin.product.edit',compact('categories','product'));
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
            'title'=>'required',
            'subtitle' => 'required',
            'image' => 'required',
            ]);

        if ($request->hasFile('image')) {
// $request->file('image');
// return $request->image->storeAs('public','test.jpg');
          // $imageGet=$request->image->getClientOriginalName();
          $imageName = $request->image->store('public');

      }else{
        return 'No file';
      }

        $products = product::find($id);
        $products->image = $imageName;

        // $products->image = $imageGet;
        $products->title = $request->title;
        $products->subtitle = $request->subtitle;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->brand = $request->brand;
        $products->categories()->sync($request->categories);

        $products->save();

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            product::where('id',$id)->delete();
             return redirect()->back();
    }
}
