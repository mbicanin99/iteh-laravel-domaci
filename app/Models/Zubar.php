<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ordinacija;
use App\Models\Pacijent;

class Zubar extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'godine_iskustva',
        'ordinacija_id'
    ];


    public function ordinacija()
    {
        return $this->belongsTo(Ordinacija::class);
    }

    public function pacijenti()
    {
        return $this->hasMany(Pacijent::class);
    }
}
