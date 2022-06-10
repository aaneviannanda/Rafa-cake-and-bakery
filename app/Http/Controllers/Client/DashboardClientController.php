<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class DashboardClientController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function indexDashboardClient(){
        return view('clients.index');
    }
}
