<?php

namespace App\Http\Livewire;

use App\Models\VoteItem;
use App\Models\VoteUnit;
use Livewire\Component;

class AddItems extends Component
{
    public $id_unit;
    public $vote_unit;
    public $vote_items;
    public $title = "Add Items";
    public $itemCount;

    protected $listeners = ['itemAdded' => 'handlePost'];
    // protected $listeners = ['postAdded' => 'handlePost'];

    public function mount($id){
        $this->vote_unit = VoteUnit::find($id);
        $this->vote_items = VoteItem::where('vote_unit_id',$id)->get();
        $this->id_unit = $id;
    }

    // public function incrementItemCount(){
    //    dd($this->itemCount = VoteItem::count());
    // }
    public function handlePost(){
        // dd($this->itemCount = VoteItem::count());
        dd('parents');
     }

    public function render()
    {
        return view('livewire.add-items',[
            'title' => $this->title,
            'vote_unit' => $this->vote_unit,
            'vote_items' => $this->vote_items,
            'id_unit' => $this->id_unit,
            ])
            ->extends('layouts.main')
            ->layoutData(['title' => 'Show Posts']);
    }


}
