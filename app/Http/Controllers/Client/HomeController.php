<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Favorite;
use DB;

class HomeController extends Controller
{
    public function viewIndex(){
        $favorite_products = Favorite::select('product_id', DB::raw('count(*) as total'))->with(['products'])->groupBy('product_id')->orderBy('total', 'DESC')->take(3)->get();
        return view('clients.index', compact('favorite_products'));
    }
}
