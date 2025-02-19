<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $primaryKey = 'codereservation';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['codereservation', 'datereservation', 'datealler', 'dateretour', 'numeroclient'];

    public function Client() {
        return $this->belongsTo('App\Models\Client');
    }

    public function Vehicle() {
        return $this->belongsToMany('App\Models\Vehicule');
    }

    public function DossierDeLocation() {
        return $this->belongsTo('App\Models\DossierDeLocation');
    }
}
