@extends('admin.layout.layout')
@section('page_title','All Post')

@section('contain')
<div class="">
     <div class="page-title">
       <div class="title_left">
         <h4>Post</h4>
         <h2><a href="{{url('/admin/post/add')}}" class="btn btn-primary">Add Post</a></h2>
       </div>
     </div>
     <div class="clearfix"></div>
     <div class="row">
       <div class="col-md-12 col-sm-12 ">
         <div class="x_panel">
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="success_msg">{{session('successs_msg')}}</h2>
                  <div class="card-box table-responsive">
                     <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                       <thead>
                         <tr>
                           <th width="5%">Id</th>
                           <th width="47%">Title</th>
                           <th width="10%">Category</th>
                           <th width="10%">Image</th>
                           <th width="10%">Date</th>
                           <th width="18%">Action</th>
                         </tr>
                       </thead>
                       <tbody>

                       @foreach($result as $list)

                         <tr>
                           <td>{{$list->id}}</td>
                           <td>{{$list->title}}</td>
                           <td>{{$list->category}}</td>
                           <td><img src="{{asset('storage/admin/post/'.$list->image)}}" width="120px" alt=""></td>
                           
                           <td>{{$list->post_date}}</td>
                           <td>
                              <a href="{{url('/admin/post/edit/'.$list->id)}}" class="btn btn-warning">Edit</a>
                              <a href="{{url('/admin/post/delete/'.$list->id)}}" class="btn btn-danger">Delete</a>
                           </td>
                         </tr>

                        @endforeach
                        
                       </tbody>
                     </table>
                  </div>
                </div>
              </div>
            </div>
         </div>
       </div>
     </div>
   </div>
    
   
@endsection   

