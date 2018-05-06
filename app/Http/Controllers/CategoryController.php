<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::with('products')->get();
        return view('welcome',$data);
    }

    public function seeder()
    {
        $data = [
            [
                "name" => "Kerajinan",
                "image" => "https://3.bp.blogspot.com/-Q-D3RM5P9GU/V6TATDp7F5I/AAAAAAAAB1g/FcQ9zxQ91_QEgy8dVufVgUQDQUZnjjBpgCLcB/s1600/Toples%2Bdan%2BVas%2BDari%2BKertas_opt.jpg"
            ],
            [
                "name" => "Pertanian",
                "image" => "https://www.gohawaii.com/sites/default/files/styles/island_curated_content_large/public/content-images/11984-Farm%20Tours%20in%20Hawaii_1.jpg?itok=q-fE3QDM"
            ],
            [
                "name" => "Peternakan",
                "image" => "https://pbs.twimg.com/profile_images/890157563534114816/fY_UMmiV_400x400.jpg"
            ],
            [
                "name" => "Perikanan",
                "image" => "http://www.dokani.com.bd/wp-content/uploads/2016/02/bata-fish.jpg"
            ],
            [
                "name" => "Olahan Pangan",
                "image" => "https://allsharktankproducts.com/wp-content/uploads/2018/02/Avocaderia-shark-tank-400x400.jpg"
            ]
            

        ];

        Category::insert($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    public function list()
    {
        $category = Category::get();
        return response()->json($category);
    }
}
