<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Book;
use App\Models\Disk;
use App\Models\Furniture;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    protected $folder = 'frontend.product.';

    public function index()
    {
        return view($this->folder . 'index');
//        return view('frontend.test.index');
    }

    public function store(ProductRequest $request)
    {
        $types = ['\App\Models\Disk', '\App\Models\Book', '\App\Models\Furniture'];
        $type  = $types[$request['productType']];

        $product = new $type($request->all());
        $product->save();

        // redirect
        return Redirect::to('')->with('success', 'Product Added successfully.');

    }
}
