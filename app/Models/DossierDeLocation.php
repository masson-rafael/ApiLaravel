<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierDeLocation extends Model
{
    use HasFactory;

    protected $table = 'dossier_de_location';
    protected $primaryKey = 'idlocation';
    public $timestamps = false;

    protected $fillable = ['idlocation', 'paye', 'codereservation'];

    public function Reservation() {
        return $this->hasOne('App\Models\Reservation');
    }
}
