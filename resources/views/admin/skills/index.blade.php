@extends('admin.layouts.app')

@section('content')
    <!--Page header-->
    @component('admin.layouts.page-header')
        Skills
    @endcomponent
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex flex-row justify-content-between" >
                    <h3 class="card-title">Skills List</h3>

                    <a href="{{ route('createSkill') }}" class="btn btn-primary"><i class="fe fe-plus me-2"></i> New Skill</a>
                </div>
                @if (session()->has('success-skill'))
                    <div class="card-body">
                        @component('admin.layouts.info-flash', ['alert' => 'alert-info'])
                            {{ session('success-skill') }}
                        @endcomponent
                    </div>
                @endif
                <div class="card-body">
                    @if(count($skills))
                    <div class="table-responsive">
                        <table class="table table-bordered card-table table-vcenter text-nowrap">
                            <thead>
                                <tr class="border-top">
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($skills as $skill)
                                <tr class="border-bottom">
                                    <td>{{ $skill->name }}</td>
                                    <td> {{$skill->category->name}} </td>
                                    <td>
                                        <a href="{{ route('editSkill' , ['skill' => $skill])}}" class="btn btn-icon  btn-warning"><i class="fe fe-edit"></i></a>
                                        <button type="button" class="btn btn-icon  btn-danger" data-bs-toggle="modal" data-bs-target="#removemodal{{$skill->id}}"><i class="fe fe-trash"></i></button>                          
                                    </td>
                                </tr>

                                <div class="modal fade" id="removemodal{{$skill->id}}" tabindex="-1" role="dialog" aria-labelledby="removemodal{{$skill->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="removemodal1">Delete Skill : {{$skill->name}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('deleteSkill', ['skill' => $skill]) }}" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('DELETE')
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
                            No skill was found
                        </p>
                    @endif
                </div>
            </div>
        </div>
        
        
    </div>

    
@endsection