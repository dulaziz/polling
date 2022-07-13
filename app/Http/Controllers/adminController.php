<?php

namespace App\Http\Controllers;

use App\Models\VoteItem;
use App\Models\VoteUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class adminController extends Controller
{
    //
    public function index(){

        $polling_unit = DB::table('vote_units')->get();


        return view('admin', [
            "title" => "Polling Unit",
            "polling_unit" => $polling_unit
        ]);
    }
}
