<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Vendor;
use App\Http\Requests\ProductStoreRequest;
use App\Events\ProductAddedEvent;

class ProductController extends Controller
{
    public function index(){
        $product = DB::table('products')->get();
        return view('products.index', compact('product'));
    }
    public function show($id){
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }
     public function create() {
         $vendor_codes = Vendor::pluck('vendor_code');
 
         return view('products.create', compact('vendor_codes'));
     }
 
     public function store(ProductStoreRequest $request) {
         // フォームの入力内容をもとに、テーブルにデータを追加する
         $product = new Product();
         $product->product_name = $request->input('product_name');
         $product->price = $request->input('price');
         $product->vendor_code = $request->input('vendor_code');
         if ($request->hasFile('image')) {
            // アップロードされたファイル（name="image"）をstorage/app/public/productsフォルダに保存し、戻り値（ファイルパス）を変数$image_pathに代入する
            $image_path = $request->file('image')->store('public/products');
            // ファイルパスからファイル名のみを取得し、Productインスタンスのimage_nameプロパティに代入する
            $product->image_name = basename($image_path);
        }
         $product->save();
          // ProductAddedEventを発生させる
          event(new ProductAddedEvent($product));
         // リダイレクトさせる
         return redirect("/products/{$product->id}");
     }
}
