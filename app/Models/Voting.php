<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VoteItem;

class Voting extends Model
{
    use HasFactory;

    protected $table = 'votings';


    protected $fillable = [
        'vote_unit_id',
        'vote_item_id',
        'response',
    ];

    // public function voteItem(){
    //     return $this->belongsTo(VoteItem::class);
    // }

    public function voteItem(){
        return $this->belongsTo(VoteItem::class);
    }

    // public function voteUnit(){
    //     return $this->hasOne(VoteUnit::class,'id','vote_unit_id');
    // }

}
