<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kehadiran(){
        return $this->hasOne(Kehadiran::class);
    }
    public function gaji(){
        return $this->hasOne(Gaji::class);
    }
}
