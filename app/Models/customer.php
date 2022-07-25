<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
