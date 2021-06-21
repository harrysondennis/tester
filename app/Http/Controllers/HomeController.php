<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reg;
use App\Models\Role;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no_of_users = User::all()->count();
        $no_of_regs = Reg::all()->count();
        $no_of_roles = Role::all()->count();
        return view('home', compact(['no_of_users','no_of_regs', 'no_of_roles']));
        // return view('home', compact(['no_of_users']));
        // return view('home');
    }
}
