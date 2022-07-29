<?php

namespace App\Http\Livewire;

use App\Models\VoteItem;
use App\Models\VoteProfile;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreItems extends Component
{
    public $vote_unit_id;
    public $vote_items;
    public $vote_unit;

    public $vote_image;
    public $vote_name;
    public $short_desc;

    use WithFileUploads;

    protected $listeners = ['itemAdded' => 'render'];


    protected $rules = [
        'vote_image' => 'required|image|max:1024',
        'vote_name' => 'required',
        'short_desc' => 'required',

    ];



    private function resetInput(){
        $this->vote_image = null;
        $this->vote_name = null;
        $this->short_desc = null;
    }


    public function mount($id_unit){

          $this->vote_unit_id = $id_unit;
    }


    public function storeItems(){

        $this->validate();

        VoteItem::create([
            'vote_unit_id' => $this->vote_unit_id,
            'vote_image' => $this->vote_image->store('vote-items'),
            'vote_name' => $this->vote_name,
            'short_desc' => $this->short_desc,
        ]);


        $this->resetInput();

        $this->emit('itemAdded');

        session()->flash('success', 'Your data has been created!');

        // if($save){

        //     return back()->with('success', 'Your data has been created!');

        // }else{

        //     return back()->with('error', 'Your data failed created!')->withInput();
        // }

    }

    // public function handlePost(){
        // dd($this->itemCount = VoteItem::count());
    //     dd('self');
    //  }


    public function render()
    {
        // $data = DB::table('vote_items')->where('vote_unit_id',$this->vote_unit_id)->with(['profile'])->get();

        $data = VoteItem::with('voteProfile')->where('vote_unit_id', $this->vote_unit_id)->get();

        // dd($data);

        return view('livewire.store-items',[
            'data_items' => $data,
            'data_unit' => $this->vote_unit,
        ]);
    }
}
