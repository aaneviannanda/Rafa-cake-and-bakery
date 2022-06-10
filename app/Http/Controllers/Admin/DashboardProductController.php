<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DashboardProductController extends Controller
{
    public function index(){
        $categories = Category::all();
        $products = Product::with(['categories'])->paginate(10);
        return view('admins.view_addproduct', compact('categories', 'products'));
    }

    public function add_product(Request $request){
        $file = $request->file('image');
        $extensi = $file->getClientOriginalExtension();
        $name = explode(' ', $request->name);
        $filename = "product_".implode('_', $name).'.'.$extensi;
        $to_upload = 'product_img';
        $file->move($to_upload,$filename);
        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'link_img' => $filename,
            'rating' => $request->rating,
            'description' => $request->description
        ]);
        return redirect()->route('products');
    }

    public function update_product($id, Request $request){
        // get product by id
        $product = Product::find($id);

        // set value to input request
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->rating = $request->rating;
        $product->description = $request->description;

        if ($file = $request->file('image')) {
            // delete image if request image
            $destinationPath = 'product_img';
            File::delete($destinationPath.'/'.$product->link_img);

            // set image and save image
            $extensi = $file->getClientOriginalExtension();
            $name = explode(' ', $request->name);
            $filename = "product_".implode('_', $name).'.'.$extensi;
            $to_upload = 'product_img';
            $file->move($to_upload,$filename);
            $product->link_img = $filename;
        };
        $product->save();
        return redirect()->route('products');
    }

    public function delete_product($id){
        $product = Product::find($id);
        $destinationPath = 'product_img';
        File::delete($destinationPath.'/'.$product->link_img);
        $product->delete();
        return redirect()->route('products');
    }
}
