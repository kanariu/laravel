<?php

namespace App\Http\Controllers\Acess;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Acess\User;
use App\Models\Utils\State;
use Hash;
use Session;
use DB;
use Alert;

class LoginController extends Controller
{
    public function index(){
        if(Session::get('guest') == 'S' || Session::get('guest') == ''){
            return view('pages.acess.login.index');
        }else{
            Alert::info('Ops...', 'Você já está autenticado');
            return redirect()->route('index');
        }
    }

    public function login(Request $request){
        $user = User::where('username', $request->i_username)->get();
        
        if(Hash::check($request->i_password, collect($user)->first()->password)){

            Session::put('guest', 'N');
            Session::put('id', collect($user)->first()->id);
            Session::put('username', collect($user)->first()->username);
            Session::put('name', collect($user)->first()->name);
            Session::put('email', collect($user)->first()->email);
            Session::put('state', collect($user)->first()->state);

            return redirect()->route('index');
        }
    }

    public function logout(){
        Session::flush();

        return redirect()->route('index');
    }

    public function orders(){
        if(Session::get('guest') == 'N'){
            $user = User::find(Session::get('id'));

            return view('pages.orders.index', array(
                'guest' => Session::get('guest'),
                'id' =>  Session::get('id'),
                'name' =>  Session::get('name'),
                'username' =>  Session::get('username'),
                'email' =>  Session::get('email'),
                'user' => $user,
            ));
        }else{
            Alert::error('Ops...', 'Você não está autenticado');
            return redirect()->route('index');
        }
    }

    public function profile(){
        if(Session::get('guest') == 'N'){
            $user = User::find(Session::get('id'));
            $state = State::find(Session::get('state'));
            
            return view('pages.profile.index', array(
                'guest' => Session::get('guest'),
                'id' =>  Session::get('id'),
                'name' =>  Session::get('name'),
                'username' =>  Session::get('username'),
                'email' =>  Session::get('email'),
                'user' => $user,
                'state' => $state,
            ));
        }else{
            Alert::error('Ops...', 'Você não está autenticado');
            return redirect()->route('index');
        }
    }
}
