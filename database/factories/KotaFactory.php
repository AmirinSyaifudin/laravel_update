<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kota;
use App\Provinsi;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Kota::class, function (Faker $faker) {
    return [
        'provinsi_id'       => Provinsi::inRandomOrder()->first()->provinsi_id, 
        'nama_kota'             => $faker->sentence(4),
        'kode_pos'             => $faker->randomDigit,
        'keterangan'            => $faker->text,
    ];
});
