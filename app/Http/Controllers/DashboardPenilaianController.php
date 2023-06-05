<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penilaian;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardPenilaianController extends Controller
{
    public function index()
    {
        $data_penilaian=penilaian::all();
        return view ('dashboard.penilaians.index',compact('data_penilaian'));
    }

    public function create()
    {
        return view('dashboard.penilaians.create');
    }

    public function store(Request $request)
    {
        $data = [
            'id_penilaian'=>$request->id_penilaian,
            'id_karyawan'=>$request->id_karyawan,
            'id_kriteria_tanggung_jawab'=>$request->id_kriteria_tanggung_jawab,
            'id_kriteria_disiplin'=>$request->id_kriteria_disiplin,
            'id_kriteria_loyalitas'=>$request->id_kriteria_loyalitas,
            'id_kriteria_keahlian'=>$request->id_kriteria_keahlian,
            'id_kriteria_kerja_sama'=>$request->id_kriteria_kerja_sama,
            'id_kriteria_pengetahuan'=>$request->id_kriteria_pengetahuan
        ];
        penilaian::create($data);
        return redirect('/dashboard/penilaians')->with('success', 'Data Added Successfully');
    }

    public function showpenilaian($id)
    {
        $data_penilaian = penilaian::find($id);
        return view('/dashboard/penilaians/edit', compact('data_penilaian'));
    }

    public function edit(Request $request, $id)
    {
        
        $data_penilaian = penilaian::find($id);
        $data_penilaian->update($request->all());
        return redirect('/dashboard/penilaians')->with('info', 'Data Updated Successfully');
    }

    public function updatepenilaian(Request $request, $id)
    {
        $data_penilaian = penilaian::findorfail($id);
        $data_penilaian->update($request->all());
        return view('dashboard.penilaians.index');
    }

    public function deletepenilaian($id)
    {
        $del = penilaian::findorfail($id);
        $del->delete();
        return redirect('/dashboard/penilaians')->with('info', 'Data Deleted Successfully');
    }

    public function exportpenilaian()
    {
        $data_penilaian = penilaian::all();

        view()->share('data_penilaian', $data_penilaian);
        $pdfpenilaian = PDF::loadview('/dashboard/penilaians/pdf');
        return $pdfpenilaian->download('data.pdf');
    }

}
