<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentaras extends Model
{
    public $primaryKey = 'komentaroNr';
    protected $fillable = ['komentaroNr', 'tekstas', 'created_at','updated_at','ivertinimu_skaicius','skundimu_skaicius','fk_Naudotojasid','fk_SkelbimasskelbimoNr' ];
}
