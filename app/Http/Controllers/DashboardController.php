<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reg;
use App\Models\Role;
use App\Models\Region;
use DB;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    
    
            $year = ['2015','2016','2017','2018','2019','2020'];
    
    
           $female=DB::table('regs')
           ->select('gender')->where('gender','female')->count();
           $male=DB::table('regs')
           ->select('gender')->where('gender','male')->count();
          
    $region=DB::table('regions')->select('name')->get();
    

foreach($region as $reg)
{
$regions[]=$reg->name;
}

$regin=json_encode($regions);



        $no_of_roles = Role::all()->count();
        $no_of_users = User::all()->count();
        $no_of_regs = Reg::all()->count();
        return view('dashboard.a',compact(['no_of_users','no_of_regs','regin','male','female','no_of_roles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
