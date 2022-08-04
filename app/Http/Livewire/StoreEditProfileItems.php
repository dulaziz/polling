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

    use WithFileUploads;

    protected $listeners = ['itemUpdated' => 'render'];

    private function resetInput(){
        $this->vote_image = null;
        $this->vote_name = null;
        $this->vote_position = null;
        $this->short_desc = null;
    }


    public function mount($data_item){
        $this->vote_image_old = $data_item->vote_image;

        $item = VoteItem::find($data_item->id);

        // dd($item);
        if($item) {
            $this->postId   = $item->id;
            // $this->title    = $post->title;
            // $this->content  = $post->content;
        }

    }



    public function update(){

        $this->validate([
            'vote_name' => 'required',
            'vote_position' => 'required',
            'short_desc' => 'required',
        ]);


        if($this->postId) {

            $post = VoteItem::find($this->postId);

            if($post) {
                $post->update([
                    'vote_image' => $this->vote_image,
                    'vote_name' => $this->vote_name,
                    'vote_position' => $this->vote_position,
                    'short_desc' => $this->short_desc,
                ]);
            }
        }


        // if ($this->vote_image != null) {
        //     $this->vote_image = $this->vote_image->store('vote-items');
        // }else{
        //     $this->vote_image = $this->vote_image_old;
        // }
        // VoteItem::where('id',$this->data_id)->update([
        //     'vote_image' => $this->vote_image,
        //     'vote_name' => $this->vote_name,
        //     'vote_position' => $this->vote_position,
        //     'short_desc' => $this->short_desc,
        // ]);


        $this->resetInput();

        $this->emit('itemUpdated');

        session()->flash('success', 'Your data has been created!');


    }

    public function render()
    {
        // dd($this->data_item);
        return view('livewire.store-edit-profile-items',['data_item' => $this->data_item]);
    }
}
