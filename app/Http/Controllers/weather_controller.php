<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class weather_controller extends Controller
{
    public function weather_show_today()
    {
        $user = Auth::user();
        $weather_1 = DB::table('weather_city')->whereIn('date', ['11/18星期三'])->get();
        $weather_2 = DB::table('weather_tmp')->whereIn('city_week', [0])->get();

        return view('pages.weather', compact('user', 'weather_1', 'weather_2'));
    }
    public function weather_show_week()
    {
        $user = Auth::user();
        $weather_1 = DB::table('weather_city')->get();
        $weather_2 = DB::table('weather_tmp')->get();
        return view('pages.weather', compact('user', 'weather_1', 'weather_2'));
    }
}
