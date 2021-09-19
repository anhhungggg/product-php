<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Models\Book;
use App\Models\Disk;
use App\Models\Furniture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('frontend.home.index',['products'=>$products]);
    }

    public function destroy(Request $request){
        Product::destroy($request->input('box'));
        return Redirect::back();
    }
}
