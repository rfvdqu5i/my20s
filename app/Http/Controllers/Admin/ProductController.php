<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::paginate(10);
        return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
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
        $product = Product::find($id);
        dd($product->category->name);
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
    public function getListProduct()
    {
        $product = Product::select(['id','name','category_id','origin_price','sale_price','content','status','user_id'])->orderBy('created_at','DESC')->get();
        return DataTables::of($product)
        ->addIndexColumn()
        ->addColumn('action',function ($product)
        {
            return '<button type="button" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#show-product"><i class="fas fa-eye"></i></button>
                    <button type="button" class="btn btn-block btn-outline-secondary" data-toggle="modal" data-target="#edit-product"><i class="far fa-edit"></i></button>
                    <button type="button" class="btn btn-block btn-outline-danger"><i class="fas fa-trash"></i></button>';
        })
        ->rawColumns(['action','status','file'])
        ->make(true);
    }
}
