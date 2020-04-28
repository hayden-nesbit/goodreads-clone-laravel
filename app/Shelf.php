<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    public function book() {

        return $this->belongsToMany(Book::class);
    }

    public function user() {

        return $this->belongsToMany(User::class);
    }
}
