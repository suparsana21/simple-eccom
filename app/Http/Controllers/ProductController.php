<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function category($id)
    {
        $data['products'] = Product::where('category_id',$id)->get();
        return view('product',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::Get();
        return view('product-new',$data);        
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
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'category' => 'required',
                'name' => 'required',
                'description' => 'required|min:15',
                'price' => 'required|integer',
                'seller_name' =>'required',
                'seller_phone' =>'required|min:6',
                'seller_address' =>'required|min:10',
            ]);
        
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time().md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                
            }
            $req = [
                'category_id' => $request->category,
                'product_name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'seller_name' => $request->seller_name,
                'seller_phone' => $request->seller_phone,
                'seller_address' => $request->seller_address,
                'image' => $name,
                'seller_ktp' => $name,
            ];
            Product::create($req);
            return redirect('product/category/'.$request->category);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data'] = Product::where('id',$id)->with('category')->first();
        return view('product-detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
