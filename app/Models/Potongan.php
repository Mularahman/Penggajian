<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potongan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kehadiran(){
        return $this->hasOne(Kehadiran::class);
    }
}
