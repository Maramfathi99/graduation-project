<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class serviceProvider extends Model
{
    use HasFactory,softDeletes;
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'photo',
        'description',
        'working_time',
        'country',
        'city',
        'job'];
    public function services(){
        return $this->hasMany(service::class);

    }
    public function bookings(){
        return $this->hasMany(booking::class);
    }

}
