<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    
    protected $guarded = [];

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function Tempat()
    {
        return $this->belongsTo(Tempat::class);
    }
}
