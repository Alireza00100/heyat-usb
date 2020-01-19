<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class prayer extends Model
{
    public $timestamps = false;
    protected $table = 'prayer';
    protected $fillable = [
        'title' , 'year' , 'daytime' , 'orator' , 'singer' , 'status'
    ];
}
