<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function fetchData()
    {
        $products = products::orderBy('created_at', 'desc')->get()->toArray();
        return $products;
    }
    public function index()
    {
       
        $data= array(
            'title'=>'Products',
            'products'=>$this->fetchData()
        );
        return view('product.products', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= array('title'=>'Add Product');
        return view('product.addproduct', $data);
    }
    /**
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
        ]);
        $products = products::create($storeData);
        echo "200";
        //return redirect('/product')->with('completed', 'Customer has been saved!');
    }
}
