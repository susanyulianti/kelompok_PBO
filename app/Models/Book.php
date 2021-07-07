<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
    public function bookreturns(){
        return $this->hasMany(BookReturn::class);
    }
    use HasFactory;
    protected $guarded = [];
}
