<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'title',
        'description',
        'date_start',
        'date_end',
        'subtitle'
    ];

    public function vote_items(){
       return $this->hasMany(VoteItem::class);
    // return $this->hasMany(VoteItem::class,'vote_unit_id','id');
    }

    public function votings(){
        return $this->hasOne(Voting::class);
    }

}
