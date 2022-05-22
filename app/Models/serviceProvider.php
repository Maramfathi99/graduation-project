<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serviceProvider extends Model
{
    use HasFactory,softDeletes;
    protected $fillable = ['name','email','password','mobile','photo','description','working-time','country','city','job'];

}
