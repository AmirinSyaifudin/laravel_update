<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kabupaten;
use App\Kota;
use App\Provinsi;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Kabupaten::class, function (Faker $faker) {
    return [
        'provinsi_id'       => Provinsi::inRandomOrder()->first()->provinsi_id, 
        'kota_id'           => Kota::inRandomOrder()->first()->kota_id, 
        'nama_kabupaten'    => $faker->sentence(4),
        'kode_pos'             => $faker->randomDigit,
        'keterangan'        => $faker->sentence(50),
    ];
});
