<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Pengurangan;
use Illuminate\Support\Facades\DB;

class PenguranganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengurangan = DB::table('pengurangan')->get();

        // $pengurangan = DB::table('pengurangan')
        //     ->select(
        //         'pengurangan.*',
        //         'pengurangan.bil_satu',
        //         'pengurangan.bil_dua',
        //         'pengurangan.jumlah'
        //     )
        //     ->get();

        $data = array(
            'pengurangan'  => $pengurangan
            // 'date'  => $date
        );
        //  dd($data);

        return view('admin.pengurangan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        DB::table('pengurangan')
            ->insert([
                // 'tanggal'       => $request->tanggal,
                'bil_satu'      => $request->bil_satu,
                'bil_dua'       => $request->bil_dua,
                'jumlah'        => $request->bil_satu - $request->bil_dua,
            ]);

        return redirect('admin/pengurangan')
            ->with('sukses', 'Data berhasil di Tambahkan');
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
    public function edit($pengurangan_id)
    {
        //
        $pengurangan  = DB::table('pengurangan')
            ->where('pengurangan_id', $pengurangan_id)
            ->first();

        $data  = array(
            'pengurangan'      => $pengurangan
        );

        return view('admin.pengurangan.edit', $data);
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
        $edit =  DB::table('pengurangan')
            ->where('pengurangan_id', $request->pengurangan_id)
            ->update([
                'bil_satu'      => $request->bil_satu,
                'bil_dua'       => $request->bil_dua,
                'jumlah'        => $request->bil_satu - $request->bil_dua
            ]);

        if ($edit) {
            return redirect('admin/pengurangan')
                ->with('sukses', 'Data Berhasil di Update !!!');
        } else {
            return redirect('admin/pengurangan')
                ->with('error', 'Data tidak pengurangana di Update !!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pengurangan_id)
    {
        //
        DB::table('pengurangan')
            ->where('pengurangan_id', $pengurangan_id)
            ->delete();

        return redirect('admin/pengurangan')
            ->with(['info' => 'Data Berhasil di Hapus']);
    }
}
