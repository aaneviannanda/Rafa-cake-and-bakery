<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Favorite;
use Auth;

class ProductController extends Controller
{
    public function index(){
        $id=Auth::id();
        $categories = Category::all();
        $data = Favorite::select('product_id')->where('user_id', $id)->get();
        $products_id = array();
        foreach($data as $product){
            $products_id[]=$product->product_id;
        };
        $products = Product::whereNotIn('id', $products_id)->get();
        $data = array();
        foreach($categories as $category){
            foreach($products as $product){
                if($category->id == $product->category_id){
                    $data [$category->name][] =
                        [
                            'id' => $product->id,
                            'name' => $product->name,
                            'price' => $product->price,
                            'link_img' => $product->link_img,
                            'rating' => $product->rating,
                            'description' => $product->description
                        ];
                }
            }
        }
        return view('clients.products', compact('data'));
    }

    public function detail($id){
        $product = Product::with(['categories'])->find($id);
        return view('clients.detail', compact('product'));
    }
}
