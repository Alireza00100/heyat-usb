<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArchiveManagement extends Model
{
    public $timestamps = false;
    protected $table = 'archivemanagement';
    protected $fillable = [
        'title','sub','year','daytime','type','media_type','media_url'
    ];
}
