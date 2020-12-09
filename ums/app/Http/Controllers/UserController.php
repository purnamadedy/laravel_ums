<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user_ums;
use App\employee;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return user_ums::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        // $employee = employee::all();
        // return view('user.create', compact('employee'));
        return user_ums::all();
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

            'nama' => 'required',
            'alamat' => 'required',
            'employee_id' => 'required',
        ]);
        $user =  user_ums::create($validatedData);

        return redirect('/user')->with('status', 'Data user Berhasil Di Tambahkan');
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
    public function update(Request $request, user_ums $user)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'employee_id' => 'required',

        ]);
        $user->update($validatedData);
        return redirect('/user')->with('status', 'Data user Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_ums $user)
    {
        $user = user_ums::findOrFail($user->id);
        $user->delete();
        return redirect('/user')->with('status', 'Data user Berhasil Di Hapus');
    }
}
