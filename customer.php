<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'email',
        'image_path', // Tambahkan ini
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
