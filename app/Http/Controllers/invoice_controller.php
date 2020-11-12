<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class invoice_controller extends Controller
{
    public function invoice_show_01()
    {
        $user = Auth::user();
        $invoice = DB::table('invoice')->whereIn('YandM',[10901])->get();
        return view('pages.invoice', compact('user', 'invoice'));
    }
    public function invoice_show_03()
    {
        $user = Auth::user();
        $invoice = DB::table('invoice')->whereIn('YandM',[10903])->get();
        return view('pages.invoice', compact('user', 'invoice'));
    }
    public function invoice_show_05()
    {
        $user = Auth::user();
        $invoice = DB::table('invoice')->whereIn('YandM',[10905])->get();
        return view('pages.invoice', compact('user', 'invoice'));
    }
    public function invoice_show_07()
    {
        $user = Auth::user();
        $invoice = DB::table('invoice')->whereIn('YandM',[10907])->get();
        return view('pages.invoice', compact('user', 'invoice'));
    }
}
