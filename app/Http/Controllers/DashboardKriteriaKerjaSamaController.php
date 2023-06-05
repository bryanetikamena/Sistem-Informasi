<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria_kerja_sama;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardKriteriaKerjaSamaController extends Controller
{
    public function index()
    {
        $data_kriteria_kerja_sama=kriteria_kerja_sama::all();
        return view ('dashboard.kriteria_kerja_samas.index',compact('data_kriteria_kerja_sama'));
    }

    public function create()
    {
        return view('dashboard.kriteria_kerja_samas.create');
    }

    public function store(Request $request)
    {
        $data = [
            'id_kriteria_kerja_sama'=>$request->id_kriteria_kerja_sama,
            'id_karyawan'=>$request->id_karyawan,
            'id_bobot_kriteria'=>$request->id_bobot_kriteria,
            'poin_penilaian'=>$request->poin_penilaian
        ];
        kriteria_kerja_sama::create($data);
        return redirect('/dashboard/kriteria_kerja_samas')->with('success', 'Data Added Successfully');
    }

    public function showkriteriakerjasama($id)
    {
        $data_kriteria_kerja_sama = kriteria_kerja_sama::find($id);
        return view('/dashboard/kriteria_kerja_samas/edit', compact('data_kriteria_kerja_sama'));
    }

    public function edit(Request $request, $id)
    {
        
        $data_kriteria_kerja_sama = kriteria_kerja_sama::find($id);
        $data_kriteria_kerja_sama->update($request->all());
        return redirect('/dashboard/kriteria_kerja_samas')->with('info', 'Data Updated Successfully');
    }

    public function updatekriteriakerjasama(Request $request, $id)
    {
        $data_kriteria_kerja_sama = kriteria_kerja_sama::findorfail($id);
        $data_kriteria_kerja_sama->update($request->all());
        return view('dashboard.kriteria_kerja_samas.index');
    }

    public function deletekriteriakerjasama($id)
    {
        $del = kriteria_kerja_sama::findorfail($id);
        $del->delete();
        return redirect('/dashboard/kriteria_kerja_samas')->with('info', 'Data Deleted Successfully');
    }

    public function exportkriteriakerjasama()
    {
        $data_kriteria_kerja_sama = kriteria_kerja_sama::all();

        view()->share('data_kriteria_kerja_sama', $data_kriteria_kerja_sama);
        $pdfkriteria_kerja_sama = PDF::loadview('/dashboard/kriteria_kerja_samas/pdf');
        return $pdfkriteria_kerja_sama->download('data.pdf');
    }

}
