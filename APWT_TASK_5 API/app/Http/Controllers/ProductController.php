<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AddProduct');//
    }
    
    public function ViewDetails(Request $request){
        $rules =[
                "pname"=>"required|min:3|max:20",
                "pId"=>"required|integer|digits:5",
                "cname"=>"required|min:6|max:30",
                'ctg' => 'required',
                'type' => 'required',
                'price' => 'required|integer|min:2'
        ];
        ['pname.required'=>"Required Field must be Filled-Up",
             'ctg.required'=>"Please! Choose a categoery"];
             $validator = Validator::make($request->all(),$rules);
            if ($validator->fails()) {
                return redirect('/')
                ->withInput()
                ->withErrors($validator);
            }
            else{
                $data = $request->input();
    
                    $product = new product;
                    $product->pname = $data['pname'];
                    $product->pId = $data['pId'];
                    $product->cname = $data['cname'];
                    $product->ctg = $data['ctg'];
                    $product->type = $data['type'];
                    $product->price = $data['price'];
                    $product->status = $data['status'];
                    $product->save();
                    return redirect('/')->withSuccess('Product Added successfully!');
            }
    
        }

        public function APIList(){
            return Product::all();
        }

        public function APIPost(Request $req){
            $product = new Product();
            $product->pname = $req->pname;
            $product->pId = $req->pId;
            $product->cname = $req->cname;
            $product->ctg = $req->ctg;
            $product->type = $req->type;
            $product->price = $req->price;
            $product->status = $req->status;
            $product->save();
    
            return redirect('http://127.0.0.1:8000/');
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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
