<?php

namespace App\Http\Controllers;

use App\Models\Reg;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Flash;
use Response;

class RegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reg.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg = new Reg;
        $reg->firstname = $request->firstname;
        $reg->middlename = $request->middlename;
        $reg->surname = $request->surname;
        $reg->gender = $request->gender;
        $reg->dob = $request->dob;
        $reg->phone = $request->phone;
        
        $reg->save();

        Flash::success(' saved successfully.');

        return redirect(route('reg.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reg  $reg
     * @return \Illuminate\Http\Response
     */
    public function show(Reg $reg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reg  $reg
     * @return \Illuminate\Http\Response
     */
    public function edit(Reg $reg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reg  $reg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reg $reg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reg  $reg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reg $reg)
    {
        //
    }
}
