<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria_pengetahuan;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardKriteriaPengetahuanController extends Controller
{
    public function index()
    {
        $data_kriteria_pengetahuan=kriteria_pengetahuan::all();
        return view ('dashboard.kriteria_pengetahuans.index',compact('data_kriteria_pengetahuan'));
    }

    public function create()
    {
        return view('dashboard.kriteria_pengetahuans.create');
    }

    public function store(Request $request)
    {
        $data = [
            'id_kriteria_pengetahuan'=>$request->id_kriteria_pengetahuan,
            'id_karyawan'=>$request->id_karyawan,
            'id_bobot_kriteria'=>$request->id_bobot_kriteria,
            'poin_penilaian'=>$request->poin_penilaian
        ];
        kriteria_pengetahuan::create($data);
        return redirect('/dashboard/kriteria_pengetahuans')->with('success', 'Data Added Successfully');
    }

    public function showkriteriapengetahuan($id)
    {
        $data_kriteria_pengetahuan = kriteria_pengetahuan::find($id);
        return view('/dashboard/kriteria_pengetahuans/edit', compact('data_kriteria_pengetahuan'));
    }

    public function edit(Request $request, $id)
    {
        $data_kriteria_pengetahuan = kriteria_pengetahuan::find($id);
        $data_kriteria_pengetahuan->update($request->all());
        return redirect('/dashboard/kriteria_pengetahuans')->with('info', 'Data Updated Successfully');
    }

    public function updatekriteriapengetahuan(Request $request, $id)
    {
        $data_kriteria_pengetahuan = kriteria_pengetahuan::findorfail($id);
        $data_kriteria_pengetahuan->update($request->all());
        return view('dashboard.kriteria_pengetahuans.index');
    }

    public function deletekriteriapengetahuan($id)
    {
        $del = kriteria_pengetahuan::findorfail($id);
        $del->delete();
        return redirect('/dashboard/kriteria_pengetahuans')->with('info', 'Data Deleted Successfully');
    }

    public function exportkriteriapengetahuan()
    {
        $data_kriteria_pengetahuan = kriteria_pengetahuan::all();

        view()->share('data_kriteria_pengetahuan', $data_kriteria_pengetahuan);
        $pdfkriteria_pengetahuan = PDF::loadview('/dashboard/kriteria_pengetahuans/pdf');
        return $pdfkriteria_pengetahuan->download('data.pdf');
    }

}
