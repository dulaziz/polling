<?php

namespace App\Http\Controllers;

use App\Models\VoteItem;
use App\Models\VoteUnit;
use App\Models\Voting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

use DateTime;

class pollingController extends Controller
{
    //

    public function create(){


        // Ambil semua data vote unit dan validasi jumlah data vote unit
        $query_vote_unit = VoteUnit::all();

        if(count($query_vote_unit)){

            $vote_unit_id_latest = DB::table('vote_units')
                            ->select('id')
                            ->latest()->first();

            $data = $vote_unit_id_latest->id;

        }else{

            $vote_unit_id_latest = [
               'id'=> 0,
            ];

            $data = $vote_unit_id_latest['id'];
        }


        return view('addPolling', [
            "title" => "Add Polling Unit",
            'vote_unit_id_latest' => $data
        ]);
    }


    public function create_unit(Request $request){

        // Buat rule validasi form input unit
        $validated = $request->validate([
            'thumbnail' => 'required|mimes:jpg,bmp,png',
            'title' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'subtitle' => 'required',
            // Rule validasi form items
            'vote_unit_id' => 'required',
            'vote_image' => 'required|mimes:jpg,bmp,png',
            'vote_name' => 'required',
            'short_desc' => 'required',
        ]);

        // dd($validated);

        // Cek jika ada gambar yang di inputkan dan simpan kedalam folder storage
        if($request->hasfile('thumbnail')){
            $validated['thumbnail'] = $request->file('thumbnail')->store('unit-items');
        }

        // Cek jika ada gambar yang di inputkan dan simpan kedalam folder storage
        if($request->hasfile('vote_image')){
            $validated['vote_image'] = $request->file('vote_image')->store('vote-items');
        }


        // Ubah date normal time ke date epoch
        $epoch_start = $request->date_start;
        $dt = new DateTime("$epoch_start");  // convert UNIX timestamp to PHP DateTime
        $date_start = $dt->format('U');

        $epoch_end = $request->date_end;
         $dt = new DateTime("$epoch_end");  // convert UNIX timestamp to PHP DateTime
         $date_end = $dt->format('U');


        // Validate form vote unit
         $validated['description'] = $request->description;
         $validated['date_start'] = $date_start;
         $validated['date_end'] = $date_end;



        // Validate form vote unit
        $validated['vote_unit_id'] = $request->vote_unit_id + 1;

        VoteItem::create($validated);

        $save = VoteUnit::create($validated);

        if($save){

            return redirect('admin')->with('success', 'Your data has been created!');

        }else{

            return back()->with('error', 'Your data failed created!')->withInput();
        }


    }


    public function create_items(Request $request){

        $validated = $request->validate([
            'vote_unit_id' => 'required',
            'vote_image' => 'required|mimes:jpg,bmp,png',
            'vote_name' => 'required',
            'short_desc' => 'required',
        ]);

         // Cek jika ada gambar yang di inputkan dan simpan kedalam folder storage
        if($request->hasfile('vote_image')){
            $validated['vote-image'] = $request->file('vote_image')->store('vote-items');
        }

        $save = VoteItem::create($validated);

        if($save){

            return redirect('admin')->with('success', 'Your data has been created!');

        }else{

            return back()->with('error', 'Your data failed created!')->withInput();
        }

    }



    public function show(VoteUnit $id){



        $polling_unit = DB::table('vote_units')
                            ->where('id',$id->id)
                            ->first();

        $polling_item = DB::table('vote_items')
                            ->where('vote_unit_id',$id->id)
                            ->get();

        $total_votings = DB::table('votings')
                            ->where('vote_item_id',$id->id)
                            ->first();


        // $total_votings = Voting::with(['voteItem'])
        //                         ->where('vote_unit_id',$id->id)
        //                         ->get();

        //                         dd($total_votings);

        $total_user_vote = DB::table('votings')->count('*');

        // $total_vote = $total_votings->response / $total_user_vote * 100;

        // return view('viewPollUnit', [
             // "total_vote" => $total_vote
        // ]);

        return view('pollingUnitBar', [
            "title" => "Polling Unit Bar",
            "polling_unit" => $polling_unit,
            "polling_item" => $polling_item,
            "total_user_vote" => $total_user_vote,
        ]);

    }

    public function result(VoteUnit $vote_unit){

        // Ambil semua data total vote item yang vote unit id nya sesuai dengan vote unit id dan berelasi dengan tabel voting
        $total_votings = VoteItem::with(['votings'])
                                ->where('vote_unit_id',$vote_unit->id)
                                ->get();

        // Ambil data vote unit yang id nya sesuai dengan vote unit id
        $vote_unit = DB::table('vote_units')
                        ->where('id',$vote_unit->id)
                        ->first();

        // Hitung jumlah total user yang melakukan voting
        $total_user_vote = DB::table('votings')->count('*');



        return view('result', [
            "title" => "Polling Result",
            "total_votings" => $total_votings,
            "total_user_vote" => $total_user_vote,
            "vote_unit" => $vote_unit
        ]);

    }

}
