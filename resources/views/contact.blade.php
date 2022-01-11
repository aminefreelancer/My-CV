@extends('layouts.app')

@section('content')

    <div class="page-scroll">
        <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">
            <!-- Header -->
            @include('layouts.header')

            <div id="main" class="site-main">
                <div id="main-content" class="single-page-content">
                    <div id="primary" class="content-area">
        
                        <div class="page-title">
                            <h1>Contact</h1>
                            <div class="page-subtitle">
                                <h4> Get in Touch</h4>
                            </div>
                        </div>
        
                        <div id="content" class="page-content site-content single-post" role="main">
                            <div class="row">
                                <div class=" col-xs-12 col-sm-4 ">
                                    <div class="block-title">
                                        <h2>Feel free to contact me</h2>
                                    </div>
                                    <div id="info_list_1" class="info-list-w-icon">
                
                                        <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <i class="linecons linecons-phone"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h4>{{$user->phone}}</h4>
                                        </div>
                                        </div>
                
                                        <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <i class="linecons linecons-location"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h4>{{$user->address}}, {{$user->province}}. {{$user->country}}</h4>
                                        </div>
                                        </div>
                                        
                                        <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <i class="linecons linecons-mail"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h4><a href="#" class="__cf_email__">{{$user->email}}</a></h4>
                                        </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class=" col-xs-12 col-sm-8 ">
                                    @if(session()->has('success')) 
                                        <div class="alert alert-success" role="alert">
                                            <p class="text-center">{{ session('success') }}</p>
                                        </div>
                                    @else 
                                        <div class="block-title">
                                            <h2>How Can I Help You?</h2>
                                        </div>
                                        <form class="contact-form" action="{{route('send')}}" method="post">
                                            @csrf
                                            <div class="controls two-columns">
                                                <div class="fields clearfix">
                                                    <div class="left-column">
                                                        <div class="form-group form-group-with-icon">
                                                            <input  type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" required value="{{ old('name') }}">
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <div class="form-control-border"></div>
                                                        </div>
                        
                                                        <div class="form-group form-group-with-icon">
                                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" required="required"  value="{{ old('email') }}">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <div class="form-control-border"></div>
                                                        </div>
                            
                                                        <div class="form-group form-group-with-icon">
                                                            <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" required="required" value="{{ old('subject') }}">
                                                            @error('subject')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <div class="form-control-border"></div>
                                                        </div>
                                                    </div>
                                                    <div class="right-column">
                                                        <div class="form-group form-group-with-icon">
                                                            <textarea name="message" class="form-control @error('message') is-invalid @enderror" placeholder="Message" rows="6" required="required">{{ old('message') }}</textarea>
                                                            @error('message')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <div class="form-control-border"></div>
                                                        </div>
                                                    </div>
                                                </div>
                    
                                                <input type="submit" class="button btn-send" value="Send message">
                                            </div>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        
        </div>
    </div>
  
@endsection