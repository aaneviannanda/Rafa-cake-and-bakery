<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Favorite;
use DB;

class DashboardAdminController extends Controller
{
    public function indexDashboardAdmin(){
        $favorite_products = Favorite::select('product_id', DB::raw('count(*) as total'))->with(['products'])->groupBy('product_id')->orderBy('total', 'DESC')->take(5)->get()->toArray();
        $datas = json_encode($favorite_products);
        return view('admins.index', compact('datas'));
    }

    public function getData(){
        $favorite_products = Favorite::select('product_id', DB::raw('count(*) as total'))->with(['products'])->groupBy('product_id')->orderBy('total', 'DESC')->take(5)->get()->toArray();
        return json_encode($favorite_products);
    }
}
