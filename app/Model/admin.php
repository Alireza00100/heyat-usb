<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public $timestamps = false;
    protected $table = 'admin';
    protected $fillable = [
        'user','pass'
    ];
}
