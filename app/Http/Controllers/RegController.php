<?php

namespace App\Http\Controllers;

use App\Models\Reg;

use App\Models\Region;
use App\Models\District;
use App\Models\Ward;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
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
        $regs = reg::orderBy('id', 'desc')->get();
        
       


        return view('reg.index')->with('regs', $regs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions=Region::all();
        return view('reg.create',compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|max:255',
            'middlename' => 'required|max:255',
            'surname' => 'required|max:255',
            'gender' => 'required',
            'dob' => 'required',
            'phone' => 'required|max:10',
        ]);

        $region_name = Region::where('region_code' , $request->region)->first();
        $district_name = District::where('district_code' , $request->district)->first();
        $ward_name = Ward::where('ward_code' , $request->ward)->first();

        $reg = new Reg;
        $reg->firstname = $request->firstname;
        $reg->middlename = $request->middlename;
        $reg->surname = $request->surname;
        $reg->gender = $request->gender;
        $reg->dob = $request->dob;
        $reg->phone = $request->phone;
        $reg->phone = $request->phone;
        $reg->region = $region_name->name;
        $reg->district =   $district_name->name;
        $reg->ward =  $ward_name->name;
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
        return view('reg.show')->with('reg', $reg);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reg  $reg
     * @return \Illuminate\Http\Response
     */
    public function edit(Reg $reg)
    {
        return view('reg.edit')->with('reg', $reg);
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
        $validated = $request->validate([
            'firstname' => 'required|max:255',
            'middlename' => 'required|max:255',
            'surname' => 'required|max:255',
            'gender' => 'required',
            'dob' => 'required',
            'phone' => 'required|max:10',
        ]);
        
        $reg->firstname = $request->firstname;
        $reg->middlename = $request->middlename;
        $reg->surname = $request->surname;
        $reg->gender = $request->gender;
        $reg->dob = $request->dob;
        $reg->phone = $request->phone;
        $reg->save();

        

        Flash::success('PwD updated successfully.');

        return redirect(route('reg.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reg  $reg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reg $reg)
    {
        $reg->delete();

        Flash::success('PwD deleted successfully.');

        return redirect(route('reg.index'));
    }

    public function district(Request $request){
             $reg_id =  $request->post("dist");
    
         $data =DB::table("districts")->select('district_code','name')->where("region_code",$reg_id)->get();

        return Response::json($data);
    }
    public function getw(Request $request){
        $d_id =$request->post('ward');
    $data =DB::table("wards")->select('ward_code','name')->where("district_code",$d_id)->get();

    return Response::json($data);
    }

}
