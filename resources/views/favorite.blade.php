@extends('layouts.app')

@section('content')
@include('includes.header2')
	<div class="row">
		<div class="offset-2 col-8">
			<h3 class="text-center">Your Favorites ({{$favorites->count()}})</h5>
			<hr>
			@foreach($favorites as $favorite)
				<?php $college = $favorite->college; ?>
				<div class="row pt-2 mb-2 pb-2" style="background: #EEE">
					<div class="col-1">
    					<img src="{{ Storage::url($college->logo) }}" width="100%;">
    				</div>
    				<div class="col-8">
    					<h5><a target="_new" href="/college/{{$college->id}}">{{$college->name}}</a></h5>
    					@auth
				  			<a class="btn btn-success" href="/favorite/{{$college->id}}">❤️ Remove From Favorite</a>
				  			<br><br>
					  	@endauth
					    	<span style="display: inline-block; font-size: 12px; background-color: #CCC; padding:5px; border-radius: 5%">{{ $college->affiliation->name }}</span>
					    	<span style="display: inline-block; font-size: 12px; background-color: #CCC; padding:5px; border-radius: 5%">{{ $college->level->name }}</span>
					    	<span style="display: inline-block; font-size: 12px; background-color: #CCC; padding:5px; border-radius: 5%">{{ $college->faculty->name }}</span>
    					<p>
    						<br>
					    	🌍 <a href="{{ $college->website }}" target="_new">Visit Website</a>
					    	<br>
							📍 {{ $college->location }}
							<br>
							📨 <a href="mailto:{{ $college->email }}" target="_new">{{ $college->email }}</a>
					    </p>
    				</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
