<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SoalhitungController extends Controller
{
    //
    public function tahunkabisat()
    {
        if ($_POST['tahun'] % 4 == 0) {
            echo "Tahun $_POST[tahun] adalah tahun kabisat";
        } else {
            echo "Tahun $_POST[tahun] adalah bukan tahun kabisat";
        }

        return view('admin.soalhitung.tahunkabisat');
    }

    public function jamkerja()
    {
        $jam = $_POST['jam'];
        if ($jam <= 48) {
            $gaji = 2000 * $jam;
            echo "Jam Kerja Anda = $jam jam<br>";
            echo "Gaji Anda adalah =\tRp.$gaji";
        } else {
            $lembur = $jam - 48;
            $jam = $jam - $lembur;
            $gaji1 = 2000 * $jam;
            $gaji2 = 3000 * ($lembur);
            $gaji = $gaji1 + $gaji2;
            echo "Jam Kerja Anda = $jam jam<br>";
            echo "Jam Lembur Anda = $lembur jam<br>";
            echo "Gaji Anda adalah =\t Rp.$gaji";
        }

        return view('admin.soalhitung.jamkerja');
    }

    public function hitungbb()
    {
        $berat = $_POST['berat'];
        $tinggi = $_POST['tinggi'];
        echo "Berat Badan Anda \t: $berat<br>";
        echo "Tinggi Badan Anda \t:$tinggi<br><br>";
        $tinggi = ($tinggi - 100) * 0.9;
        if (($tinggi >= $berat + 2) || ($tinggi <= $berat - 2)) {
            echo "Berat Badan Anda Tidak Ideal";
        } else {
            echo "Berat Badan Anda Ideal";
        }

        return view('admin.soalhitung.hitungbb');
    }

    public function usia()
    {
        $usia = $_POST['usia'];
        echo "Usia Anda \t:$usia<br><br>";
        if (($usia <= 5) && ($usia >= 0)) {
            echo "Anda Tergolong Balita";
        } else if (($usia <= 16) && ($usia >= 6)) {
            echo "Anda Tergolong Anak-anak";
        } else if (($usia <= 50) && ($usia >= 17)) {
            echo "Anda Tergolong Dewasa";
        } else if ($usia > 50) {
            echo "Anda Tergolong Tua";
        }

        return view('admin.soalhitung.usia');
    }

    public function goljamkerja()
    {
        $jam = $_POST['jam'];
        //Gaji Golongan
        if ($_POST['gol'] == 'A') {
            $gol = 4000;
        } else if ($_POST['gol'] == 'B') {
            $gol = 5000;
        } else if ($_POST['gol'] == 'C') {
            $gol = 6000;
        } else if ($_POST['gol'] == 'D') {
            $gol = 7000;
        }
        if ($jam <= 48) {
            $gaji = $gol * $jam;
            echo "Jam Kerja Anda = $jam jam <br>";
            echo "Gaji Anda adalah =\t Rp.$gaji";
        } else {
            $lembur = $jam - 48;
            $jam = $jam - $lembur;
            $gaji1 = $gol * $jam;
            $gaji2 = 3000 * ($lembur); //3000 = gaji lembur
            $gaji = $gaji1 + $gaji2;
            echo "Jam Kerja Anda = $jam jam<br>";
            echo "Jam Lembur Anda = $lembur jam<br>";
            echo "Gaji Anda adalah =\t Rp.$gaji";
        }

        return view('admin.soalhitung.goljamkerja');
    }
}
