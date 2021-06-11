<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reg;

class Tod extends Model
{
    use HasFactory;

    public function cods(){
        return $this->hasMany(Cod::class);
    }
}
