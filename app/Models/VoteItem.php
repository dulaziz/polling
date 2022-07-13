<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteItem extends Model
{
    use HasFactory;

    protected $table = 'vote_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'vote_unit_id',
        'response',
        'vote_image',
        'vote_name',
        'short_desc'
    ];

    public function votings(){
        return $this->hasMany(Voting::class);
    }

    // public function voteUnit(){
    //     return $this->hasOne(Voting::class);
    // }

}
