<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = ['text'];

    public function mail(){

        return $this->belongsTo(Mail::class);
    }
}
