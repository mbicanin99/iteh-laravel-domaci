<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zubar;

class Pacijent extends Model
{
    use HasFactory;

    public function zubar()
    {
        return $this->belongsTo(Zubar::class);
    }
}
