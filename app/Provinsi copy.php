<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    //
    public $guarded = [];
    protected $primaryKey = 'provinsi_id ';
    public $table   = 'provinsi';
}
