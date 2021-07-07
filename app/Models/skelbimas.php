<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skelbimas extends Model
{
    public $primaryKey = 'skelbimoNr';
    public function komentarai()
    {
        return $this->hasMany('App\Models\komentaras','fk_SkelbimasskelbimoNr','skelbimoNr');
    }
}
