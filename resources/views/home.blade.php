@extends('layouts.app')
@section('content')
@include('includes.header1')
<div id="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="col-sm-6">
                    <h1>Find the best Counseling for bachelor/masters</h1>
                    <a href="#" class="read-more-white"><i class="fas fa-flask"></i> Information Technology</a>
                    <a href="#" class="read-more-white"><i class="fas fa-users"></i> Hospitality Management</a>
                    <a href="#" class="read-more-white"><i class="fas fa-utensils"></i> Business Studies</a>
                    <a href="#" class="read-more-white"><i class="fas fa-chart-line"></i>Public Health</a>
                </div>
                
                <div class="col-sm-offset-2 col-sm-4">
                    <img src="{{ asset('img/girl.png') }}" class="img-responsive" />
                </div>
            </div>
        </div>
      </div>
    </div>
</div>


<div id="content-div">
    <img src="{{ asset('img/white-top.png') }}" class="img-responsive" />
    <div id="video-intro">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                    <div class="col-sm-12">
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane fade in active">
                                <form method="get" action="{{route('search')}}">
                                <div class="search-multi-bar white-multi-bar">
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
                                        <button class="org-search-go-list" type="submit"><i class="fas fa-search"></i> Go</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                         
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="courses">
        <div class="container">
            <div class="row">
                <h1>Featured Coruses</h1>
                
                <div class="col-sm-4"  data-aos="fade-down" data-offset="300">
                    <a href="#">
                        <img src="{{ asset('img/web.jpg')}}" />
                        <h2>Web Designing - Basic</h2>
                        <h3>Tony Stark</h3>
                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    </a>
                </div>
                
                
                <div class="col-sm-4"  data-aos="fade-up" data-offset="300">
                    <a href="#">
                        <img src="{{ asset('img/bibek.jpg')}}" />
                        <h2>How to be a Leader</h2>
                        <h3>Bibek Bindra</h3>
                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    </a>
                </div>
                
                
                <div class="col-sm-4"  data-aos="fade-down" data-offset="300">
                    <a href="#">
                        <img src="{{ asset('img/cook.jpg')}}" />
                        <h2>Making Cusine Dishes</h2>
                        <h3>Trish Shreshta</h3>
                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                    </a>
                </div>
                
                <div class="col-sm-12 text-center">
                    <a href="#" target="_blank" class="read-full">View All Clases</a>
                </div>
            </div>
        </div>
    </div>
    <div id="blog">
        <div class="container">
            <div class="row">
                <h1>Latest Blog</h1>
                
                <div class="col-sm-4" data-aos="fade-right" data-offset="300">
                    <a href="{{route('blog')}}">
                        <img src="{{ asset('img/sa.jpg')}}" />
                        <h2>A day in a life of a Science Student</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros emaita.</p>
                    </a>
                    
                    <div class="author-details">
                        <h3>Rachana Shrestha</h3>
                        <h4>Mega College</h4>
                    </div>
                </div>
                
                <div class="col-sm-4" data-aos="fade-up" data-offset="300">
                    <a href="{{route('blog')}}">
                        <img src="{{ asset('img/sb.webp') }}" />
                        <h2>Why I chose Texas college ?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros emaita.</p>
                    </a>
                    
                    <div class="author-details">
                        <h3>Manita Rajbhandari</h3>
                        <h4>Texas College</h4>
                    </div>
                </div>
                
                <div class="col-sm-4" data-aos="fade-left" data-offset="300">
                    <a href="{{route('blog')}}">
                        <img src="{{ asset('img/sd.jpg')}}" />
                        <h2>Bsc. CSIT - Why it's the future</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros emaita.</p>
                    </a>
                    
                    <div class="author-details">
                        <h3>Srijana Pandey</h3>
                        <h4>New Summit College</h4>
                    </div>
                </div>
                
                <div class="col-sm-12 text-center">
                    <a href="#" class="read-full">Read All Articles</a>
                </div>
            </div>
        </div>
    </div>
    
    
    <img src="{{ asset('img/gray-top.png')}}" class="img-responsive" />
    <div class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="news-title">News & Updates</h1>
                    <div class="news-single" data-aos="fade-up" data-offset="300">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="#" class="news-link">
                                <img src="{{ asset('img/na.jpg')}}" />
                            </div>
                            
                            <div class="col-sm-8">
                                <h2>Classes to run after Dashain</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros emaita.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="news-single" data-aos="fade-up" data-offset="300">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="#" class="news-link">
                                <img src="{{ asset('img/nb.jpg')}}" />
                            </div>
                            
                            <div class="col-sm-8">
                                <h2>Students advised to maintain Social Distance</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros emaita.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="news-single"  data-aos="fade-up" data-offset="300">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="#" class="news-link">
                                <img src="{{ asset('img/nc.jpg')}}" />
                            </div>
                            
                            <div class="col-sm-8">
                                <h2>Extra efforts made in Science Lab</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros emaita.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <h1 class="news-title">Events</h1>
                    <div class="news-single" data-aos="fade-up" data-offset="300">
                        <div class="row">
                            <div class="col-sm-4" >
                                <a href="#" class="news-link">
                                <img src="{{ asset('img/ea.jpg')}}" />
                            </div>
                            
                            <div class="col-sm-8">
                                <h2>Teacher of the Year Announced</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros emaita.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="news-single" data-aos="fade-up" data-offset="300">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="#" class="news-link">
                                <img src="{{ asset('img/ec.jpg')}}" />
                            </div>
                            
                            <div class="col-sm-8">
                                <h2>Online Classes are promoted by Government</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros emaita.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="news-single" data-aos="fade-up" data-offset="300">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="#" class="news-link">
                                <img src="{{ asset('img/eb.jpg')}}" />
                            </div>
                            
                            <div class="col-sm-8">
                                <h2>Medical students protest for thier safety in classes</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros emaita.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('img/gray-bot.png')}}" class="img-responsive" />
    
    
    <img src="{{ asset('img/gray-top.png')}}" class="img-responsive" />
    <div class="bg-grey" style="padding-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="teacher-sign">Not a Student ?</h1>
                    <p class="teacher-para">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac dui rutrum, tincidunt mauris bibendum, faucibus massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p>
                    <div class="text-center">
                        <a href="#" class="purple-link"  data-aos="fade-up" data-offset="300">Formal Academic Institutions</a>
                        <a href="#" class="orange-link"  data-aos="fade-left" data-offset="300">Education Service Providers</a>
                    </div>
                </div>
            </div>
        </div>
@endsection