<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookReturn extends Model
{
    public function member(){
        return $this->belongsTo(Member::class);
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    use HasFactory;
    protected $guarded = [];
}
