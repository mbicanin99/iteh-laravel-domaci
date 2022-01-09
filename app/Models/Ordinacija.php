<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zubar;

class Ordinacija extends Model
{
    use HasFactory;

    public function zubari()
    {
        return $this->hasMany(Zubar::class);
    }
}
