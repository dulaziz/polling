<?php

namespace App\Http\Livewire;

use App\Models\VoteProfile;
use Livewire\Component;

class UpdateMoreItem extends Component
{
    public $data_item;
    public $data_profile;

    // Property Value Input Old
    public $title_profiles_old;
    public $description_profiles_old;

    // Property Input
    public $title_profiles;
    public $description_profiles;

    protected $listeners = ['itemUpdated','itemDeleted' => 'render'];

    private function resetInput(){
        $this->title_profiles = null;
        $this->description_profiles = null;
    }

    // Update Profile
    public function updateProfile($id){

        // Validasi jika ada data yand di ubah
        if($this->title_profiles){
            $this->title_profiles;
        }

        if(!$this->title_profiles){
            $this->title_profiles = $this->data_item->voteProfile->title;
        }

        if($this->description_profiles){
            $this->description_profiles;
        }

        if(!$this->description_profiles){
            $this->description_profiles = $this->data_item->voteProfile->description;
        }

       VoteProfile::where('id',$id)->update([
            'title' => $this->title_profiles,
            'description' => $this->description_profiles,
       ]);


       $this->resetInput();

       $this->emit('itemUpdated');

       session()->flash('success', 'Your data has been updated!');


    }

    // Delete Item
    public function deleteProfile($id){

        VoteProfile::where('id',$id)->delete();
        $this->emit('itemDeleted');
        session()->flash('success', 'Your data has been deleted!');

    }


    public function render()
    {
        return view('livewire.update-more-item');
    }
}
