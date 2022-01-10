@extends('admin.layouts.app')

@section('content')
    <!--Page header-->
    @component('admin.layouts.page-header')
        {{ ($experience->type) ? 'Education' : 'Work'}} Experience : {{$experience->title}}
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit experience</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('updateExperience', ['experience' => $experience]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="title" class="form-label">Title <span class="text-red">*</span></label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" required id="title" placeholder="Enter a title" value="{{$experience->title}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="location" class="form-label">Location <span class="text-red">*</span></label>
                                    <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" required id="establishement" placeholder="Enter a location" value="{{$experience->location}}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="establishement" class="form-label">Establishement <span class="text-red">*</span></label>
                                    <input type="text" class="form-control @error('establishement') is-invalid @enderror" name="establishement" required id="establishement" placeholder="Enter an establishement" value="{{$experience->establishement}}">
                                </div>
                            </div>
                            <?php 
                                $from = new DateTime($experience->from);
                                if($experience->to != 'Present') {
                                    $to = new DateTime($experience->to);
                                    $to_month = $to->format('n');
                                }
                            ?>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">From <span class="text-red">*</span></label>
                                    <div class="row g-xs">
                                        <div class="col-6">
                                            <select required name="from_month" class="form-control custom-select select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                <option value="{{$from->format('n')}}">{{$from->format('F')}}</option>
                                                <option value="">Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <select required name="from_year" class="form-control custom-select select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                <option value="{{$from->format('Y')}}">{{$from->format('Y')}}</option>
                                                <option value="">Year</option>
                                                @for ($i = date('Y'); $i >= 1970; $i--)
                                                    <option value="{{$i}}">
                                                        {{$i}}
                                                    </option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="d-flex flex-row justify-content-between">
                                    <label class="form-label">
                                        To <span class="text-red">*</span>
                                    </label>
                                    <label class="custom-switch">
                                        <input type="checkbox" name="present" class="custom-switch-input" {{($experience->to=='Present') ? 'checked' : ''}} value="1">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Present</span>
                                    </label>
                                    </div>
                                    <div class="row g-xs">
                                        <div class="col-6">
                                            <select name="to_month" class="form-control custom-select select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                @if(isset($to))
                                                    <option value="{{$to->format('n')}}">{{$to->format('F')}}</option>
                                                @endif
                                                <option value="">Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            
                                        </div>
                                        <div class="col-6">
                                            <select name="to_year" class="form-control custom-select select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                @if(isset($to))
                                                    <option value="{{$to->format('Y')}}">{{$to->format('Y')}}</option>
                                                @endif
                                                <option value="">Year</option>
                                                @for ($i = date('Y'); $i >= 1970; $i--)
                                                    <option value="{{$i}}">
                                                        {{$i}}
                                                    </option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="type">Description</label>
                                    <textarea class="content" name="description">{{$experience->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mt-5 mb-0">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                @if ($errors->any())
                    <div class="card-body">
                        @foreach ($errors->all() as $error)
                            @component('admin.layouts.info-flash', ['alert' => 'alert-danger'])
                                {{ $error }}
                            @endcomponent
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection