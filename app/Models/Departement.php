<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi'];

    public function doctors()
    {
        return $this->hasMany(Dokter::class);
    }
}
