@extends('front.layout.layout');

@section('page_title','About Us')


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
	    <h2 class="page_title">About Us</h2>
		<article class="article-post">
			
		     <p>
				 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum vehicula ex sit amet elementum. Nulla faucibus varius velit at sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In vel auctor dui. Phasellus vestibulum rhoncus malesuada. Duis finibus iaculis nisl, nec hendrerit nulla posuere sed. Sed tincidunt faucibus pharetra. Donec gravida mi at est dapibus, et elementum eros venenatis. Fusce ullamcorper sit amet metus non malesuada. In pretium arcu vitae elit rhoncus blandit. In a volutpat velit.
			</p>
			<p>
				Quisque tincidunt felis justo, vel scelerisque diam faucibus eget. Nam vitae dolor tincidunt, finibus sem in, ullamcorper enim. In sed mi eu ligula fermentum molestie nec ut sapien. Proin interdum tortor eget erat suscipit, et lacinia nibh molestie. Sed lacinia nulla et laoreet placerat. Mauris viverra augue dignissim lectus condimentum, non egestas metus elementum. Vivamus condimentum faucibus ligula, condimentum suscipit turpis lobortis ac. Nullam eu scelerisque metus. Aenean et faucibus dui. Suspendisse id arcu vitae orci varius accumsan. Proin rhoncus faucibus sapien nec iaculis.
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


