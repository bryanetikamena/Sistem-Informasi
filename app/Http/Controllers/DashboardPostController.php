<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\pengguna;
use Illuminate\Http\Request;
//use PDF;
use Barryvdh\DomPDF\Facade\PDF;



class DashboardPostController extends Controller
{



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*//return User::all();
        //return User::where('user_id', auth()->user()->id)->get();
        return view('dashboard.users.index', [
            //'users' => User::where('user_id', auth()->user()->id)->get()
            User::all()
        ]);*/

        $data_user=pengguna::all();
        return view ('dashboard.users.index',compact('data_user'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_user = [
            'id_admin'=>$request->id_admin,
            'email'=>$request->email,
            'password'=>$request->password,
            'username'=>$request->username
        ];
        pengguna::create($data_user);
        return redirect('/dashboard/users')->with('success', 'Data Added Successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function showuser($id)
    {
        $data_user = pengguna::find($id);
        return view('/dashboard/users/edit', compact('data_user'));


        //dd($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        
        $data_user = pengguna::find($id);
        $data_user->update($request->all());
        return redirect('/dashboard/users')->with('info', 'Data Updated Successfully');
        //return view('dashboard.users.index')->with('data', $data);
        //return pengguna::all();
        //return pengguna::where('username',$id)->first();
        //dd('tesss');
        //return view('dashboard.users.edit')->with('data', $data_user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateuser(Request $request,  $id)
    {
        $data_user = pengguna::findorfail($id);
        $data_user->update($request->all());
       // return view('dashboard.users.index')->with('data', $id);
       return view('dashboard.users.index');
        //dd('tesss');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteuser($id)
    {
        $del = pengguna::findorfail($id);
        $del->delete();
        //pengguna::destroy($pengguna->id);
        //pengguna::where('username', $post)->delete();
        //return back()->with('success', 'Data Deleted Successfully');
        return redirect('/dashboard/users')->with('info', 'Data Deleted Successfully');
    }

    public function exportuser()
    {
        $data_user = pengguna::all();

        view()->share('data_user', $data_user);
        $pdfuser = PDF::loadview('/dashboard/users/pdf');
        return $pdfuser->download('data.pdf');
    }

}
