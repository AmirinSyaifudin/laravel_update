<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Provinsi;
use DataTables;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.provinsi.index');
    }

    public function dataProvinsi()
    {
        // ->addColumn('action', 'admin.provinsi.action')
        $provinsi = Provinsi::orderBy('nama_provinsi', 'ASC');

        return datatables()->of($provinsi)
            ->addColumn('action', function($row){
                    
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-provinsi_id="'.$row->provinsi_id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProvinsi">EDIT</a>';
                    
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-provinsi_id="'.$row->provinsi_id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProvinsi">DETELE</a>';
                    // $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Detail" class="btn btn-info btn-sm deleteProvinsi">DETAIL</a>';
                    return $btn;
            })
            ->addIndexColumn() 
            ->rawColumns(['action'])
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        DB::table('provinsi')
        ->insert([
            'nama_provinsi'           => $request->nama_provinsi,
            'tanggal_jadi_provinsi'   => $request->tanggal_jadi_provinsi,
            'keterangan'              => $request->keterangan,
        ]);

        return redirect('admin/provinsi')
        ->with('sukses','Data Provinsi Berhasil diTambahkan !!!');
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
            Provinsi::updateOrCreate(['provinsi_id'   => $request->provinsi_id],
                ['nama_provinsi'         => $request->nama_provinsi,
                 'tanggal_jadi_provinsi' => $request->tanggal_jadi_provinsi,
                 'keterangan'            => $request->keterangan
                ]);

                return response()->json(['success' => 'Data Berhasil Di tambahkan !!!']);
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
    public function edit($provinsi_id)
    {
        //
        $provinsi = Provinsi::find($provinsi_id);
        return response()->json($provinsi);
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
    public function destroy($provinsi_id)
    {
        //
        Provinsi::find($provinsi_id)->delete();
     
        return response()->json(['success'=>'Provinsi deleted successfully.']);

    }
}


// DB::table('provinsi')
// ->where('provinsi_id', $provinsi_id)
// ->delete();

// return redirect('admin/provinsi')
// ->with(['info' => 'Data berhasil di Hapus !!']);


// public function store(Request $request)
// {
//     //
 
    
//     DB::table('provinsi')
//     ->insert([
//         'nama_provinsi'           => $request->nama_provinsi,
//         'tanggal_jadi_provinsi'   => $request->tanggal_jadi_provinsi,
//         'keterangan'              => $request->keterangan,
//     ]);
    
//     return redirect('admin/provinsi')
//     ->with('sukses','Data Provinsi Berhasil diTambahkan !!!');
// }