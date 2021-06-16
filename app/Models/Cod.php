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
        return $this->belongsTo(Reg::class);
    }

    public function tod(){
        return $this->belongsTo(Tod::class);
    }
}
