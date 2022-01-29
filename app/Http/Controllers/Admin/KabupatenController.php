<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Provinsi;
use App\Kota;
use App\Kabupaten;
use DataTables;


class KabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $kabupaten = DB::table('kabupaten')
        ->join('kota','kabupaten.kota_id','=','kota.kota_id')
        ->join('provinsi','kabupaten.provinsi_id','=','provinsi.provinsi_id')
        ->select(
            'kabupaten.kabupaten_id',
            'kabupaten.nama_kabupaten',
            'kabupaten.kode_pos',
            'kabupaten.keterangan',
            'kota.kota_id',
            'kota.nama_kota',
            'provinsi.provinsi_id',
            'provinsi.nama_provinsi',
        )
        ->orderBy('kabupaten.nama_kabupaten','ASC')
        ->get();

        if ($request->ajax()) {
            $data = Kota::latest()->get();
            return datatables::of($kabupaten)
                ->addIndexColumn()
                ->addColumn('action', function($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->kabupaten_id.'" data-title="'.$row->nama_kabupaten.'" data-date="'.$row->kode_pos.'" data-keterangan="'.$row->keterangan.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editKabupaten">EDIT </a>';
                    
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-kabupaten_id="'.$row->kabupaten_id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteKabupaten">DETELE</a>';
                   
                    return $btn; 
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.kabupaten.index', compact('kabupaten'));

        
        // return view('admin.kabupaten.index');
    }

    // public function dataKabupaten()
    // {
    //     $kabupaten = DB::table('kabupaten')
    //     ->join('kota','kabupaten.kota_id','=','kota.kota_id')
    //     ->join('provinsi','kabupaten.provinsi_id','=','provinsi.provinsi_id')
    //     ->select(
    //         'kabupaten.nama_kabupaten',
    //         'kota.nama_kota',
    //         'provinsi.nama_provinsi',
    //     )
    //     ->orderBy('kabupaten.nama_kabupaten','ASC')
    //     ->get();

    //     return datatables()->of($kabupaten)
    //     ->addColumn('action','admin.kabupaten.action')
    //     ->addIndexColumn()
    //     ->rawColumns(['action'])
    //     ->toJson();
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return redirect('admin.kabupaten.create', $data);
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
        Kabupaten::updateOrCreate(['kabupaten'   => $request->kabupaten_id],
        [
            'nama_kabupaten'   => $request->nama_kabupaten,
            'nama_kota'        => $request->nama_kota,
            'nama_provinsi'    => $request->nama_provinsi,
            'kode_pos'         => $request->kode_pos,
            'keterangan'       => $request->keterangan,
        ]);

        return response()->json(['success'  => 'Kabupaten Berhasil di Tambahkan !!!']);
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
    public function edit($kabupaten_id)
    {
        //
        $kabupaten = Kabupaten::find($kabupaten_id);
        return response()->json($kabupaten);

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
        DB ::table('kabupaten')
        ->where('kabupaten_id', $request->id)
        ->update([
            'nama_kabupaten'        => $request->nama_kabupaten,
            'nama_kota'             => $request->nama_kota,
            'nama_provinsi'         => $request->nama_provinsi,
            'kode_pos'              => $request->kode_pos,
            'keterangan'            => $request->keterangan,
        ]);

        return response()->json(['success' => 'Kabupaten berhasil di Update !!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kabupaten_id)
    {
        //
        DB::table('kabupaten')
        ->where('kabupaten_id', $kabupaten_id)
        ->first();

        return redirect('admin/kabupaten')
        ->with(['info' => 'Data berhasil di Hapus !!']);
    }


    
}
