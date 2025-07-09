<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'customer_id',
        'driver_id',
        'tanggal_sewa',
        'tanggal_kembali',
        'total_bayar',
        'status_pengembalian',
    ];

    protected $casts = [
        'tanggal_sewa' => 'date',
        'tanggal_kembali' => 'date',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
