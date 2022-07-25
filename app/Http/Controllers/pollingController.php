<?php

namespace App\Http\Controllers;

use App\Models\VoteItem;
use App\Models\VoteUnit;
use App\Models\Voting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DateTime;
use Illuminate\Support\Facades\Storage;

class pollingController extends Controller
{
    //

    public function index(){

        $data_polling = DB::table('vote_units')->get();
        return view('home', [
            "title" => "Home",
            "data_polling" => $data_polling
        ]);
    }



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

        // dd($request->all());

        // Buat rule validasi form input unit
        $validated = $request->validate([
            'thumbnail' => 'required|mimes:jpg,bmp,png',
            'title' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'subtitle' => 'required',
            // Rule validasi form items
            // 'vote_unit_id' => 'required',
            // 'vote_image' => 'required|mimes:jpg,bmp,png',
            // 'vote_name' => 'required',
            // 'short_desc' => 'required',
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

        // VoteItem::create($validated);

        $save = VoteUnit::create($validated);

        if($save){

            return redirect('admin')->with('success', 'Your data has been created!');

        }else{

            return back()->with('error', 'Your data failed created!')->withInput();
        }


    }


    public function create_items(Request $request){

        dd($request->all());

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


    public function show_bar(VoteUnit $id){



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

    public function show_unit(VoteUnit $id){



        $polling_unit = DB::table('vote_units')
                            ->where('id',$id->id)
                            ->first();

        // $polling_item = DB::table('vote_items')
        //                     ->where('vote_unit_id',$id->id)
        //                     ->get();

                            // dd($polling_item);

        $polling_item = VoteItem::with('votings')
                                    ->where('vote_unit_id',$id->id)
                                    ->get();

                            // dd($polling_item);

        $vote_unit = DB::table('votings')
                        ->select(DB::raw(' vote_item_id,  count(*) as total_vote '))
                        ->from('votings')
                        ->join('vote_items','vote_items.id','votings.vote_item_id')
                        ->groupBy('votings.vote_item_id')
                        ->get();

                        // dd($vote_unit);
        $data_vote_user = DB::table('votings')
                        ->select()
                        ->from('votings')
                        ->join('users','users.id','votings.user_vote')
                        ->count();
        // SELECT * FROM `votings` JOIN users ON users.id = votings.user_vote;
                                // dd($data_vote_user);


        $total_votings = DB::table('votings')
                            ->where('vote_item_id',$id->id)
                            ->first();


        $total_vote =  DB::table('votings')
                            ->select(DB::raw('count(*) as total_vote'))
                            ->where('vote_item_id',2)
                            ->first();

                            // SELECT

                            //     vote_item_id, COUNT(*) as total_vote

                            // FROM

                            //     `votings`

                            // JOIN

                            //     vote_items ON vote_items.id = votings.vote_item_id

                            // GROUP BY votings.vote_item_id;

                            // dd($total_vote);

        $total_user_vote = DB::table('votings')
                                ->where('vote_unit_id',$id->id)
                                ->count('*');


        return view('pollingUnit', [
            "title" => "Polling Unit Bar",
            "polling_unit" => $polling_unit,
            "polling_item" => $polling_item,
            "total_user_vote" => $total_user_vote,
            "vote_unit" => $vote_unit,
            "total_vote" => $total_vote,
            "data_vote_user" => $data_vote_user,
        ]);

    }

    public function polling_survey(VoteUnit $id){

        $polling_unit = DB::table('vote_units')
        ->where('id',$id->id)
        ->first();

        $polling_item = DB::table('vote_items')
                ->where('vote_unit_id',$id->id)
                ->get();

        $total_vote =  DB::table('votings')
                    ->select(DB::raw('count(*) as total_vote'))
                    ->where('vote_item_id', '=', 2)
                    ->first();

        $total_user_vote = DB::table('votings')->count('*');

        $user_vote = DB::table('votings')
                    ->select('user_vote')
                    ->get();

                // dd($user_vote);

        return view('pollSurvey', [
            "title" => "Poll Survey",
            "polling_unit" => $polling_unit,
            "polling_item" => $polling_item,
            "total_user_vote" => $total_user_vote,
            "total_vote" => $total_vote,
            "user_vote" => $user_vote,
        ]);
    }


    public function set_polling_survey(Request $request){

        // dd($request->all());

        $validatedData = $request->validate([
            'response' => 'required',
            'user_vote' => 'required',
            'vote_unit_id' => 'required',
            'vote_item_id' => 'required',
        ]);

         VoteItem::where('id', $validatedData['vote_item_id'])
                ->update(['response' => $validatedData['response']]);

         $save = Voting::create($validatedData);

        if($save){

            return back()->with('success', 'Your data has been created!');

        }else{

            return back()->with('error', 'Your data failed created!')->withInput();
        }



    }

    public function result(VoteUnit $vote_unit){

        // Ambil semua data total vote item yang vote unit id nya sesuai dengan vote unit id dan berelasi dengan tabel voting
        $total_votings = VoteItem::with(['votings'])
                                ->where('vote_unit_id',$vote_unit->id)
                                ->get();

                                // dd($total_votings);

        // Ambil data vote unit yang id nya sesuai dengan vote unit id
        $vote_unit = DB::table('vote_units')
                        ->where('id',$vote_unit->id)
                        ->first();

        // Hitung jumlah total user yang melakukan voting
        $total_user_vote = DB::table('votings')
                                ->where('vote_unit_id',$vote_unit->id)
                                ->count('*');

                            // dd($total_user_vote);

        // Hitung semua jumlah data yang ada di vote item yang vote unit id nya sama dengan id vote unit
        $total_vote_item = DB::table('vote_items')
                                ->where('vote_unit_id',$vote_unit->id)
                                ->count('*');

                                // dd($total_vote_item);

        return view('result', [
            "title" => "Polling Result",
            "total_votings" => $total_votings,
            "vote_unit" => $vote_unit,
            "total_user_vote" => $total_user_vote,
            "total_vote_item" => $total_vote_item
        ]);

    }

    public function get_polling_json(){

        $data_vote_unit_json = DB::table('vote_items')->get();

        return json_decode($data_vote_unit_json);

    }

    public function edit(VoteUnit $id){
        $vote_unit_with_items = VoteUnit::with(['vote_items'])
                        ->where('id',$id->id)
                        ->get();

                        // dd($vote_unit_with_items);

        return view('editPolling', [
            "title" => "Edit Polling Unit",
            "vote_unit_with_items" => $vote_unit_with_items
        ]);

    }

    public function edit_items(VoteUnit $id){
        $vote_unit = VoteUnit::with(['vote_items'])
                        ->where('id',$id->id)
                        ->first();

                        // dd($vote_unit);
        // $vote_unit_id = $vote_unit->id;

        return view('addItems', [
            "title" => "Edit Polling Unit",
            "vote_unit" => $vote_unit,
            // "vo" => $vote_unit_id,
        ]);

    }

    public function update(Request $request){
        // dd($request->all());

        // ^ array:14 [▼
        //     "_token" => "XrCACIx10TlT2ynwHD2sGoPOnmHjrBgBnM8ffV0N"
        //     "thumbnail_old" => "unit-items/qJxoJQ2vmJegV5rBsdry5wkhRtaWUncDkMJsRFxW.png"
        //     "thumbnail" => null
        //     "title" => "Bogor Memilih 2024, Siapa Kandidat Calon Wali Kota Bogor Terfavorit?"
        //     "description" => "PEMILIHAN Wali Kota Bogor akan digelar pada 2024 mendatang. Sejumlah nama digadang-gadang bakal maju menjadi orang nomor satu di Kota Bogor. Siapa kandidat baka ▶"
        //     "date_start_old" => "12-07-2022"
        //     "date_start" => null
        //     "date_end_old" => "31/07/2022"
        //     "date_end" => null
        //     "subtitle" => "Bakal Calon Wali Kota Bogor"
        //     "unit_id" => array:4 [▶]
        //     "vote_image_old" => array:4 [▶]
        //     "vote_name" => array:4 [▶]
        //     "short_desc" => array:4 [▶]
        // ]

        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'subtitle' => 'required',
        ]);


        // cek validasi jika ada thumbnail yang di kirim
        if($request->file('thumbnail')){
            // insert data thumbnail baru
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('unit-items');
            // hapus data thumbnail sebelumnya
            Storage::delete($request->thumbnail_old);
        }else{
            $validatedData['thumbnail'] = $request->thumbnail_old;
        }

        // cek validasi date start
        if($request->date_start){

               // Ubah date normal time ke date epoch
                $epoch_start = $request->date_start;
                $dt = new DateTime("$epoch_start");  // convert UNIX timestamp to PHP DateTime
                $date_start = $dt->format('U');


                // insert data date start baru
                $validatedData['date_start'] = $date_start;
        }else{

                // Ubah date normal time ke date epoch
                $epoch_start = $request->date_start_old;
                $dt = new DateTime("$epoch_start");  // convert UNIX timestamp to PHP DateTime
                $date_start_old = $dt->format('U');

            // insert data date start dengan data date start sebelumnya
            $validatedData['date_start'] = $date_start_old;
        }

        // cek validasi date start
        if($request->date_end){

                // Ubah date normal time ke date epoch
                $epoch_end = $request->date_end;
                $dt = new DateTime("$epoch_end");  // convert UNIX timestamp to PHP DateTime
                $date_end = $dt->format('U');

            // insert data date start baru
            $validatedData['date_end'] = $date_end;
        }else{

                // Ubah date normal time ke date epoch
                $epoch_end = $request->date_end;
                $dt = new DateTime("$epoch_end");  // convert UNIX timestamp to PHP DateTime
                $date_end_old = $dt->format('U');

            // insert data date start dengan data date start sebelumnya
            $validatedData['date_end'] = $date_end_old;
        }

        // cek validasi jika ada thumbnail yang di kirim
       if($request->hasfile('vote_image')){

            foreach($request->file('vote_image') as $image){
                // $hashName = $image->hashName();
                // dd($name);
                $image->store('vote-items');
                dd( str_replace('.".','"','vote-items/'.$image->hashName()));
                // $vote_image[] = str_replace('.".',' ',"vote-items/".$image->hashName());

            }

            // $vote_unit_id[] = $request->unit_id;
            // $vote_name[] = $request->vote_name;

            // dd(serialize($request->unit_id));
            // $upload = new VoteItem();
            // $upload->vote_unit_id = $request->vote_unit_id;
            // $upload->vote_name = $request->vote_name;
            // $upload->vote_image = json_encode($data);
            // $upload->save();

            // dd($vote_unit_id);


            // // Ambil data array vote image
            // $data_vote_image = $request->file('vote_image');


            // // looping data array dari form vote image
            // for($i=0; $i < count($request->file('vote_image')); $i++){
            //     $image = [
            //         'vote_image' => $data_vote_image[$i]
            //     ];
            //     // dd($data_vote_image[$i]);

            //     $vote_image = $image['vote_image']->store('vote-items');
            //     // insert data thumbnail baru
            //     // $vote_image = Storage::disk('local')->put('test.txt','contents');
            // }

            // dd($vote_image);
           // hapus data thumbnail sebelumnya
           Storage::delete($request->vote_image_old);
       }else{
           $vote_image = $request->vote_image_old;
       }

        $unit_id = $request->unit_id;
        $vote_name = $request->vote_name;
        $short_desc = $request->short_desc;
        // $vote_images = $vote_image;

        // // dd($image);
        // for($i=0; $i < count($da); $i++){
        //     dd($vote_images);
        // }

        // Looping data array dari form input
        for($i=0; $i < count($unit_id); $i++ ){


                $dataSave = [
                    'vote_image' => json_encode($vote_image[$i]),
                    'vote_name' => $vote_name[$i],
                    'short_desc' => $short_desc[$i],
                ];

                // $dataSave['vote_image'] = $vote_image;


                DB::table('vote_items')->where('id',$unit_id[$i])->update($dataSave);
        }


        // simpan validasi kedalam database vote unit
        $save = VoteUnit::where('id',$request->id)->update($validatedData);

        if($save){

            return back()->with('success', 'Your data has been created!');

        }else{

            return back()->with('error', 'Your data failed created!')->withInput();
        }

    }

}
