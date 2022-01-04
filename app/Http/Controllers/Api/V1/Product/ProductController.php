<?php

namespace App\Http\Controllers\Api\V1\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::paginate();

        return successResponse(
            'Success',
            $product
        );
    }

    public function product()
    {
        $product = Product::with([
            'category:id,name',
            'detail'])->paginate();

        return successResponse(
            'Success',
            $product
        );
    }

    public function productSort(Request $request)
    {
        $sort_field = $request->sort_filed_by;
        $sort = $request->dir;

        $product = Product::orderBy($sort_field, $sort)->paginate();

        return successResponse(
            'Success',
            $product
        );
    }
    
    public function productGroup()
    {
        $product = Product::with(['category:id,name'])->get();
        
        $productGrouped = $product->groupBy('category.name');

        return successResponse(
            'Success',
            $productGrouped->toArray()
        );
    }
}
