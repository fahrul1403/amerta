<?php

namespace App\Http\Controllers;

use Hash;
use \Crypt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function v_verifikator_login()
    {
        return view('login_verifikator');
    }

    public function v_kader_login()
    {
        return view('login_kader');
    }

    public function v_register(Request $request)
    {
        $role = $request->role;

        if($role == "verificator"){
            return view('register',['role' => $role]);
        }else{
            return view('register',['role' => $role]);
        }
    }

    public function login_verifikator(Request $request)
    {
        {
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'no_str' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('verifikator')
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        $cekuser = User::where('username', $request->username)->first();
        if (!$cekuser) {
            return redirect()->route('v_verifikator_login')
                ->with('error', 'Login failed. Please check your credentials.');
        }

        $strDB = unserialize(Crypt::decryptString($cekuser->no_str));
        if ($request->no_str == $strDB) {

            session()->put('id', $cekuser->id);
            session()->put('email', $cekuser->email);
            session()->put('name', $cekuser->name);
            session()->put('level', $cekuser->level);

            return redirect()->route('verificator.index');
        } else {
            return redirect()->route('v_verifikator_login')
                ->with('error', 'Login failed. Please check your credentials.');
        }
    }

    public function login_kader(Request $request)
    {
        {
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('kader')
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        $cekuser = User::where('username', $request->username)->first();
        if (!$cekuser) {
            return redirect()->route('v_kader_login')
                ->with('error', 'Login failed. Please check your credentials.');
        }

        $passDB = unserialize(Crypt::decryptString($cekuser->password));
        if ($request->password == $passDB) {
            session()->put('id', $cekuser->id);
            session()->put('email', $cekuser->email);
            session()->put('name', $cekuser->name);
            session()->put('level', $cekuser->level);

            return redirect()->route('dashboard.dashboard', ['id' => $cekuser->id]);
        } else {
            return redirect()->route('v_kader_login')
                ->with('error', 'Login failed. Please check your credentials.');
        }
    }

    public function register(Request $request)
    {
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'username' => 'required',
                'role' => 'required',
            ]);

            $validator->sometimes('password', 'required', function ($request) {
                return $request->role == 'kader';
            });

            $validator->sometimes('no_str', 'required', function ($request) {
                return $request->role == 'verificator';
            });

            if ($validator->fails()) {
                return redirect('register?role='.$request->role)
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        if($request->role == "verificator"){
            $request->merge(['level' => $request->role,'no_str' => Crypt::encrypt($request->no_str)]);
        }else{
            $request->merge(['level' => $request->role,'no_str' => Crypt::encrypt($request->no_str),'password' => Crypt::encrypt($request->password)]);
        }

        User::create($request->all());

        if($request->role == "verificator"){
            return redirect()->route('v_verifikator_login')
                    ->with('success', 'regsiter successfully.');
                }else{
            return redirect()->route('v_kader_login')
                    ->with('success', 'regsiter successfully.');
        }

    }
}
