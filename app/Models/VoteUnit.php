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


}
