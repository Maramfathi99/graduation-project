<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory,softDeletes;

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
