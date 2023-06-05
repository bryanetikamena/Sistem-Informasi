<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria_disiplin;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardKriteriaDisiplinController extends Controller
{
    public function index()
    {
        $data_kriteria_disiplin=kriteria_disiplin::all();
        return view ('dashboard.kriteria_disiplins.index',compact('data_kriteria_disiplin'));
    }

    public function create()
    {
        return view('dashboard.kriteria_disiplins.create');
    }

    public function store(Request $request)
    {
        $data = [
            'id_kriteria_disiplin'=>$request->id_kriteria_disiplin,
            'id_karyawan'=>$request->id_karyawan,
            'id_bobot_kriteria'=>$request->id_bobot_kriteria,
            'poin_penilaian'=>$request->poin_penilaian
        ];
        kriteria_disiplin::create($data);
        return redirect('/dashboard/kriteria_disiplins')->with('success', 'Data Added Successfully');
    }

    public function showkriteriadisiplin($id)
    {
        $data_kriteria_disiplin = kriteria_disiplin::find($id);
        return view('/dashboard/kriteria_disiplins/edit', compact('data_kriteria_disiplin'));
    }

    public function edit(Request $request, $id)
    {     
        $data_kriteria_disiplin = kriteria_disiplin::find($id);
        $data_kriteria_disiplin->update($request->all());
        return redirect('/dashboard/kriteria_disiplins')->with('info', 'Data Updated Successfully');
    }

    public function updatekriteriadisiplin(Request $request, $id)
    {
        $data_kriteria_disiplin = kriteria_disiplin::findorfail($id);
        $data_kriteria_disiplin->update($request->all());
        return view('dashboard.kriteria_disiplins.index');
    }

    public function deletekriteriadisiplin($id)
    {
        $del = kriteria_disiplin::findorfail($id);
        $del->delete();
        return redirect('/dashboard/kriteria_disiplins')->with('info', 'Data Deleted Successfully');
    }

    public function exportkriteriadisiplin()
    {
        $data_kriteria_disiplin = kriteria_disiplin::all();

        view()->share('data_kriteria_disiplin', $data_kriteria_disiplin);
        $pdfkriteria_disiplin = PDF::loadview('/dashboard/kriteria_disiplins/pdf');
        return $pdfkriteria_disiplin->download('data.pdf');
    }

}
