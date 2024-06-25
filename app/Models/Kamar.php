<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = ['room_number', 'room_type', 'status', 'floor', 'facilities'];

    public function patients()
    {
        return $this->hasMany(Pasien::class);
    }
}
