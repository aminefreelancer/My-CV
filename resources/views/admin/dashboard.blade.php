@extends('admin.layouts.app')

@section('content')
    <!--Page header-->
    @component('admin.layouts.page-header')
        Dashboard
    @endcomponent
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Personal Information</h3>
                </div>
                @if ($errors->any())
                <div class="card-body">
                    @foreach ($errors->all() as $error)
                        @component('admin.layouts.info-flash', ['alert' => 'alert-danger'])
                            {{ $error }}
                        @endcomponent
                    @endforeach
                </div>
                @elseif (session()->has('success'))
                    <div class="card-body">
                        @component('admin.layouts.info-flash', ['alert' => 'alert-info'])
                            {{ session('success') }}
                        @endcomponent
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ route('updateDashboard') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Name <span class="text-red">*</span></label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Mohamed Amine AKACHA" required value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Title <span class="text-red">*</span></label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Full stack" required value="{{$user->title}}">
                                    
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Second Title <span class="text-red">*</span></label>
                                    <input type="text" name="secondary_title" class="form-control @error('secondary_title') is-invalid @enderror" placeholder="Software Engineer" required value="{{$user->secondary_title}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Email <span class="text-red">*</span></label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="me@aminehck.work" required value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Phone <span class="text-red"></span></label>
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="+213 558 940 134" value="{{$user->phone}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Address <span class="text-red">*</span></label>
                                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Home Address" required value="{{$user->address}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">City <span class="text-red">*</span></label>
                                    <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="Mahelma" required value="{{$user->city}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Province <span class="text-red">*</span></label>
                                    <input type="text" name="province" class="form-control @error('province') is-invalid @enderror" placeholder="Algiers" required value="{{$user->province}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Zip Code <span class="text-red"></span></label>
                                    <input type="number" name="zipcode" class="form-control @error('zipcode') is-invalid @enderror" placeholder="16093" value="{{$user->zipcode}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <select name="country" class="form-control custom-select select2" required>
                                        <option value="">--Select--</option>
                                        <option @if($user->country =='Algeria') selected @endif value="Algeria">Algeria</option>
                                        <option @if($user->country =='Canada') selected @endif  value="Canada">Canada</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <label class="form-label">Summary <span class="text-red">*</span></label>
                                <textarea class="form-control mb-4 @error('summary') is-invalid @enderror" name="summary" placeholder="A talented full-stack web developer with passion for..." rows="6">{{$user->summary}}</textarea>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Photo <span class="text-red">*</span></label>
                                <input type="file" class="dropify" data-default-file="img/main_photo.jpg" data-height="160">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                        
                    </form>
                </div>
            
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection