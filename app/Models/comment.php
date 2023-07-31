<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
        'movie_id',
        'content'
    ];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }

    use HasFactory;
}
