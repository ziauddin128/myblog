@extends('admin.layout.layout')

@section('page_title','Add Page')

@section('contain')

<div class="">
   <div class="page-title">
      <div class="title_left">
         <h3>Manage Page</h3>
      </div>
   </div>
   <div class="clearfix"></div>
   <div class="row">
      <div class="col-md-12 ">
         <div class="x_panel">
            <div class="x_content">
               <br />
               <form class="form-horizontal form-label-left" action="{{url('/admin/page/page_add')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row ">
                     <label class="control-label col-md-3 col-sm-3 ">Page Name</label>
                     <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" placeholder="Page Name" value="{{old('name')}}" name="name">
                        @error('name')
                          <span class="error_msg">{{$message}}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row ">
                     <label class="control-label col-md-3 col-sm-3 ">Slug</label>
                     <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" placeholder="Slug" value="{{old('slug')}}" name="slug">
                        @error('slug')
                          <span class="error_msg">{{$message}}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row ">
                     <label class="control-label col-md-3 col-sm-3 ">Desc</label>
                     <div class="col-md-9 col-sm-9 ">
                        <textarea class="form-control" name="description">{{old('description')}}</textarea>
                        @error('description')
                          <span class="error_msg">{{$message}}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-9 col-sm-9  offset-md-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection