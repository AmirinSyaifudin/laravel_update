<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pasien;
use App\Jenispasien;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;
use Spatie\Permission\Exceptions\GuardDoesNotMatch;
use DataTables;
use Psy\Command\WhereamiCommand;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $pasien = DB::table('pasien')
        //     ->join('jenispasien', 'pasien.jenispasien_id', '=', 'jenispasien.jenispasien_id')
        //     ->join('poliklinik', 'pasien.poliklinik_id', '=', 'poliklinik.poliklinik_id')
        //     ->join('agama', 'pasien.agama_id', '=', 'agama.agama_id')
        //     ->join('golongan_darah', 'pasien.golongan_darah_id', '=', 'golongan_darah.golongan_darah_id')
        //     ->join('pekerjaan', 'pasien.pekerjaan_id', '=', 'pekerjaan.pekerjaan_id')
        //     ->join('pendidikan', 'pasien.pendidikan_id', '=', 'pendidikan.pendidikan_id')
        //     ->join('status_perkawinan', 'pasien.status_perkawinan_id', '=', 'status_perkawinan.status_perkawinan_id')
        //     ->join('suku', 'pasien.suku_id', '=', 'suku.suku_id')
        //     ->select(
        //         'pasien.*',
        //         'pasien.nama_pasien',
        //         'pasien.no_rekam_medik',
        //         'pasien.tanggal_lahir',
        //         'jenispasien.jenispasien_id',
        //         'jenispasien.nama_jenis_pasien',
        //         'poliklinik.poliklinik_id',
        //         'poliklinik.nama_poliklinik',
        //         'agama.agama_id',
        //         'agama.nama_agama',
        //         'poliklinik.nama_poliklinik',
        //         'golongan_darah.golongan_darah_id',
        //         'golongan_darah.nama_golongan_darah',
        //         'pekerjaan.pekerjaan_id',
        //         'pekerjaan.nama_pekerjaan',
        //         'pendidikan.pendidikan_id',
        //         'pendidikan.nama_pendidikan',
        //         'status_perkawinan.status_perkawinan_id',
        //         'status_perkawinan.nama_status_perkawinan',
        //         'suku.suku_id',
        //         'suku.nama_suku'
        //     )
        //     ->orderBy('nama_pasien', 'ASC')
        //     ->get();
        // // dd($pasien);
        // $jenispasien        = DB::table('jenispasien')->get();
        // $poliklinik         = DB::table('poliklinik')->get();
        // $agama              = DB::table('agama')->get();
        // $golongan_darah     = DB::table('golongan_darah')->get();
        // $pekerjaan          = DB::table('pekerjaan')->get();
        // $pendidikan         = DB::table('pendidikan')->get();
        // $status_perkawinan  = DB::table('status_perkawinan')->get();
        // $suku               = DB::table('suku')->get();
        // // dd($pasien);
        // $data = array(
        //     'pasien'                => $pasien,
        //     'jenispasien'           => $jenispasien,
        //     'poliklinik'            => $poliklinik,
        //     'agama'                 => $agama,
        //     'golongan_darah'        => $golongan_darah,
        //     'pekerjaan'             => $pekerjaan,
        //     'pendidikan'            => $pendidikan,
        //     'status_perkawinan'     => $status_perkawinan,
        //     'suku'                  => $suku
        // );
        return view('admin.pasien.index', [
            'nama_pasien'   => 'nama_pasien'
        ]);
        // return view('admin.pasien.index', $data);
        // return view('admin.pasien.index', compact('pasien', 'jenis_pasien'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pasien = DB::table('pasien')
            ->join('jenispasien', 'pasien.jenispasien_id', '=', 'jenispasien.jenispasien_id')
            ->join('poliklinik', 'pasien.poliklinik_id', '=', 'poliklinik.poliklinik_id')
            ->join('agama', 'pasien.agama_id', '=', 'agama.agama_id')
            ->join('golongan_darah', 'pasien.golongan_darah_id', '=', 'golongan_darah.golongan_darah_id')
            ->join('pekerjaan', 'pasien.pekerjaan_id', '=', 'pekerjaan.pekerjaan_id')
            ->join('pendidikan', 'pasien.pendidikan_id', '=', 'pendidikan.pendidikan_id')
            ->join('status_perkawinan', 'pasien.status_perkawinan_id', '=', 'status_perkawinan.status_perkawinan_id')
            ->join('suku', 'pasien.suku_id', '=', 'suku.suku_id')
            ->select(
                'pasien.*',
                'pasien.nama_pasien',
                'pasien.no_rekam_medik',
                'pasien.tanggal_lahir',
                'jenispasien.jenispasien_id',
                'jenispasien.nama_jenis_pasien',
                'poliklinik.poliklinik_id',
                'poliklinik.nama_poliklinik',
                'agama.agama_id',
                'agama.nama_agama',
                'poliklinik.nama_poliklinik',
                'golongan_darah.golongan_darah_id',
                'golongan_darah.nama_golongan_darah',
                'pekerjaan.pekerjaan_id',
                'pekerjaan.nama_pekerjaan',
                'pendidikan.pendidikan_id',
                'pendidikan.nama_pendidikan',
                'status_perkawinan.status_perkawinan_id',
                'status_perkawinan.nama_status_perkawinan',
                'suku.suku_id',
                'suku.nama_suku'
            )
            ->orderBy('nama_pasien', 'ASC')
            ->get();
        // dd($pasien);
        $jenispasien        = DB::table('jenispasien')->get();
        $poliklinik         = DB::table('poliklinik')->get();
        $agama              = DB::table('agama')->get();
        $golongan_darah     = DB::table('golongan_darah')->get();
        $pekerjaan          = DB::table('pekerjaan')->get();
        $pendidikan         = DB::table('pendidikan')->get();
        $status_perkawinan  = DB::table('status_perkawinan')->get();
        $suku               = DB::table('suku')->get();
        // dd($pasien);
        $data = array(
            'pasien'                => $pasien,
            'jenispasien'           => $jenispasien,
            'poliklinik'            => $poliklinik,
            'agama'                 => $agama,
            'golongan_darah'        => $golongan_darah,
            'pekerjaan'             => $pekerjaan,
            'pendidikan'            => $pendidikan,
            'status_perkawinan'     => $status_perkawinan,
            'suku'                  => $suku
            // 'no_rekam_medik'        => $no_rekam_medik,
            // 'nama_pasien'           => $nama_pasien,
            // 'tanggal_lahir'         => $tanggal_lahir
        );

        return view('admin.pasien.create', $data);
    }


    // public function data()
    // {
    //     $pasien = DB::table('pasien')
    //         ->join('jenis_pasien', 'pasien.jenis_pasien_id', '=', 'jenis_pasien.jenis_pasien_id')
    //         ->select(
    //             'pasien.*',
    //             'pasien.pasien_id',
    //             'pasien.no_rekam_medik',
    //             'pasien.nama_pasien',
    //             'pasien.jenis_pasien_id',
    //             'pasien.tanggal_lahir'
    //         )
    //         ->get();

    //     $jenis_pasien = DB::table('jenis_pasien')->get();

    //     $data = array(
    //         'pasien'            => $pasien,
    //         'jenis_pasien'      => $jenis_pasien
    //     );

    //     dd($data);
    //     return view('admin.pasien.data', compact('pasien', 'jenis_pasien'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pasien $pasien)
    {
        // 
        DB::table('pasien')
            ->insert([
                'jenispasien_id'            => $request->jenispasien_id,
                'poliklinik_id'             => $request->poliklinik_id,
                'agama_id'                  => $request->agama_id,
                'golongan_darah_id'         => $request->golongan_darah_id,
                'pekerjaan_id'              => $request->pekerjaan_id,
                'pendidikan_id'             => $request->pendidikan_id,
                'status_perkawinan_id'      => $request->status_perkawinan_id,
                'suku_id'                   => $request->suku_id,
                'no_rekam_medik'            => $request->no_rekam_medik,
                'nama_pasien'               => $request->nama_pasien,
                'tanggal_lahir'             => $request->tanggal_lahir,

            ]);
        return redirect('/admin/pasien')
            ->with('sukses', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pasien_id)
    {
        //
        $pasien = DB::table('pasien')
            ->where('pasien_id', $pasien_id)
            ->join('jenispasien', 'pasien.jenispasien_id', '=', 'jenispasien.jenispasien_id')
            ->join('poliklinik', 'pasien.poliklinik_id', '=', 'poliklinik.poliklinik_id')
            ->join('agama', 'pasien.agama_id', '=', 'agama.agama_id')
            ->join('golongan_darah', 'pasien.golongan_darah_id', '=', 'golongan_darah.golongan_darah_id')
            ->join('pekerjaan', 'pasien.pekerjaan_id', '=', 'pekerjaan.pekerjaan_id')
            ->join('pendidikan', 'pasien.pendidikan_id', '=', 'pendidikan.pendidikan_id')
            ->join('status_perkawinan', 'pasien.status_perkawinan_id', '=', 'status_perkawinan.status_perkawinan_id')
            ->join('suku', 'pasien.suku_id', '=', 'suku.suku_id')
            ->select(
                'pasien.pasien_id',
                'pasien.nama_pasien',
                'pasien.no_rekam_medik',
                'pasien.tanggal_lahir',
                'jenispasien.jenispasien_id',
                'jenispasien.nama_jenis_pasien',
                'poliklinik.poliklinik_id',
                'poliklinik.nama_poliklinik',
                'agama.agama_id',
                'agama.nama_agama',
                'poliklinik.nama_poliklinik',
                'golongan_darah.golongan_darah_id',
                'golongan_darah.nama_golongan_darah',
                'pekerjaan.pekerjaan_id',
                'pekerjaan.nama_pekerjaan',
                'pendidikan.pendidikan_id',
                'pendidikan.nama_pendidikan',
                'status_perkawinan.status_perkawinan_id',
                'status_perkawinan.nama_status_perkawinan',
                'suku.suku_id',
                'suku.nama_suku'
            )
            ->orderBy('nama_pasien', 'ASC')
            ->first();
        return view('admin.pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pasien_id)
    {
        //
        DB::table('pasien')
            ->where('pasien_id', $pasien_id)
            ->delete();

        return redirect('admin/pasien')
            ->with(['info' => 'Data Berhasil DI Hapus Cukkkk !!! ']);
    }

    public function detail(Request $request, $pasien_id)
    {
        // $pasien = DB::table('pasien')->where('pasien_id', $pasien_id)->first();

        $pasien = DB::table('pasien')
            ->where('pasien_id', $pasien_id)
            ->join('jenispasien', 'pasien.jenispasien_id', '=', 'jenispasien.jenispasien_id')
            ->join('poliklinik', 'pasien.poliklinik_id', '=', 'poliklinik.poliklinik_id')
            ->join('agama', 'pasien.agama_id', '=', 'agama.agama_id')
            ->join('golongan_darah', 'pasien.golongan_darah_id', '=', 'golongan_darah.golongan_darah_id')
            ->join('pekerjaan', 'pasien.pekerjaan_id', '=', 'pekerjaan.pekerjaan_id')
            ->join('pendidikan', 'pasien.pendidikan_id', '=', 'pendidikan.pendidikan_id')
            ->join('status_perkawinan', 'pasien.status_perkawinan_id', '=', 'status_perkawinan.status_perkawinan_id')
            ->join('suku', 'pasien.suku_id', '=', 'suku.suku_id')
            ->select(
                'pasien.*',
                'pasien.nama_pasien',
                'pasien.no_rekam_medik',
                'pasien.tanggal_lahir',
                'jenispasien.jenispasien_id',
                'jenispasien.nama_jenis_pasien',
                'poliklinik.poliklinik_id',
                'poliklinik.nama_poliklinik',
                'agama.agama_id',
                'agama.nama_agama',
                'poliklinik.nama_poliklinik',
                'golongan_darah.golongan_darah_id',
                'golongan_darah.nama_golongan_darah',
                'pekerjaan.pekerjaan_id',
                'pekerjaan.nama_pekerjaan',
                'pendidikan.pendidikan_id',
                'pendidikan.nama_pendidikan',
                'status_perkawinan.status_perkawinan_id',
                'status_perkawinan.nama_status_perkawinan',
                'suku.suku_id',
                'suku.nama_suku'
            )
            ->orderBy('nama_pasien', 'ASC')
            ->first();

        $data = array(
            'pasien'        => $pasien,
            //'agama'         => $agama,
        );
        // dd($data);
        return view('admin.pasien.detail', $data);
    }
}
