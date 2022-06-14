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
        'category-id',
        'serviceProvider-id',
        'admin-id',
        'photo',
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category-id');

    }  public function serviceProvider(){
        return $this->belongsTo(serviceProvider::class,'serviceProvider-id');
    }
}
