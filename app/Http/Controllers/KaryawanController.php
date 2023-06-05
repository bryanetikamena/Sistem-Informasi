<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_karyawan=karyawan::all();
        return view ('dashboard.karyawans.index',compact('data_karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.karyawans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'id_karyawan'=>$request->id_karyawan,
            'nama'=>$request->nama,
            'tempat lahir'=>$request->tempat_lahir,
            'tanggal lahir'=>$request->tanggal_lahir,
            'jenis kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'kontak'=>$request->kontak,
            'jabatan'=>$request->jabatan

        ];
        karyawan::create($data);
        return redirect('/dashboard/users')->with('success', 'Data Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
