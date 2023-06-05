<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bobot_kriteria;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardBobotKriteriaController extends Controller
{
    public function index()
    {
        $data_bobot_kriteria=bobot_kriteria::all();
        return view ('dashboard.bobot_kriterias.index',compact('data_bobot_kriteria'));
    }

    public function create()
    {
        return view('dashboard.bobot_kriterias.create');
    }

    public function store(Request $request)
    {
        $data = [
            'id_bobot_kriteria'=>$request->id_bobot_kriteria,
            'nama'=>$request->nama,
            'bobot'=>$request->bobot
        ];
        bobot_kriteria::create($data);
        return redirect('/dashboard/bobot_kriterias')->with('success', 'Data Added Successfully');
    }

    public function showbobotkriteria($id)
    {
        $data_bobot_kriteria = bobot_kriteria::find($id);
        return view('/dashboard/bobot_kriterias/edit', compact('data_bobot_kriteria'));
    }

    public function edit(Request $request, $id)
    {
        
        $data_bobot_kriteria = bobot_kriteria::find($id);
        $data_bobot_kriteria->update($request->all());
        return redirect('/dashboard/bobot_kriterias')->with('info', 'Data Updated Successfully');
    }

    public function updatebobotkriteria(Request $request, $id)
    {
        $data_bobot_kriteria = bobot_kriteria::findorfail($id);
        $data_bobot_kriteria->update($request->all());
        return view('dashboard.bobot_kriterias.index');
    }

    public function deletebobotkriteria($id)
    {
        $del = bobot_kriteria::findorfail($id);
        $del->delete();
        return redirect('/dashboard/bobot_kriterias')->with('info', 'Data Deleted Successfully');
    }

    public function exportbobotkriteria()
    {
        $data_bobot_kriteria = bobot_kriteria::all();

        view()->share('data_bobot_kriteria', $data_bobot_kriteria);
        $pdfbobot_kriteria = PDF::loadview('/dashboard/bobot_kriterias/pdf');
        return $pdfbobot_kriteria->download('data.pdf');
    }

}
