<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Post extends Controller
{    
    //post listing
    public function listing()
    {  
       $data['result'] = DB::table('posts')->orderBy('id','desc')->get(); 
       return view('/admin/post/list',$data);
    }

    //post add
    public function add(Request $request)
    {
        $request->validate([
            "title"=>"required",
            "category"=>"required",
            "short_desc"=>"required",
            "long_desc"=>"required",
            "image"=>"required|mimes:jpg,jpeg,png",
            "post_date"=>"required"
        ]);

        $image = $request->file('image');
        $extenstion = $image->extension();
        $file = time().'.'.$extenstion;
        $image->storeAs('public/admin/post/',$file);

        $data = array(
            'title'=>$request->input('title'),
            'category'=>$request->input('category'),
            'short_desc'=>$request->input('short_desc'),
            'long_desc'=>$request->input('long_desc'),
            'image'=>$file,
            'post_date'=>$request->input('post_date'),
            'status'=>1,
            'added_on'=>date('Y-m-d h:i:s'),
        );
        DB::table('posts')->insert($data);
        $request->session()->flash('successs_msg','Post Published Successfully');
        return redirect('/admin/post/list');
    }

    //post delete
    public function delete($id)
    {
       DB::table('posts')->where('id',$id)->delete();
       session()->flash('successs_msg','Post Deleted Successfully');
       return redirect('/admin/post/list');
    }

    //post edit

    public function edit($id)
    {
       $data['result'] = DB::table('posts')->where('id',$id)->get();
      
       $data['category'] = DB::table('posts')->select('category')->get();

       return view('/admin/post/edit',$data);
    }

    //post update

    public function update(Request $request,$id)
    {
        $request->validate([
            "title"=>"required",
            "category"=>"required",
            "short_desc"=>"required",
            "long_desc"=>"required",
            "image"=>"mimes:jpg,jpeg,png",
            "post_date"=>"required"
        ]);

        $data = array(
            'title'=>$request->input('title'),
            'category'=>$request->input('category'),
            'short_desc'=>$request->input('short_desc'),
            'long_desc'=>$request->input('long_desc'),
            'post_date'=>$request->input('post_date'),
        );

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $extenstion = $image->extension();
            $file = time().'.'.$extenstion;
            $image->storeAs('public/admin/post/',$file);

            $data['image'] = $file;
        }

      
        DB::table('posts')->where('id',$id)->update($data);
        $request->session()->flash('successs_msg','Post Updated Successfully');
        return redirect('/admin/post/list');
    }

    
}
