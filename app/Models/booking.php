<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class booking extends Model
{
    use HasFactory,softDeletes;
    protected $fillable =[

        'date',
        'time',
        'address',
        'description',
        'serviceProvider_id',
        'customer_id',
        'service_id',

    ];
    public function serviceProvider(){
        return $this->belongsTo(serviceProvider::class,'serviceProvider_id');
    }

    public function customer(){
        return $this->belongsTo(customer::class,'customer_id');
    }
    public function service(){
        return $this->belongsTo(service::class,'service_id');
    }

}
