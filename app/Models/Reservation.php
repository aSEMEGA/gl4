<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table="reservation";
    public $primaryKey = 'numerovoyageur';
    public $incrementing = true;
    protected $fillable = [ 'numerovoyageur', 'nom', 'prenom', 'sexe', 'adresse', 'telephone', 'compagnie', 'date_depart', 'heure_depart', 'source', 'destination', 'montant', 'date_reservation'];
}
