<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class ProductController extends Controller
{
    public function index(){
        $product = DB::table('products')->get();
        return view('products.index', compact('product'));
    }
    public function show($id){
        $product = Product::find($id)
        return view('products.show', compact('product'));
    }
}
