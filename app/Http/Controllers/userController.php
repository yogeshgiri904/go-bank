<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\Login;

class userController extends Controller
{
    function signup(request $req)
    {
        $emailResult = DB::table('login')
        ->where('email', $req->post('email'))
        ->exists();
        $userResult = DB::table('login')
        ->where('username', $req->post('username'))
        ->exists();
        if ($emailResult == 1) {
            $req->session()->flash('emailError', true);
        }
        elseif ($userResult == 1) {
            $req->session()->flash('userError', true);
        }
        else {
            $login = new Login;
            $login->username = $req->post('username');
            $login->email = $req->post('email');
            $login->pass = $req->post('pass');
            $login->mobile = $req->post('mobile');
            $login->save();
            if($login->save() == 1)
            {
                $req->session()->flash('insertSuccess', true);
            }
            else{
                $req->session()->flash('insertError', true);
            }
        }
        return redirect('signup');
    }

    function signin(request $req)
    {
        $username = $req->post('username');
        $pass = $req->post('pass');
        $result = DB::table('login')
                ->where('username', $username)
                ->where('pass', $pass)
                ->exists();
        if($result==1)
        {
            $req->session()->put('username', $req->post('username'));
            $req->session()->put('coin', 1000);
            // echo $req->session()->get('username');
            $req->session()->flash('addBonus', true);    
            return redirect('home');

        }
        else{
            $req->session()->flash('error', true); 
            return redirect('/');
        }
    }

    function signout(request $req)
    {
        $req->session()->forget('username', $req->post('username'));
        return redirect('/');    
    }
    function cardView(request $req)
    {
        $username = $req->session()->get('username');
        return view('card', ['username'=>$username]);
    }
}

