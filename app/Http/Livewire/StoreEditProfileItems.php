<?php

namespace App\Http\Livewire;

use App\Models\VoteItem;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreEditProfileItems extends Component
{
    public $data_item;
    public $data_profile;

    public $data_id;
    public $vote_image;
    public $vote_image_old;
    public $vote_name;
    public $vote_position;
    public $short_desc;

    // Property Input
    public $vote_image_input;
    public $vote_name_input;
    public $vote_position_input;
    public $short_desc_input;


    use WithFileUploads;

    protected $listeners = ['itemUpdated' => 'render'];

    protected $rules = [
        // 'vote_image' => 'required|image|max:1024',
        'vote_name' => 'required',
        'vote_position' => 'required',
        'short_desc' => 'required',

    ];

    private function resetInput(){
        $this->vote_image = null;
        $this->vote_name = null;
        $this->vote_position = null;
        $this->short_desc = null;
    }


    public function mount($data_item){
        // $this->vote_image_old = $data_item->vote_image;
        // $this->vote_image_input = $data_item->vote_image;
        // $this->vote_name_input = $data_item->vote_name;
        // $this->vote_position_input = $data_item->vote_position;
        // $this->short_desc_input = $data_item->short_desc;

        // $item = VoteItem::find($data_item->id);

        $this->data_id = $this->data_item->id;

    }


    public function loadInput()
    {
        $this->vote_image_input = $this->vote_image_input;;
        $this->vote_name_input = $this->vote_name;
        $this->vote_position_input = $this->vote_position;
        $this->short_desc_input = $this->short_desc;
    }


    public function update(){

        $this->validate();

        // dd($this->vote_name);
        VoteItem::where('id',$this->data_id)->update([
            'vote_name' => $this->vote_name,
            'vote_position' => $this->vote_position,
            'short_desc' => $this->short_desc,
        ]);

        $this->resetInput();

        $this->emit('itemUpdated');

        session()->flash('success', 'Your data has been created!');


    }

    public function render()
    {
        // dd($this->data_id);
        return view('livewire.store-edit-profile-items',['data_item' => $this->data_item]);
    }
}
