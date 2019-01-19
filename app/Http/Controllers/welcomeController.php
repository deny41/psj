<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class welcomeController extends Controller
{
    public function data_all()
    {
        $data_latest = DB::table('d_novel')->where('dn_status','!=',2)->where('dn_status','!=',3)->get();
        $data_popular = DB::table('d_novel')->where('dn_status','!=',2)->where('dn_status','!=',3)->get();
        $data_like = DB::table('d_novel')->where('dn_status','!=',2)->where('dn_status','!=',3)->get();
        return view('welcome',compact('data_latest','data_popular','data_like'));
    }
}
