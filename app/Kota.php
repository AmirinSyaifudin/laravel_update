<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    //
    public $guarded = [];
    protected $primaryKey = 'kota_id ';
    public $table   = 'kota';
}
