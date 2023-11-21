<?php

namespace App\Http\Controllers\API\V1;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\ProductImage;

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

        return Product::latest()->get();
    }

    public function products()
    {
        //

        return Product::latest()->paginate(3);
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

        // return $request->all();
        $product = Product::create([
            'name' => $request->product_name,
            'price' => $request->product_price,
            'product_category_id' => $request->product_category_id
        ]);

        //store images
        for ($i=0; $i < 6; $i++) {
            # code...
            $i = $i + 1;
            if($request->file('productImg'.$i)){

                $product_img = $request->file('productImg'.$i);

                $path = $product_img->store('products', 'public');

                ProductImage::create([
                    'product_id' => $product->id,
                    'img_url' => $path
                ]);
            }


        }
        // store products data in db



            return $product;





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

        return $product->load('images');
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
