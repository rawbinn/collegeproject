@extends('layouts.app')
@section('content')
@include('includes.header2')
{{-- <div id="content">
    <div class="container"> --}}
		{{--<div class="row">
			<div class="offset-2 col-1">
				<img src="{{ Storage::url($college->logo) }}" width="150px; margin: 10px auto">
			</div>
			<div class="col-6 pl-5">
				<h2>
					  <a href="/college/{{$college->id}}">{{ $college->name }}</a>
				  </h2>
				  @auth
					  <a class="btn btn-success" href="/favorite/{{$college->id}}">❤️ @if($favorite) Remove From @else Add To @endif Favorite</a>
				  @endauth
				  <hr>
				  <div style="font-size: 20px">
						<strong>Affiliation: {{ $college->affiliation->name }}</strong><br>
						<strong>Level: {{ $college->level->name }}</strong><br>
						<strong>Faculty: {{ $college->faculty->name }}</strong><br>
						<br>
					<p>
						🌍 <a href="{{ $college->website }}" target="_new">Visit Website</a>
						<br>
						📍 {{ $college->location }}
						<br>
						📨 <a href="mailto:{{ $college->email }}" target="_new">{{ $college->email }}</a>
					</p>
					<br>
					<p class="card-text">{{ $college->description }}</p>
					<br>
				</div>
				<hr>
				<div>
					<h3 class="text-center">Ratings</h3>
	
					<p>
						Average Rating: <strong>{{ intval($averageRating->average_rating) > 0 ? intval($averageRating->average_rating) : 'No ratings yet!' }}</strong>
						<hr>
						@if ($user && $user->college()->first() && $user->college()->first()->id === $college->id)
								<div class="card mb-4">
									<div class="card-header">
										Add New Rating
									</div>
									<div class="card-body">
										<form method="post" action="/rating">
											@csrf
											<input type="hidden" name="college_id" value="{{$college->id}}">
											<select name="rating" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
											<select name="topic" class="form-control">
												@foreach($topics as $topic)
													<option value="{{$topic}}">{{$topic}}</option>
												@endforeach
											</select>
											<button class="btn btn-info">💾</button>
										</form>
									</div>
								</div>
							@endif
						@if ($user && $user->ratings()->count())
							<div class="row">
								@foreach($user->ratings()->where('college_id', $college->id)->get() as $ur)
									<div class="col-3 bg-dark text-light p-1">
										<form method="post" action="/rating/{{$ur->id}}">
											@csrf
											<select name="rating" class="form-control">
												<option {{ $ur->rating_given == 1 ? 'selected' : ''}} value="1">1</option>
												<option {{ $ur->rating_given == 2 ? 'selected' : ''}} value="2">2</option>
												<option {{ $ur->rating_given == 3 ? 'selected' : ''}} value="3">3</option>
												<option {{ $ur->rating_given == 4 ? 'selected' : ''}} value="4">4</option>
												<option {{ $ur->rating_given == 5 ? 'selected' : ''}} value="5">5</option>
											</select>
											<select name="topic" class="form-control">
												@foreach($topics as $topic)
													<option {{ $ur->topic == $topic ? 'selected' : ''}} value="{{$topic}}">{{$topic}}</option>
												@endforeach
											</select>
											<button class="btn btn-info">💾</button>
											<a href="/rating/{{$ur->id}}/delete" class="btn btn-danger">🗑</a>
										</form>
									</div>
									
								@endforeach
							</div>
						@endif
	
						@if($ratingByTopic->count())
							Ratings By Topic:
							<br>
							@foreach($ratingByTopic as $topic)
								<span>{{ $topic->topic . ': ' . round($topic->average_rating) }} </span> <br>
							@endforeach
	
							<div class="row">
								@foreach($allRatings as $rating)
									<div class="col-3 bg-dark text-light m-1">
										{{ $rating->user->name }}<br>
										{{ $rating->topic }}<br>
										{{ $rating->rating_given }}<br>
									</div>
								@endforeach
							</div>
						@endif
					</p>
				</div>
	
	
				
			</div>
			<div class="offset-2 col-md-8">
				<br>
				<br>
				<hr>
				<h2 class="text-center">Similar Colleges</h2>
				<p class="text-center">
					Similar colleges are calculated by college description, faculty, level and address using consine similarity.
				</p>
				<div class="row">
					@foreach($similarColleges as $college)
						<div class="col-4 mt-5">
							<div class="card border-success mb-3">
							  <div class="card-header text-center pt-3">
								  <img src="{{ Storage::url($college->logo) }}" width="150px; margin: 10px auto">
								  <br>
								  <br>
								  <h2>
									  <a href="/college/{{$college->id}}">{{ $college->name }}</a>
								  </h2>
							  </div>
							  <div class="card-body">
								<ul>
									<li>{{ $college->affiliation->name }}</li>
									<li>{{ $college->level->name }}</li>
									<li>{{ $college->faculty->name }}</li>
								</ul>
								<p>
									🌍 <a href="{{ $college->website }}" target="_new">Visit Website</a>
									<br>
									📍 {{ $college->location }}
									<br>
									📨 <a href="mailto:{{ $college->email }}" target="_new">{{ $college->email }}</a>
								</p>
								<p class="card-text">{{ substr($college->description, 0, 250) }}...</p>
							  </div>
							</div>
						</div>
					@endforeach
				</div>
				<h5 class="text-center">
					<a href="/colleges">View All Colleges</a>
				</h5>
			</div>
		</div>--}}

		<div id="cover-page-school">
		</div>
		
		<div id="school-details">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<img src="{{ Storage::url($college->logo) }}" id="school-logo" />
						
						<div class="vertical-menu">
						  <a href="#the-intro" class="active">Description</a>
						  <a href="#single-sec-courses">Courses</a>
						  <a href="#single-sec-ratings">Ratings</a>
						  <a href="#single-sec-contact">Contact</a>
						  
						</div>
					</div>
					
					<div class="col-sm-9">
						<h1>{{ $college->name }}</h1>
						<div class="school-rating">
							<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
						</div>
						
						<div class="contact-school">
							<div class="row">
								<div class="col-sm-4">
									<font style="color:#fa6e43; font-size:38px; float:left; margin-right:10px; margin-top:-10px; margin-bottom:30px;">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</font> {{$college->location}}
								</div>
								
								<div class="col-sm-4">
									<font style="color:#fa6e43; font-size:38px; float:left; margin-right:10px; margin-top:-10px; margin-bottom:30px;">
										<i class="fas fa-mobile"></i>
									</font> {{$college->phone_number}}
								</div>
								
								<div class="col-sm-4">
									<font style="color:#fa6e43; font-size:38px; float:left; margin-right:10px; margin-top:-10px; margin-bottom:30px;">
										<i class="fas fa-envelope"></i>
									</font> {{$college->email}}
								</div>
							</div>
						</div>
						
						<div class="school-full-desc">
							<div id="the-intro">
								 <p>
									{{$college->description}}
								</p>
							</div>
							
							<div id="single-sec-gallery">
								<div class="single-sec-title">
									<h1>Gallery</h1>
								</div>
								
								<div class="row">
									<div class="col-sm-4">
										<img src="{{asset('img/na.jpg')}}" class="large-sec-img"/>
									</div>
									
									<div class="col-sm-4">
										<img src="{{asset('img/nb.jpg')}}" class="large-sec-img"/>
									</div>
									
									<div class="col-sm-4">
										<img src="{{asset('img/nc.jpg')}}" class="large-sec-img"/>
									</div>
									
									<div class="col-sm-4">
										<img src="{{asset('img/sa.jpg')}}" class="large-sec-img"/>
									</div>
									
									<div class="col-sm-4">
										<img src="{{asset('img/nc.jpg')}}" class="large-sec-img"/>
									</div>
									
									<div class="col-sm-4">
										<img src="{{asset('img/sa.jpg')}}" class="large-sec-img"/>
									</div>
								</div>
							</div>
							
							<div id="single-sec-video">
								<div class="single-sec-title">
									<h1>Intro Video</h1>
								</div>
								
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="900" height="506" src="https://www.youtube.com/embed/2W85Dwxx218" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div><!-- Div ends-->
							
							<div id="single-sec-courses">
								<div class="single-sec-title">
									<h1>Available Courses</h1>
								</div>
								
								<div class="row">
									<div class="col-sm-4">
										<div class="single-sec-col">
											<h2>Science +2</h2>
											<h3>Affiliation - HSEB</h3>
										</div>
									</div>
									
									<div class="col-sm-4">
										<div class="single-sec-col">
											<h2>Science +2</h2>
											<h3>Affiliation - HSEB</h3>
										</div>
									</div>
									
									<div class="col-sm-4">
										<div class="single-sec-col">
											<h2>Science +2</h2>
											<h3>Affiliation - HSEB</h3>
										</div>
									</div>
									
									<div class="col-sm-4">
										<div class="single-sec-col">
											<h2>Science +2</h2>
											<h3>Affiliation - HSEB</h3>
										</div>
									</div>
									
									<div class="col-sm-4">
										<div class="single-sec-col">
											<h2>Science +2</h2>
											<h3>Affiliation - HSEB</h3>
										</div>
									</div>
									
									<div class="col-sm-4">
										<div class="single-sec-col">
											<h2>Science +2</h2>
											<h3>Affiliation - HSEB</h3>
										</div>
									</div>
								</div>
							</div><!-- Div ends-->
							
							
							<div id="single-sec-ratings">
								<div class="single-sec-title">
									<h1>Ratings</h1>
								</div>
								
								<div class="row">
									@foreach($topics as $topic)
									 <div class="col-md-3 mt-rating">
										 <div class="circle">
											 <p class="rating-number">5</p>
										 </div>
										 <p class="rating-caption">{{$topic}}</p>
										 @if ($user && $user->college()->first() && $user->college()->first()->id === $college->id)
										 <div class="rating-box">
											 <input type="radio" name="rating['{{$topic}}']" value="1"> 1 
											 <input type="radio" name="rating['{{$topic}}']" value="2"> 2
											 <input type="radio" name="rating['{{$topic}}']" value="3"> 3
											 <input type="radio" name="rating['{{$topic}}']" value="4"> 4
											 <input type="radio" name="rating['{{$topic}}']" value="5"> 5
										 </div>
										@endif
									 </div>
									 @endforeach
								</div>
							</div><!-- Div ends-->
							
							<div id="single-sec-contact">
								<div class="single-sec-title">
									<h1>Contact Us</h1>
								</div>
								
								<div class="row">
									<div class="col-sm-5">
										<div class="contact-divs">
											<h1 class="form-sec-title">Get in Touch</h1>
											<p>
												Location: {{$college->locaation}} <br /><br />
												Phone : {{$college->phone_number}}<br />
												Email : {{$college->email}}<br />
												Website : {{$college->website}}
												
											<div class="map-responsive">
												<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14127.97698832678!2d85.328026!3d27.7174639!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1ce582426f411603!2sBATAS%20Technology%20Inc%20Pvt.%20Ltd!5e0!3m2!1sen!2snp!4v1598115517169!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
											</div>
										</div>
									</div>
									
									<div class="col-sm-7">
										<div class="contact-divs">
											<h1 class="form-sec-title">Fill the form for Call Request</h1>
												<form>
													<input type="text" placeholder="Your Full Name " />
													
													<input type="text" placeholder="E-mail Address " />
													
													<input type="text" placeholder="Phone Number" />
													
													<textarea placeholder="Your Message..."></textarea>
													
													<input type="submit" value="Send Message" id="send-msg" />
												</form>
										</div>
									</div>
									
									
								</div>
							</div><!-- Div ends-->
							
						</div>
					</div>
				</div>
			</div>
		</div>
    {{-- </div>
</div> --}}

@endsection