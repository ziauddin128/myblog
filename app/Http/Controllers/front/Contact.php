<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Contact extends Controller
{
    public function contact(Request $request)
    {
        $request->validate(
            [
                "name"=>'required',
                "email"=>'required|email',
                "phone"=>'required',
                "message"=>'required|max:500',
            ]
            );
        
        $data = array(
            "name"=>$request->input('name'),
            "phone"=>$request->input('phone'),
            "email"=>$request->input('email'),
            "message"=>$request->input('message'),
            "added_on"=>date('Y-m-d h:i:s')
        );

        DB::table('contacts')->insert($data);
        $request->session()->flash('msg','Message Sent Successfully. We will reach you very soon.');
        return redirect('contact');

    }
}
