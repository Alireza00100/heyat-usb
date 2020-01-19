<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class poll extends Model
{
    public $timestamps = false;
    protected $table = 'poll';
    protected $fillable = [
        'prayerid','rite_id','orator','singer','educational','sound','reception'
    ];
}
