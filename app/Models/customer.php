<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class customer extends Model
{
    use HasFactory,softDeletes;
    protected $fillable =[

            'name',
            'email',
            'password',
            'mobile',
            'photo',
        ];
    public function bookings(){
        return $this->hasMany(booking::class);

    }
}
