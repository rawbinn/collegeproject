@extends('layouts.app')
@section('content')
@include('includes.header2')
<div id="content">
    <div class="container">
        <div class="row">
            <div class="search-multi-bar">
                <div class="col-sm-12">
                    <div class="options-kpadhne">
                        <a href="#" class="active">Colleges</a>
                    </div>
                </div>
                <form method="get" action="{{route('search')}}">
                    <div class="col-sm-2">
                        <select name="faculty" id="faculty">
                            <option value="0">Select Faculty</option>
                            @foreach($faculties as $faculty)
                            <option {{ $request->get('faculty') == $faculty->id ? 'selected' : '' }} value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="col-sm-3">
                        <select name="affiliation" id="affiliation">
                            <option value="0">Select Affilication</option>
                            @foreach($affiliations as $affiliation)
                            <option {{ $request->get('affiliation') == $affiliation->id ? 'selected' : '' }} value="{{ $affiliation->id }}">{{ $affiliation->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="col-sm-3">
                        <select name="level" id="level">
                            <option value="0">Select Level</option>
                            @foreach($levels as $level)
                            <option {{ $request->get('level') == $level->id ? 'selected' : '' }} value="{{ $level->id }}">{{ $level->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="col-sm-3">
                        <select name="location" id="location">
                            <option value="0">Select Location</option>
                            @foreach($locations as $location)
                            <option {{ $request->get('location') == $location ? 'selected' : '' }} value="{{ $location }}">{{ $location }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="col-sm-1">
                        <button class="search-go-list" type="submit"><i class="fas fa-search"></i> Go</button>
                    </div>
                </form>
            </div>
            <div class="search-filter text-right">
                <form method="get" action="{{route('search')}}">
                    <input type="hidden" name="faculty" value="{{Request::get('faculty')}}"">
                    <input type="hidden" name="affiliation" value="{{Request::get('affiliation')}}"">
                    <input type="hidden" name="level" value="{{Request::get('level')}}"">
                    <input type="hidden" name="location" value="{{Request::get('location')}}"">
                    
                    <select name="filter" class="form-control" style="width: 150px; display: inline-block;">
	    				<option value="Overall" {{Request::get('filter') == 'Overall' ? 'selected' : ''}}>Overall</option>
	    				<option value="Placement" {{Request::get('filter') == 'Placement' ? 'selected' : ''}}>Placement</option>
	    				<option value="Pass" {{Request::get('filter') == 'Pass' ? 'selected' : ''}}>Pass Percentage</option>
	    				<option value="Budget" {{Request::get('filter') == 'Budget' ? 'selected' : ''}}>Budget</option>
	    				<option value="Rating" {{Request::get('filter') == 'Rating' ? 'selected' : ''}}>Rating</option>
                    </select>
                    <button type="submit"> Filter</button>
                </form>
            </div>
            <div class="col-sm-12">
                <div class="row" style="margin-top:-15px;">
                    @if(!$resultColleges->isEmpty())
                    @foreach($resultColleges as $college)
                    <div class="col-sm-6">
                        <div class="product-item">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="{{ Storage::url($college->logo) }}" />
                                </div>
                                <div class="col-sm-9">
                                    <h1><a href="{{route('college', $college->id)}}">{{ $college->name }}</a></h1>
                                    <div class="contact-det-school">
                                        <i class="fas fa-mobile"></i>{{$college->phone_number}}<br />
                                        <i class="fas fa-map-marker"></i> {{ $college->location }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <ul class="courses-table">
                                    <li>
                                        <a href="#"><b>Courses</b></a>
                                        <a href="#"><b>Level</b></a>
                                        <a href="#"><b>Affiliation</b></a>
                                    </li>
                                    <li>
                                        <a href="#">{{ $college->faculty->name }}</a>
                                        <a href="#">{{ $college->level->name }}</a>
                                        <a href="#">{{ $college->affiliation->name }}</a>
                                    </li>
                                </ul>
                                    
                            </div>
                            
                           
                            
                            <div class="row college-last-links">
                                <div class="col-sm-12"><a href="{{ $college->website }}">Visit Website</a></div>
                            </div>
                        </div>
                    </div><!-- End One College -->
                    @endforeach
                    @else
                        <p class="text-center">Colleges not found...</p>
                    @endif
                    
                    
                    <div class="col-sm-12 pag-nav">
                        <nav aria-label="Page navigation example">
                          {{ $resultColleges->links()}}
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection