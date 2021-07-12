<?php

namespace App\Http\Controllers;

use App\Models\Accused;
use App\Models\CaseFile;
use App\Models\Complainant;
use App\Models\Department;
use App\Models\Officer;
use App\Models\Rank;
use App\Models\Station;
use App\Models\Victim;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('authy')->only('dashboard');
    }
    public function registerView(){
        $roles = ['central', 'branch_admin', 'clerk'];
        $stations = Station::all();
        return view('Auth.register', compact('stations','roles'));
    }

    public function register(){
        $user_exist = User::whereUsername(request('username'))->first();
        if($user_exist){
            return back()->withInfo('User existed already');
        }

        $user = User::create(request()->except(['_token','role']));
        $role1 = Role::whereName('central')->first();
        $role2 = Role::whereName('branch_admin')->first();
        $role3 = Role::whereName('clerk')->first();

        switch (request('role')) {
            case 'central':
                $user->assignRole($role1);
                return redirect()->route('login.view');
                break;
            case 'branch_admin':
                $user->assignRole($role2);
                return redirect()->route('login.view');
                break;
            case 'clerk':
                $user->assignRole($role3);
                return redirect()->route('login.view');
                break;
            
            default:
                $user->assignRole($role3);
                return redirect()->route('login.view');
                break;
        }

    }

    public function loginView(){
        return view('Auth.login');
    }

    public function login(){
        $user_exist = User::whereUsername(request('username'))->first();
        if($user_exist){
            if(auth()->attempt(request()->except('_token'))){
                return redirect()->to('dashboard');
            }
            return back()->withError('Username or Password not matched');
        }
        return back()->withError('User not found');
    }

    public function dashboard(){
        $cases = CaseFile::whereStationId(auth()->user()->station_id)->get();
        $complainants = count(Complainant::whereStationId(auth()->user()->station_id)->get());
        $accuseds = Accused::whereStationId(auth()->user()->station_id)->get();
        $victims = count(Victim::whereStationId(auth()->user()->station_id)->get());
        $officers = Officer::whereStationId(auth()->user()->station_id)->get();
        $stations = Station::all();
        $departments = Department::all();
        $ranks = Rank::all();
        return view('dashboard', compact('cases','complainants','accuseds','victims','officers','stations','departments','ranks'));
    }
}
