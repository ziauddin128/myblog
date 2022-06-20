@extends('front.layout.layout');

@section('page_title',$result['0']->title)


@section('topSection')
<div class="jumbotron jumbotron-fluid mb-3 pt-0 pb-0 bg-lightblue position-relative">
		<div class="pl-4 pr-0 h-auto tofront">
			<div class="row justify-content-between">
				<div class="col-md-6 pt-6 pb-6 align-self-center">
					<h1 class="secondfont mb-3 font-weight-bold">
					  {{$result['0']->title}}
				   </h1>
					<p class="mb-3">
					   {{$result['0']->short_desc}}
					</p>
				</div>
				<div class="col-md-6 d-none d-md-block pr-0" style="background-size:cover;background-image:url('{{asset('storage/admin/post/'.$result['0']->image)}}')"></div>
			</div>
		</div>
	</div>
@endsection

         

@section('contain')
<div class="row justify-content-center">
	<div class="col-lg-2 pr-4 mb-4 col-md-12">
		<div class="sticky-top text-center">
			<div class="text-muted">
				Share this
			</div>
			<div class="share d-inline-block">
				<!-- AddToAny BEGIN -->
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
					<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
					<a class="a2a_button_facebook"></a>
					<a class="a2a_button_twitter"></a>
				</div>
				<script async src="https://static.addtoany.com/menu/page.js"></script>
				<!-- AddToAny END -->
			</div>
		</div>
	</div>
	<div class="col-md-12 col-lg-8">
		<article class="article-post">
		     <p>
			  
			   {{$result['0']->long_desc}} 
			  
			</p>

		</article>
		<div class="border p-5 bg-lightblue">
			<div class="row justify-content-between">
				<div class="col-md-5 mb-2 mb-md-0">
					<h5 class="font-weight-bold secondfont">Become a member</h5>
					Get the latest news right in your inbox. We never spam!
				</div>
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-12">
							<input type="text" class="form-control" placeholder="Enter your e-mail address">
						</div>
						<div class="col-md-12 mt-2">
							<button type="submit" class="btn btn-success btn-block">Subscribe</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@section('international')
<h5 class="font-weight-bold spanborder"><span>Read next</span></h5>
<div class="row">
	
	<div class="col-lg-12">
		<div class="flex-md-row mb-4 box-shadow h-xl-300">

		@foreach($related as $relatedList)    

			<div class="mb-3 d-flex align-items-center">
				<img height="80" src="{{asset('storage/admin/post/'.$relatedList->image)}}">
				<div class="pl-3">
					<h2 class="mb-2 h6 font-weight-bold">
						<a class="text-dark" href="{{url('/post/'.$relatedList->category.'/'.$relatedList->id)}}">
						  {{$relatedList->title}}
						</a>
					</h2>
					<div>
					  {{$relatedList->category}}
					</div>
					<small class="text-muted">
						<?php 
							$old = strtotime($relatedList->title);
							echo $date = date("F j, Y",$old)
					    ?>
					</small>
				</div>
			</div>

	    @endforeach

		</div>
	</div>
</div>
@endsection