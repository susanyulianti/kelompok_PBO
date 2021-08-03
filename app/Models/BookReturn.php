<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookReturn extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = [
        'tgl_peminjaman',
        'created_at',
        'updated_at'
    ];

    public function member(){
        return $this->belongsTo(Member::class);
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
