@extends('admin.layouts.app')

@section('content')
    <!--Page header-->
    @component('admin.layouts.page-header')
        {{ ucfirst($type)}} Experiences
    @endcomponent
    <!--End Page header-->


    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex flex-row justify-content-between" >
                    <h3 class="card-title">{{ ucfirst($type)}} Experiences List</h3>

                    <a href="{{ route('createExperience', ['type' => $type]) }}" class="btn btn-primary"><i class="fe fe-plus me-2"></i> New {{ ucfirst($type)}} Experience</a>
                </div>
                @if (session()->has('success'))
                    <div class="card-body">
                        @component('admin.layouts.info-flash', ['alert' => 'alert-info'])
                            {{ session('success') }}
                        @endcomponent
                    </div>
                @endif
                <div class="card-body">
                    @if(count($experiences))
                    <div class="table-responsive">
                        <table class="table table-bordered card-table table-vcenter text-nowrap">
                            <thead>
                                <tr class="border-top">
                                    <th>Title</th>
                                    <th>Establishement</th>
                                    <th>Location</th>
                                    <th>Duration</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($experiences as $experience)
                                <tr class="border-bottom">
                                    <td>{{ $experience->title }}</td>
                                    <td> {{$experience->establishement}} </td>
                                    <td>{{$experience->location}}</td>
                                    <td>{{$experience->from}} / {{$experience->to}}</td>
                                    <td>
                                        <a href="{{ route('editExperience' , ['experience' => $experience])}}" class="btn btn-icon  btn-warning"><i class="fe fe-edit"></i></a>
                                        <button type="button" class="btn btn-icon  btn-danger" data-bs-toggle="modal" data-bs-target="#removemodal{{$experience->id}}"><i class="fe fe-trash"></i></button>                          
                                    </td>
                                </tr>

                                <div class="modal fade" id="removemodal{{$experience->id}}" tabindex="-1" role="dialog" aria-labelledby="removemodal{{$experience->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="removemodal1">Delete Experience : {{$experience->title}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('deleteExperience', ['experience' => $experience]) }}" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="type" value="{{$type}}">
                                                    <p>Please confirm the action !</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else 
                        <p>
                            No experience was found
                        </p>
                    @endif
                </div>
            </div>
        </div>
        
        
    </div>

@endsection