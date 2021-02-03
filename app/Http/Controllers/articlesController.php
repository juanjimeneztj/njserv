<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class articlesController extends Controller
{
    public function index(){
        $arts = DB::table('articles')->get();
        return view('articles.all', ['articles'=> $arts]);
    }
}
