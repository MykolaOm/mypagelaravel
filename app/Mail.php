<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    //
    protected $fillable = ['title','text','user_id'];

    public function answers(){
        return $this->hasMany(Answer::class);

    }
}
