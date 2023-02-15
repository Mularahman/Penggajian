<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user(){
        return $this->hasMany(User::class);
    }
    public function absensi(){
        return $this->belongsTo(Absensi::class);
    }
    public function potongan(){
        return $this->belongsTo(Potongan::class);
    }
}
