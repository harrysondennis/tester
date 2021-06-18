<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cod extends Model
{
    use HasFactory;
    
    protected $guarded = [ ];

    protected $table = 'cods';

    public function reg(){
        return $this->belongsToMany(Reg::class, 'reg_cods');
    }

    public function tod(){
        return $this->belongsTo(Tod::class);
    }
}
