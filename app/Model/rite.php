<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class rite extends Model
{
    public $timestamps = false;
    protected $table = 'rite';
    protected $fillable = [
        'title' , 'sub' , 'year' , 'startdate' , 'enddate' , 'startTime' , 'orator' , 'singer' , 'status'
    ];
}
// HELP :
// status == 0 : not polled
// status == 1 : in polling
// status == 2 : polled
