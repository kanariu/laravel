<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Models\Utils\Product;
use Carbon\Carbon;

class IndexController extends Controller
{    
    public function index(){

        if(Session::get('guest') == 'N'){
            $guest = Session::get('guest');
            $id = Session::get('id');
            $name = Session::get('name');
            $username = Session::get('username');
            $email = Session::get('email');
        }else{
            $guest = Session::put('guest', 'S');
            $id = Session::put('id', '');
            $name = Session::put('name', '');
            $username = Session::put('username', '');
            $email = Session::put('email', '');
        }

        $defaultLocale = config('app.locale');
        $promotions = Product::where('promotion', 'S')->limit(6)->get();
        $highlights = Product::where('highlight', 'S')->limit(6)->get();
        $m_categories_case = DB::table('tech_categories')->where('type', 'case')->where('active', 'S')->orderBy('name','ASC')->limit(10)->get();
        $m_categories_mbs = DB::table('tech_categories')->where('type', 'motherboard')->where('active', 'S')->orderBy('name','ASC')->limit(5)->get();
        $today = Carbon::now();

        return view('pages.index.home', array (
                                                    'promotions' => $promotions,
                                                    'locale' => $defaultLocale,
                                                    'highlights' => $highlights,
                                                    'menu_cases' => $m_categories_case,
                                                    'menu_mbs' => $m_categories_mbs,
                                                    'guest' => $guest,
                                                    'id' => $id,
                                                    'name' => $name,
                                                    'username' => $username,
                                                    'email' => $email,
                                                    'today' => $today,
                                                ));
    }
}
