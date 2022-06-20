@extends('admin.layout.layout')
@section('page_title','Contact')

@section('contain')
<div class="">
     <div class="page-title">
       <div class="title_left">
         <h4>Contact</h4>
       </div>
     </div>
     <div class="clearfix"></div>
     <div class="row">
       <div class="col-md-12 col-sm-12 ">
         <div class="x_panel">
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                     <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                       <thead>
                         <tr>
                           <th width="5%">Id</th>
                           <th width="10%">Name</th>
                           <th width="10%">Phone</th>
                           <th width="10%">Email</th>
                           <th width="47%">Message</th>
                           <th width="18%">Added_on</th>
                         </tr>
                       </thead>
                       <tbody>

                       @foreach($result as $list)

                         <tr>
                           <td>{{$list->id}}</td>
                           <td>{{$list->name}}</td>
                           <td>{{$list->phone}}</td>
                           <td>{{$list->email}}</td>
                           <td>{{$list->message}}</td>
                           <td>{{$list->added_on}}</td>
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

