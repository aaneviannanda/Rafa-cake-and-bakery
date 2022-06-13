<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;
use Auth;
use Session;
class FavoriteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $id = Auth::id();
        $dataFavorites = Favorite::where('user_id', $id)->with(['users', 'products'])->get();
        return view('clients.favorite', compact('dataFavorites'));
    }

    public function insert(Request $request){
        $id = Auth::id();
        $data = Favorite::where(['user_id' => $id, 'product_id' => $request->product_id])->get();
        if(count($data) == 0){
            Favorite::create(['user_id' => $id, 'product_id' => $request->product_id]);
        }else{
            Session::flash('fav-error', "Data sudah ditambahkan di favorite!");
        }
        return redirect()->route('favorite');
    }

    public function delete($id){
        Favorite::find($id)->delete();
        return redirect()->route('favorite');
    }
}
