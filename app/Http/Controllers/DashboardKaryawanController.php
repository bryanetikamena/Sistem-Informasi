<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\karyawan;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardKaryawanController extends Controller
{
    public function index()
    {
        $data_karyawan=karyawan::all();
        return view ('dashboard.karyawans.index',compact('data_karyawan'));
    }

    public function create()
    {
        return view('dashboard.karyawans.create');
    }

    public function insert (Request $request)
    {
        dd('tesst');
        karyawan::create($request->all());
    }

    public function store(Request $request)
    {
        $data = [
            'id_karyawan'=>$request->id_karyawan,
            'nama'=>$request->nama,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'kontak'=>$request->kontak,
            'jabatan'=>$request->jabatan

        ];
        karyawan::create($data);
        return redirect('/dashboard/users')->with('success', 'Data Added Successfully');
    }

    public function showkaryawan($id)
    {
        $data_karyawan = karyawan::find($id);
        return view('/dashboard/karyawans/edit', compact('data_karyawan'));
    }

    public function edit(Request $request, $id)
    {
        
        $data_karyawan = karyawan::find($id);
        $data_karyawan->update($request->all());
        return redirect('/dashboard/karyawans')->with('info', 'Data Updated Successfully');
    }

    public function updatekaryawan(Request $request, $id)
    {
        $data_karyawan = karyawan::findorfail($id);
        $data_karyawan->update($request->all());
        return view('dashboard.karyawans.index');
    }

    public function deletekaryawan($id)
    {
        $del = karyawan::findorfail($id);
        $del->delete();
        return redirect('/dashboard/karyawans')->with('info', 'Data Deleted Successfully');
    }

    public function exportkaryawan()
    {
        $data_karyawan = karyawan::all();

        view()->share('data_karyawan', $data_karyawan);
        $pdfkaryawan = PDF::loadview('/dashboard/karyawans/pdf');
        return $pdfkaryawan->download('data.pdf');
    }

}
