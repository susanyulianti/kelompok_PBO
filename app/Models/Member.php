<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
    use HasFactory;
    protected $guarded = [];
}
