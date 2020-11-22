<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use Validator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login_form(){
        

            if(Auth::guard('admin')->check()){
                return redirect()->route('admin.dashboard');
            }
            return view('login.admin-login');

    
    }

    // -----------------------------------------------------------------------------------//
    // -----------------------------------------------------------------------------------//

    public function login(Request $request){
        
            $this->validate($request,[
                'email'   => 'required|email|max:255',
                'password' => 'required|min:6|max:255'
            ]);

            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))){
                return redirect()->route('admin.dashboard');
            }else{ 
                return redirect()->back()->with('error',__('wrong email or password'));
            }

        
    }

    // -----------------------------------------------------------------------------------//
    // -----------------------------------------------------------------------------------//

    public function logout(Request $request){
        
        Auth::guard('admin')->logout();
        Auth::guard('web')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');

    }

    // -----------------------------------------------------------------------------------//
    // -----------------------------------------------------------------------------------//

    public function dashboard(){
        return view('admin.dashboard.index');
    }

    // -----------------------------------------------------------------------------------//
    // -----------------------------------------------------------------------------------//

    public function edit(){
        return view('admin.profile.edit');

    }
    // -----------------------------------------------------------------------------------//
    // -----------------------------------------------------------------------------------//

    public function update(Request $request){

        $this->validate($request,[
            'password' => 'required|confirmed|min:6|max:255',
            'oldpassword' => 'required|min:6|max:255',
            'email' => 'required|email|max:255',
        ]);

        $hashedPassword = auth()->user()->password;
        if(!Hash::check($request->oldpassword , $hashedPassword)){
            return back()->with('error',__('Old password not match'));
        }


        $admin = Admin::find(auth()->id()); 
        $admin->password = bcrypt($request->password);
        $admin->email = $request->email;
        $admin->save();
        return back()->with('success',__('Profile Updated Successfully'));

        return view('admin.profile.edit');
    }


}
