<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    //
    public $guarded = [];
    protected $primaryKey = 'kabupaten_id ';
    public $table   = 'kabupaten';
}
