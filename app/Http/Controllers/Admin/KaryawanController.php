<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Karyawan;
use App\Cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;


class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $karyawan = Karyawan::orderBy('nama', 'ASC');

        if ($request->ajax()) {
            $data = Karyawan::latest()->get();
           return datatables::of($karyawan)
           ->addIndexColumn()
           ->addColumn('action', function($row){
                   
                   $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->karyawan_id.'" data-title="'.$row->no_induk.'" data-title="'.$row->nama.'"  data-alamat="'.$row->alamat.'" data-date="'.$row->tanggal_lahir.'" data-date="'.$row->tanggal_bergabung.'"  data-original-title="Edit" class="edit btn btn-primary btn-sm editProvinsi">EDIT</a>';
                   
                   $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-karyawan_id="'.$row->karyawan_id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteKaryawan">DETELE</a>';
                   
                   return $btn;  
           })
           ->rawColumns(['action'])
           ->make(true);
       }

       return view('admin.karyawan.index', compact('karyawan'));

        // return view('admin.karyawan.index', [
        //     'nama' => 'Nama Karyawan'
        // ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'no_induk'          => 'required|unique:karyawan',
        //     'nama'              => 'required',
        //     'alamat'            => 'required',
        //     'tanggal_lahir'     => 'required',
        //     'tanggal_bergabung' => 'required',
        //     'cover'             => 'file|image',
        // ]);

        $cover = null;

        // cek kondisi cover 
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover')->store('assets/covers');
        }

       Karyawan::updateOrCreate(['karyawan_id' => $request->karyawan_id],
       [
        'no_induk'              => $request->no_induk,
        'nama'                  => $request->nama,
        'cover'                 => $request->cover,
        'alamat'                => $request->alamat,
        'tanggal_lahir'         => $request->tanggal_lahir,
        'tanggal_bergabung'     => $request->tanggal_bergabung,
       ]);

       return response()->json(['success'  => 'Karyawan berhasil di tambhakan !!!']);
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
    public function edit($karyawan_id)
    {
        //
        // dd($karyawan);
        $karyawan = DB::table('karyawan')
            ->where('karyawan_id', $karyawan_id)
            ->first();
       
        return response()->json($karyawan);
        // return view('admin.karyawan.edit', compact('karyawan'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $karyawan_id)
    {
        //
        // $this->validate($request, [
        //     'no_induk'          => 'required|unique:karyawan',
        //     'nama'              => 'required',
        //     'alamat'            => 'required',
        //     'tanggal_lahir'     => 'required',
        //     'tanggal_bergabung' => 'required',

        // ]);
            DB::table('karyawan')
            ->where('karyawan_id', $request->id)
            ->update([
                'no_induk'          => $request->no_induk,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'tanggal_lahir'     => $request->tanggal_lahir,
                'tanggal_bergabung' => $request->tanggal_bergabung,
            ]);

            return response()->json(['success' => 'Karyawan Berhasil di Update !!!']);
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
            Karyawan::where('karyawan_id',$request->id)->delete(); 

            return response()->json(['success' => 'Karyawan berhasil di hapus !!!']);
    }

    public function detail(Request $request, $karyawan_id)
    {
        // $karyawan = DB::table('karyawan')
        //     ->where('karyawan_id', $karyawan_id)
        //     ->first();

        Karyawan::where('karyawan_id',$request->id)->delete(); 

       return response()->json()(['success' => 'Karyawan berhasil di hapus !!!']);
    }
}

