<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $primaryKey = 'matricule';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['matricule', 'modele', 'nombredeplace', 'prix', 'disponibilite'];

    public function Reservation() {
        return $this->belongsToMany('App\Models\Reservation');
    }
}
