<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    use HasFactory;

    protected $table = 'tempat';
    
    protected $guarded = [];

    public function Barang()
    {
        return $this->hasMany(Barang::class);
    }
}
