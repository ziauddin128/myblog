@extends('front.layout.layout')

@section('page_title','Home Page')


@section('topSection')
<div class="jumbotron jumbotron-fluid mb-3 pt-0 pb-0 bg-lightblue position-relative">
		<div class="pl-4 pr-0 h-100 tofront">
			<div class="row justify-content-between">
				<div class="col-md-6 pt-6 pb-6 align-self-center">
					<h1 class="secondfont mb-3 font-weight-bold">
					  {{$latest->title}}
				   </h1>
					<p class="mb-3">
					   {{$latest->short_desc}}
					</p>
					<a href="{{url('/post/'.$latest->category.'/'.$latest->id)}}" class="btn btn-dark">Read More</a>
				</div>
				<div class="col-md-6 d-none d-md-block pr-0" style="background-size:cover;background-image:url('{{asset('storage/admin/post/'.$latest->image)}}')"></div>
			</div>
		</div>
	</div>
@endsection


@section('contain')
<div class="row">


    <div class="col-lg-6">
	    <h5 class="font-weight-bold spanborder"><span>National</span></h5>
         
		@foreach($national as $nationalList)
		   <div class="card border-0 mb-4 box-shadow h-xl-300">
		   <div style="background-image: 
				url({{asset('storage/admin/post/'.$nationalList->image)}});height:150px;background-size:cover;    background-repeat:no-repeat;"></div>
            <div class="card-body px-0 pb-0 d-flex flex-column align-items-start">
                <h2 class="h4 font-weight-bold">
                    <a class="text-dark" href="{{url('/post/'.$nationalList->category.'/'.$nationalList->id)}}">{{$nationalList->title}}</a>
                </h2>
                <p class="card-text">
                    <?php echo substr($nationalList->short_desc,0,60) ?>
                </p>
                <div>
                    <small class="text-muted">
					  <?php 
					     $old_date =strtotime($nationalList->post_date);
                         echo $date = date("F j, Y",$old_date);
					   ?>
					</small>
                </div>
            </div>
        </div>
		@endforeach
    </div>

    <div class="col-lg-6">
	    <h5 class="font-weight-bold spanborder"><span>Entertainment</span></h5>

		@foreach($entertainment as $entertainmentList)
        <div class="flex-md-row mb-4 box-shadow h-xl-300">
            <div class="mb-3 d-flex align-items-center">
                <img height="80" src="{{asset('storage/admin/post/'.$entertainmentList->image)}}">
                <div class="pl-3">
                    <h2 class="mb-2 h6 font-weight-bold">
                        <a class="text-dark" href="{{url('/post/'.$entertainmentList->category.'/'.$entertainmentList->id)}}">{{$entertainmentList->title}}</a>
                    </h2>
                    <div class="card-text text-muted small">
						<?php echo substr($entertainmentList->short_desc,0,100) ?>
                    </div>
                    <small class="text-muted">
						 <?php 
					      $old_date =strtotime($entertainmentList->post_date);
                          echo $date = date("F j, Y",$old_date);
					      ?>
					   </small>
                </div>
            </div>
        </div>
		@endforeach

    </div>
</div>
@endsection


@section('international')
<div class="row justify-content-between">

		<div class="col-md-8">

			<h5 class="font-weight-bold spanborder"><span>Sports</span></h5>

			@foreach($sports as $sportsList)

			<div class="mb-3 d-flex justify-content-between">
				<div class="pr-3">
					<h2 class="mb-1 h4 font-weight-bold">
					<a class="text-dark" href="{{url('/post/'.$sportsList->category.'/'.$sportsList->id)}}">{{$sportsList->title}}</a>
					</h2>
					<p>
					   <?php 
					      echo substr($sportsList->short_desc,0,200) 
					   ?>
					</p>
					<small class="text-muted">
				     	<?php 
					      $old_date =strtotime($sportsList->post_date);
                          echo $date = date("F j, Y",$old_date);
					      ?>
					</small>
				</div>
				<img height="120" src="{{asset('storage/admin/post/'.$sportsList->image)}}">
			</div>

			@endforeach

		</div>

		<div class="col-md-4 pl-4">
            <h5 class="font-weight-bold spanborder"><span>International</span></h5>

			<ol class="list-featured">
               @foreach($international as $internationalList)
				<li>
					<span>
					<h6 class="font-weight-bold">
					<a href="{{url('/post/'.$internationalList->category.'/'.$internationalList->id)}}" class="text-dark">
						{{$internationalList->title}}
					</a>
					</h6>
					<p class="text-muted">
					   <?php 
					      $old_date =strtotime($internationalList->post_date);
                          echo $date = date("F j, Y",$old_date);
					    ?>
					</p>
					</span>
				</li>
				@endforeach
		
			</ol>
		</div>
	</div>
@endsection