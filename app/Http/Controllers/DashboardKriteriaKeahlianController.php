<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria_keahlian;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardKriteriaKeahlianController extends Controller
{
    public function index()
    {
        $data_kriteria_keahlian=kriteria_keahlian::all();
        return view ('dashboard.kriteria_keahlians.index',compact('data_kriteria_keahlian'));
    }

    public function create()
    {
        return view('dashboard.kriteria_keahlians.create');
    }

    public function store(Request $request)
    {
        $data = [
            'id_kriteria_keahlian'=>$request->id_kriteria_keahlian,
            'id_karyawan'=>$request->id_karyawan,
            'id_bobot_kriteria'=>$request->id_bobot_kriteria,
            'poin_penilaian'=>$request->poin_penilaian
        ];
        kriteria_keahlian::create($data);
        return redirect('/dashboard/kriteria_keahlians')->with('success', 'Data Added Successfully');
    }

    public function showkriteriakeahlian($id)
    {
        $data_kriteria_keahlian = kriteria_keahlian::find($id);
        return view('/dashboard/kriteria_keahlians/edit', compact('data_kriteria_keahlian'));
    }

    public function edit(Request $request, $id)
    {
        
        $data_kriteria_keahlian = kriteria_keahlian::find($id);
        $data_kriteria_keahlian->update($request->all());
        return redirect('/dashboard/kriteria_keahlians')->with('info', 'Data Updated Successfully');
    }

    public function updatekriteriakeahlian(Request $request, $id)
    {
        $data_kriteria_keahlian = kriteria_keahlian::findorfail($id);
        $data_kriteria_keahlian->update($request->all());
        return view('dashboard.kriteria_keahlians.index');
    }

    public function deletekriteriakeahlian($id)
    {
        $del = kriteria_keahlian::findorfail($id);
        $del->delete();
        return redirect('/dashboard/kriteria_keahlians')->with('info', 'Data Deleted Successfully');
    }

    public function exportkriteriakeahlian()
    {
        $data_kriteria_keahlian = kriteria_keahlian::all();

        view()->share('data_kriteria_keahlian', $data_kriteria_keahlian);
        $pdfkriteria_keahlian = PDF::loadview('/dashboard/kriteria_keahlians/pdf');
        return $pdfkriteria_keahlian->download('data.pdf');
    }

}
