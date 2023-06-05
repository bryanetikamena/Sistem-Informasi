<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria_tanggung_jawab;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardKriteriaTanggungJawabController extends Controller
{
    public function index()
    {
        $data_kriteria_tanggung_jawab=kriteria_tanggung_jawab::all();
        return view ('dashboard.kriteria_tanggung_jawabs.index',compact('data_kriteria_tanggung_jawab'));
    }

    public function create()
    {
        return view('dashboard.kriteria_tanggung_jawabs.create');
    }

    public function store(Request $request)
    {
        $data = [
            'id_kriteria_tanggung_jawab'=>$request->id_kriteria_tanggung_jawab,
            'id_karyawan'=>$request->id_karyawan,
            'id_bobot_kriteria'=>$request->id_bobot_kriteria,
            'poin_penilaian'=>$request->poin_penilaian
        ];
        kriteria_tanggung_jawab::create($data);
        return redirect('/dashboard/kriteria_tanggung_jawabs')->with('success', 'Data Added Successfully');
    }

    public function showkriteriatanggungjawab($id)
    {
        $data_kriteria_tanggung_jawab = kriteria_tanggung_jawab::find($id);
        return view('/dashboard/kriteria_tanggung_jawabs/edit', compact('data_kriteria_tanggung_jawab'));
    }

    public function edit(Request $request, $id)
    {
        
        $data_kriteria_tanggung_jawab = kriteria_tanggung_jawab::find($id);
        $data_kriteria_tanggung_jawab->update($request->all());
        return redirect('/dashboard/kriteria_tanggung_jawabs')->with('info', 'Data Updated Successfully');
    }

    public function updatekriteriatanggungjawab(Request $request, $id)
    {
        $data_kriteria_tanggung_jawab = kriteria_tanggung_jawab::findorfail($id);
        $data_kriteria_tanggung_jawab->update($request->all());
        return view('dashboard.kriteria_tanggung_jawabs.index');
    }

    public function deletekriteriatanggungjawab($id)
    {
        $del = kriteria_tanggung_jawab::findorfail($id);
        $del->delete();
        return redirect('/dashboard/kriteria_tanggung_jawabs')->with('info', 'Data Deleted Successfully');
    }

    public function exportkriteriatanggungjawab()
    {
        $data_kriteria_tanggung_jawab = kriteria_tanggung_jawab::all();

        view()->share('data_kriteria_tanggung_jawab', $data_kriteria_tanggung_jawab);
        $pdfkriteria_tanggung_jawab = PDF::loadview('/dashboard/kriteria_tanggung_jawabs/pdf');
        return $pdfkriteria_tanggung_jawab->download('data.pdf');
    }

}
