<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StoreGallery extends Component
{
    public $data_item;
    public $gallery=[];
    public $i;
    public $data;

    public function mount($data_item){
        $this->gallery[] = $data_item->voteProfile;

        // dd($this->gallery);

        foreach($this->gallery as $g){
            // // dd($g->gallery);
            foreach(json_decode($g->gallery) as $i){
                // dd($i[2]);
                // menampilkan isi array dengan perulangan while
                $e = 0;
                while($e < count(json_decode($g->gallery))){
                    // dd($i);
                    $this->i = $i;
                    $e++;
                }
            }


        }

        // // menampilkan isi array dengan perulangan while
        // $i = 0;
        // while($i < count($this->gallery)){
        //     // $e = 0;
        //     // while($e < $this->gallery[$i]){
        //     //     dd($this->gallery[$i]);
        //     //     $i++;

        //     // };
        //     dd($this->gallery);
        // }


    }

    public function confirmDelete($data)
    {
        // $this->gallery = $g;
        dd($data);
    }

    public function kill()
    {
        // dd($g);
        // Country::destroy($id);
    }

    public function render()
    {

        return view('livewire.store-gallery');
    }
}
