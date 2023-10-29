<?php

namespace App\Http\Controllers\API\V1;
use App\Http\Controllers\Controller;

use App\Models\ProductCategory;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        // Get all categories from the database
        $categories = DB::table('product_categories')->get();

        // Organize categories into a hierarchy
        $categoryTree = $this->buildCategoryTree($categories);

        return $categoryTree;
    }

    private function buildCategoryTree($categories, $parentId = null)
    {
        $categoryTree = [];

        foreach ($categories as $category) {
            if ($category->parentCategoryID === $parentId) {
                $subcategories = $this->buildCategoryTree($categories, $category->id);

                if (!empty($subcategories)) {
                    $category->subcategories = $subcategories;
                }

                $categoryTree[] = $category;
            }
        }

        return $categoryTree;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductCategoryRequest  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        //
    }
}
