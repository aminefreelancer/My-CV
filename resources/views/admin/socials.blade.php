@extends('admin.layouts.app')

@section('content')
    <!--Page header-->
    @component('admin.layouts.page-header')
        Social Media
    @endcomponent
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Social Media List</h3>
                </div>
                @if (session()->has('success-social'))
                    <div class="card-body">
                        @component('admin.layouts.info-flash', ['alert' => 'alert-info'])
                            {{ session('success-social') }}
                        @endcomponent
                    </div>
                @endif
                <div class="card-body">
                    @if(count($socials))
                    <div class="table-responsive">
                        <table class="table table-bordered card-table table-vcenter text-nowrap">
                            <thead>
                                <tr class="border-top">
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($socials as $social)
                                <tr class="border-bottom">
                                    <td>{{ $social->name }}</td>
                                    <td>Link</td>
                                    <td>
                                        <button type="button" class="btn btn-icon  btn-warning" data-bs-toggle="modal" data-bs-target="#smallmodal{{$social->id}}"><i class="fe fe-edit"></i></button>
                                        <button type="button" class="btn btn-icon  btn-danger" data-bs-toggle="modal" data-bs-target="#removemodal{{$social->id}}"><i class="fe fe-trash"></i></button>                          
                                    </td>
                                </tr>
                                <div class="modal fade" id="smallmodal{{$social->id}}" tabindex="-1" role="dialog" aria-labelledby="smallmodal{{$social->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="smallmodal1">Social Media Edit : {{$social->name}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('updateSocial', ['social' => $social]) }}" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="social" class="form-label">Social media Name</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required id="social"  value="{{$social->name}}" placeholder="Enter a social">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="link" class="form-label">Link</label>
                                                        <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" required id="link"  value="{{$social->link}}" placeholder="Enter a link">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="removemodal{{$social->id}}" tabindex="-1" role="dialog" aria-labelledby="removemodal{{$social->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="removemodal1">Delete Social Media : {{$social->name}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('deleteSocial', ['social' => $social]) }}" method="POST">
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
                            No social media was found
                        </p>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">New Social Media</h3>
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
                    <form action="{{ route('newSocial') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="social" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required id="social" placeholder="Enter a social">

                            <label for="link" class="form-label">Link</label>
                            <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" required id="link" placeholder="Enter a link">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 mb-0">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
@endsection