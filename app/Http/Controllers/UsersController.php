<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Flash;
use Response;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        $no_of_users = User::all()->count();
        return view('users.index', compact(['users','no_of_users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('users.create', ['roles' => $roles]);
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
            'surname' => 'required|max:255',
            'middlename' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'role' => 'required',
        ]);
        $x = $request->role;
        $user = new User;
        $user->firstname = trim(str_replace(' ', '', $request->firstname));
        $user->middlename = trim(str_replace(' ', '', $request->middlename));
        $user->surname = trim(str_replace(' ', '', $request->surname));
        $user->email = trim(str_replace(' ', '', $request->email));
        $user->password = Hash::make(strtoupper(trim(str_replace(' ', '', $request->surname))));
        $user->status = "active";
        $user->save();

        $as=$user->id;
        $ad=User::find($as);
        $ad->assignRole($x);

        Flash::success('User saved successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $user_roles = $user->roles()->get();
        return view('users.edit', compact(['roles','user_roles']))->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'firstname' => 'required|max:255',
            'surname' => 'required|max:255',
            'middlename' => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);

        $x = $request->role;
        $user->firstname = $request->firstname;
        $user->middlename = $request->middlename;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->save();

        $as=$user->id;
        $ad=User::find($as);
        $ad->assignRole($x);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }


  Public function UpdatePassword(Request $request){

    $user=Auth::User();
    $matched = Hash::check($request->old_password,$user->password);
    if($matched){
        if($request->new_password==$request->confirm_password){
            $user->password=Hash::make($request->new_password);
            $user->save();

           //return  view('views.department')->with('success','Password changed Successfully');
            // return back()->with('success','Password changed Successfully');
            Flash::success('Password changed Successfully');

            return redirect()->back();
        }
        // return back()->with('error','your new passwords dont match');
        Flash::error('your new passwords dont match');
        return redirect()->back();
    }else{
        // return back()->with('error','old password not correct');
        Flash::error('old password not correct');
        return redirect()->back();
    }

  }

}
