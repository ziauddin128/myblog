<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class singlePost extends Controller
{
    public function index(Request $request, $category, $id)
    {
         $data['result'] = DB::table('posts')
                            ->where('category',$category)
                            ->where('id',$id)
                            ->get();

        $data['related'] = DB::table('posts')
                           ->where('category',$category)
                           ->whereNot('id',$id)
                           ->get();

       return view('front.post',$data);
    }
}
