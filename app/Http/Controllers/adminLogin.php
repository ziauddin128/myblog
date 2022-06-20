<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminLogin extends Controller
{
    public function login(Request $request)
    {
        $request->validate(
            [
                "email"=>"required|email",
                "password"=>"required|min:5|max:10"
            ]
            );
            $request->session()->flash('error');
            //return redirect('/admin/login');
        
        //user exists or not
        $email = $request->input('email');
        $password = $request->input('password');
        $result = DB::table('users')
                  ->where(array('email'=>$email,'password'=>$password))
                  ->get();

        if(isset($result[0]->id))
        {
           if($result[0]->status == 1)
           {
                $request->session()->put('adminLogin','yes');
                $request->session()->put('adminId',$result[0]->id);
                return redirect('/admin/post/list');
           }
           else 
           {
              session()->flash('error','Account Deactivated');
              return redirect('/admin/login');
           } 
        }
        else 
        {   
            session()->flash('error','Please Enter Valid Details');
            return redirect('/admin/login');
        }

    }
}
