<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\support\Facades\DB;
use App\Models\Username;

class transactController extends Controller
{
    function history(Request $req){
        $data = DB::table('username')
        ->orderBy('id','DESC')
        ->get();

        return view('transact', ['data' => $data]);
    }
}
