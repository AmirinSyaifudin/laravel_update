<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Provinsi;
use App\Kota;
use DataTables;


class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $kota = DB::table('kota')
        ->join('provinsi','kota.provinsi_id','=','provinsi.provinsi_id')
        ->select(
            'kota.kota_id',
            'kota.nama_kota',
            'kota.kode_pos',
            'kota.keterangan',
            'provinsi.provinsi_id',
            'provinsi.nama_provinsi',
        )
        ->orderBy('kota.nama_kota','ASC')
        ->get();

        if ($request->ajax()) {
            $data = Kota::latest()->get();
            return datatables::of($kota)
                ->addIndexColumn()
                ->addColumn('action', function($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->kota_id.'" data-title="'.$row->nama_kota.'" data-date="'.$row->kode_pos.'" data-keterangan="'.$row->keterangan.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editKota">EDIT </a>';
                    
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-kota_id="'.$row->kota_id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteKota">DETELE</a>';
                   
                    return $btn; 
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.kota.index', compact('kota'));
        //return view('admin.kota.index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kota = DB::table('kota')
        ->join('provinsi','kota.provinsi_id','=','provinsi_id')
        ->select([
            'provinsi.provinsi_id',
            'provinsi.nama_provinsi',
            'kota.nama_kota',
            'kota.kode_pos',
            'kota.keterangan',
        ])
        ->get();
        $provinsi = DB::table('provinsi')->get();
        $data = array(
            'kota'     => $kota,
            'provinsi'  =>$provinsi,
        );
        // dd($data);
        return redirect('admin.kota.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //
        Kota::updateOrCreate(['kota_id' => $request->kota_id],
        ['nama_kota'        => $request->nama_kota,
        'provinsi_id'       => $request->provinsi_id,
        'nama_provinsi'     => $request->nama_provinsi,
        'kode_pos'          => $request->kode_pos,
        'keterangan'        => $request->keterangan,
        ]);

        return response()->json(['success' => 'Kota Berhasil di tambahkan !!!']);
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
    public function edit($kota_id)
    {
        //
        $kota = Kota::find($kota_id);
        return response()->json($kota);
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
    public function destroy($kota_id)
    {
        DB::table('kota')
        ->where('kota_id', $kota_id)
        ->delete();

        return response()->json(['success'  => 'Data Kota berhasil di hapus !!!']);
    }
}




// public function store(Request $request)
// {
// //
//     //'company'   => Company::orderBy('nama','ASC')->get(),
//     //$provinsi = DB::table('provinsi')->get();
   
//    DB::table('kota')
//     ->insert([
//         'nama_kota'    => $request->nama_kota,
//         'kode_pos'     => $request->kode_pos,
//         'keterangan'   => $request->keterangan,
//     ]);
//     // $data = array(
//     //     'kota'     => $kota,
//     //     'provinsi'  =>$provinsi,
//     // );
//     // dd($data);
//     return redirect('admin/kota',[
//         'provinsi' => Provinsi::orderBy('nama_provinsi','ASC')->get(),
//     ])
//     ->with('sukses','Data kota Berhasil di tambahkan !!! ');
// }



// public function destroy($kota_id)
//     {
//         DB::table('kota')
//         ->where('kota_id', $kota_id)
//         ->delete();

//         return redirect('admin/kota')
//         ->with(['info' => 'Data berhasil di Hapus !!']);
//     }