<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Page extends Controller
{
      //post listing
      public function listing()
      {  
         $data['result'] = DB::table('pages')->orderBy('id','desc')->get(); 
         return view('/admin/page/list',$data);
      }
  
      //post add
      public function add(Request $request)
      {
          $request->validate([
              "name"=>"required",
              "slug"=>"required|unique:pages",
              "description"=>"required",
          ]);
  
          $data = array(
              'name'=>$request->input('name'),
              'slug'=>$request->input('slug'),
              'description'=>$request->input('description'),
              'status'=>1,
              'added_on'=>date('Y-m-d h:i:s'),
          );
          DB::table('pages')->insert($data);
          $request->session()->flash('successs_msg','Page Published Successfully');
          return redirect('/admin/page/list');
      }
  
      //post delete
      public function delete($id)
      {
         DB::table('pages')->where('id',$id)->delete();
         session()->flash('successs_msg','Page Deleted Successfully');
         return redirect('/admin/page/list');
      }
  
      //post edit
  
      public function edit($id)
      {
         $data['result'] = DB::table('pages')->where('id',$id)->get();
         return view('/admin/page/edit',$data);
      }
  
      //post update
  
      public function update(Request $request,$id)
      {
          $request->validate([
              "name"=>"required",
              "slug"=>"required",
              "description"=>"required",
          ]);
  
          $data = array(
              'name'=>$request->input('name'),
              'slug'=>$request->input('slug'),
              'description'=>$request->input('description'),
          );
  
          DB::table('pages')->where('id',$id)->update($data);
          $request->session()->flash('successs_msg','Page Updated Successfully');
          return redirect('/admin/page/list');
      }
  
}
