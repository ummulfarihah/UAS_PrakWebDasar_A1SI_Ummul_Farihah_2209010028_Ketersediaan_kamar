<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinments extends Model
{
    use HasFactory;

    protected $fillable = ['id_pasien', 'id_dokter', 'appointment_date', 'status'];

    public function patient()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Dokter::class);
    }
}
