<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class service extends Model
{
    use HasFactory,softDeletes;
    protected $fillable =[
        'title',
        'description',
        'price',
        'status',
        'category_id',
        'serviceProvider_id',
        'admin_id',
        'photo',
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');

    }  public function serviceProvider(){
        return $this->belongsTo(serviceProvider::class,'serviceProvider_id');
    }
}
