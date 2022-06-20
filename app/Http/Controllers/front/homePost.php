<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class homePost extends Controller
{
    public function home()
    {
        //latest Post
        $data['latest'] = DB::table('posts')->latest('id')->first();


        //national
        $data['national'] = DB::table('posts')->where('category','National')->orderBy('id','desc')->limit('3')->get();

        //entertainment
        $data['entertainment'] = DB::table('posts')->where('category','Entertainment')->orderBy('id','desc')->limit('3')->get();

        //sports
        $data['sports'] = DB::table('posts')->where('category','Sports')->orderBy('id','desc')->limit('3')->get();

        //international
        $data['international'] = DB::table('posts')->where('category','International')->orderBy('id','desc')->limit('3')->get();

        return view('front.home',$data);
    }

    public static function page_menu()
    {
        $pages= DB::table('pages')->where('status','1')->get();
        return $pages;
    }
 
}
