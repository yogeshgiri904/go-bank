<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\support\Facades\DB;
use App\Models\Username;

class paymentController extends Controller
{
    function send(Request $req){
        if($req->session()->get('coin') < $req->post('amount')){
            $req->session()->flash('lessMoney', true);
        }
        else{
            $username = new Username;
            $username->mobile = $req->post('mobile');
            $username->amount = $req->post('amount');
            $username->msg = $req->post('msg');
            $username->save();
            if($username->save() == 1)
            {
                // assigning updated value to session(coin) - after debit
                if($req->post('amount')<100)
                {
                    $cashback = 0;
                }
                elseif($req->post('amount')<1000){
                    $cashback = rand(1,10);
                }
                elseif($req->post('amount')<10000){
                    $cashback = rand(11,20);
                }
                elseif($req->post('amount')<30000){
                    $cashback = rand(21,50);
                }
                else{
                    $cashback = rand(51,100);
                }                
                $x = $req->session()->get('coin') - $req->post('amount') + $cashback;
                $req->session()->put('coin', $x);
                if($cashback==0)
                {
                    $req->session()->flash('sentMoney', true);
                }
                else{
                    $req->session()->flash('sentMoneyCash', true);
                }
                $req->session()->flash('amount', $req->post('amount'));
                $req->session()->flash('cashback', $cashback);
            }
            else{
                $req->session()->flash('errorMoney', true);
            }
        }
        return redirect('home');
    }
    function add(Request $req){
        if( 50000 < $req->post('amount')){
            $req->session()->flash('addPAN', true);
        }
        else{
            $username = new Username;
            $username->mobile = 123454321;
            $username->amount = $req->post('amount');
            $username->msg = NULL;
            $username->save();
            if($username->save() == 1)
            {
                // assigning updated value to session(coin) - after credit
                $x = $req->session()->get('coin') + $req->post('amount');
                $req->session()->put('coin', $x);
                $req->session()->flash('amount', $req->post('amount'));
                $req->session()->flash('successAddMoney', true);
            }
            else{
                echo "error in adding money";
                $req->session()->flash('errorAddMoney', true);
            }
        }
        return redirect('home');
    }

    function payBill(Request $req){
        $card = array(
            array("Postpaid Bill", "fas fa-mobile", rand(300,700)),
            array("Fees Payment", "fas fa-graduation-cap", rand(30000,50000)),
            array("Apartment Bill", "fas fa-city", rand(1000,5000)),
            array("Credit Card", "far fa-credit-card", rand(5000,20000)),
            array("Gas Bill", "fas fa-gas-pump", rand(800,1000)),
            array("Electricity Bill", "far fa-lightbulb", rand(1000,3000)),
            array("DTH Bill", "fas fa-satellite-dish", rand(500,900)),
            array("Water Bill", "fas fa-tint", rand(50,200)),
        );
        return view('bills', ['card' => $card]);

    }
    function billing(Request $req, $id, $name)
    {
        return view('sendBill', ['id' => $id, 'name' => $name]);
    }
}


