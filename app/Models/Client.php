<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'numeroclient';
    public $timestamps = false;


    protected $fillable = ['numeroclient', 'nom', 'email', 'cartebancaire'];

    public function Reservation() {
        return $this->hasMany('App\Models\Reservation');
    }
}
