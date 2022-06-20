@extends('front.layout.layout')

@section('page_title','Contact Page')

@section('contain')

<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="wrapper">
			<div class="row no-gutters mb-5">
				<div class="col-md-7">
					<div class="contact-wrap w-100 p-md-5 p-4">
						<h3 class="mb-4">Contact Us</h3>
						<div id="form-message-warning" class="mb-4"></div>
						<div id="form-message-success" class="mb-4">
							Your message was sent, thank you!
						</div>
						<form method="post" action="{{url('/contactSubmit')}}" id="contactForm" name="contactForm" class="contactForm">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="label" for="name">Full Name</label>
										<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{old('name')}}">
                                        @error('name')
										 <span class="error_msg">{{$message}}</span>
                                        @enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="label" for="email">Email Address</label>
										<input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="Email">
										@error('email')
										 <span class="error_msg">{{$message}}</span>
                                        @enderror
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="label" for="subject">Phone Number</label>
										<input type="text" class="form-control" name="phone" id="subject" value="{{old('phone')}}" placeholder="Phone Number">
										@error('phone')
										 <span class="error_msg">{{$message}}</span>
                                        @enderror
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="label" for="#">Message</label>
										<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message">{{old('phone')}}</textarea>
										@error('message')
										 <span class="error_msg">{{$message}}</span>
                                        @enderror
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary">
										<div class="submitting"></div>
									</div>
								</div>
							</div>
						</form>
						<p class="success_msg">{{session('msg')}}</p>
					</div>
				</div>
				<div class="col-md-5 d-flex align-items-stretch">
					<div id="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29378.465592915018!2d91.38132088025371!3d23.01245343780587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753429e88a352f7%3A0xdf9547cb76f03b88!2sFeni!5e0!3m2!1sen!2sbd!4v1655739427512!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

@endsection