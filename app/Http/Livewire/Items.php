<?php

namespace App\Http\Livewire;

use App\Models\VoteItem;
use Livewire\Component;

class Items extends Component
{
    public $vote_items;
    public $vote_items_id;

    protected function getListeners()
    {
        return ['itemAdded' => 'render'];
    }

    public function mount($id_unit){
        // dd($vote_unit_id);
        $this->vote_items = $id_unit;
    }

    public function render()
    {
        return view('livewire.items',['data_items'=>  VoteItem::where('vote_unit_id',$this->vote_items)->get()]);
    }

}
