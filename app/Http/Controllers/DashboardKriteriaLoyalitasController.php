<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria_loyalitas;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardKriteriaLoyalitasController extends Controller
{
    public function index()
    {
        $data_kriteria_loyalitas=kriteria_loyalitas::all();
        return view ('dashboard.kriteria_loyalitas.index',compact('data_kriteria_loyalitas'));
    }

    public function create()
    {
        return view('dashboard.kriteria_loyalitas.create');
    }

    public function store(Request $request)
    {
        $data = [
            'id_kriteria_loyalitas'=>$request->id_kriteria_loyalitas,
            'id_karyawan'=>$request->id_karyawan,
            'id_bobot_kriteria'=>$request->id_bobot_kriteria,
            'poin_penilaian'=>$request->poin_penilaian
        ];
        kriteria_loyalitas::create($data);
        return redirect('/dashboard/kriteria_loyalitas')->with('success', 'Data Added Successfully');
    }

    public function showkriterialoyalitas($id)
    {
        $data_kriteria_loyalitas = kriteria_loyalitas::find($id);
        return view('/dashboard/kriteria_loyalitas/edit', compact('data_kriteria_loyalitas'));
    }

    public function edit(Request $request, $id)
    {
        
        $data_kriteria_loyalitas = kriteria_loyalitas::find($id);
        $data_kriteria_loyalitas->update($request->all());
        return redirect('/dashboard/kriteria_loyalitas')->with('info', 'Data Updated Successfully');
    }

    public function updatekriterialoyalitas(Request $request, $id)
    {
        $data_kriteria_loyalitas = kriteria_loyalitas::findorfail($id);
        $data_kriteria_loyalitas->update($request->all());
        return view('dashboard.kriteria_loyalitas.index');
    }

    public function deletekriterialoyalitas($id)
    {
        $del = kriteria_loyalitas::findorfail($id);
        $del->delete();
        return redirect('/dashboard/kriteria_loyalitas')->with('info', 'Data Deleted Successfully');
    }

    public function exportkriterialoyalitas()
    {
        $data_kriteria_loyalitas = kriteria_loyalitas::all();

        view()->share('data_kriteria_loyalitas', $data_kriteria_loyalitas);
        $pdfkriteria_loyalitas = PDF::loadview('/dashboard/kriteria_loyalitas/pdf');
        return $pdfkriteria_loyalitas->download('data.pdf');
    }

}
