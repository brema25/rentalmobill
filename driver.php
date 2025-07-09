<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'umur',
        'no_sim',
        'no_hp',
        'image_path', // Tambahkan ini
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
