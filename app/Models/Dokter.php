<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = ['nama_awal', 'nama_akhir', 'id_departement', 'spesialisasi'];

    public function department()
    {
        return $this->belongsTo(Departement::class);
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
