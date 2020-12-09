<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\divissi;
use App\employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return employee::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $divisi = divissi::all();
        // return view('divisi.create', compact('$divisi'));
        return divissi::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'id_karyawan' => 'required',
            'gaji' => 'required',
            'divisi_id' => 'required',
        ]);
        $employee =  employee::create($validatedData);

        return redirect('/employee')->with('status', 'Data employee Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        $validatedData = $request->validate([
            'id_karyawan' => 'required',
            'gaji' => 'required',
            'divisi_id' => 'required',

        ]);
        $employee->update($validatedData);
        return redirect('/employee')->with('status', 'Data employee Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        $employee = employee::findOrFail($employee->id);
        $employee->delete();
        return redirect('/$employee')->with('status', 'Data employee Berhasil Di Hapus');
    }
}
