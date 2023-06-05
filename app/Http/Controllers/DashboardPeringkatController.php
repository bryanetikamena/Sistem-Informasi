<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peringkat;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardPeringkatController extends Controller
{
    public function index()
    {
        $data_peringkat=peringkat::all();
        return view ('dashboard.peringkats.index',compact('data_peringkat'));
    }

    public function create()
    {
        return view('dashboard.peringkats.create');
    }

    public function store(Request $request)
    {
        $data = [
            'id_peringkat'=>$request->id_peringkat,
            'id_karyawa'=>$request->id_karyawa,
            'id_penilaian'=>$request->id_penilaian,
            'nilai'=>$request->nilai,
            'peringkat'=>$request->peringkat
        ];
        peringkat::create($data);
        return redirect('/dashboard/peringkats')->with('success', 'Data Added Successfully');
    }

    public function showperingkat($id)
    {
        $data_peringkat = peringkat::find($id);
        return view('/dashboard/peringkats/edit', compact('data_peringkat'));
    }

    public function edit(Request $request, $id)
    {
        
        $data_peringkat = peringkat::find($id);
        $data_peringkat->update($request->all());
        return redirect('/dashboard/peringkats')->with('info', 'Data Updated Successfully');
    }

    public function updateperingkat(Request $request, $id)
    {
        $data_peringkat = peringkat::findorfail($id);
        $data_peringkat->update($request->all());
        return view('dashboard.peringkats.index');
    }

    public function deleteperingkat($id)
    {
        $del = peringkat::findorfail($id);
        $del->delete();
        return redirect('/dashboard/peringkats')->with('info', 'Data Deleted Successfully');
    }

    public function exportperingkat()
    {
        $data_peringkat = peringkat::all();

        view()->share('data_peringkat', $data_peringkat);
        $pdfperingkat = PDF::loadview('/dashboard/peringkats/pdf');
        return $pdfperingkat->download('data.pdf');
    }

}
