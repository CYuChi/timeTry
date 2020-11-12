<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class oil_controller extends Controller
{
    public function oil_show()
    {
        $user = Auth::user();
        $oil_1 = DB::table('oilprice')->whereIn('oil_name',['台塑石化'])->get();
        $oil_2 = DB::table('oilprice')->whereIn('oil_name',['台灣中油'])->get();
        return view('pages.oil', compact('user', 'oil_1' , 'oil_2'));
    }
}
