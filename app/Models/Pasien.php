<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = ['nama_awal', 'nama_akhir', 'dob', 'kelamin', 'admission_date', 'discharge_date', 'id_kamar'];

    public function room()
    {
        return $this->belongsTo(Kamar::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appoinments::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatments::class);
    }
}
