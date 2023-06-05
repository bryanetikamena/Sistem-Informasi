<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $data_admin=admin::all();
        return view ('dashboard.admins.index',compact('data_admin'));
    }

    public function create()
    {
        return view('dashboard.admins.create');
    }

    public function store(Request $request)
    {
        $data = [
            'id_admin'=>$request->id_admin,
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'kontak'=>$request->kontak
        ];
        admin::create($data);
        return redirect('/dashboard/admins')->with('success', 'Data Added Successfully');
    }

    public function showadmin($id)
    {
        $data_admin = admin::find($id);
        return view('/dashboard/admins/edit', compact('data_admin'));
    }

    public function edit(Request $request, $id)
    {
        
        $data_admin = admin::find($id);
        $data_admin->update($request->all());
        return redirect('/dashboard/admins')->with('info', 'Data Updated Successfully');
    }

    public function updateadmin(Request $request, $id)
    {
        $data_admin = admin::findorfail($id);
        $data_admin->update($request->all());
        return view('dashboard.admins.index');
    }

    public function deleteadmin($id)
    {
        $del = admin::findorfail($id);
        $del->delete();
        return redirect('/dashboard/admins')->with('info', 'Data Deleted Successfully');
    }

    public function exportadmin()
    {
        $data_admin = admin::all();

        view()->share('data_admin', $data_admin);
        $pdfadmin = PDF::loadview('/dashboard/admins/pdf');
        return $pdfadmin->download('data.pdf');
    }

}
