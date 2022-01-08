@extends('admin.layouts.app')

@section('content')
    <!--Page header-->
    @component('admin.layouts.page-header')
        Categories
    @endcomponent
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categories List</h3>
                </div>
                @if (session()->has('success-category'))
                    <div class="card-body">
                        @component('admin.layouts.info-flash', ['alert' => 'alert-info'])
                            {{ session('success-category') }}
                        @endcomponent
                    </div>
                @endif
                <div class="card-body">
                    @if(count($categories))
                    <div class="table-responsive">
                        <table class="table table-bordered card-table table-vcenter text-nowrap">
                            <thead>
                                <tr class="border-top">
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr class="border-bottom">
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <button type="button" class="btn btn-icon  btn-warning" data-bs-toggle="modal" data-bs-target="#smallmodal{{$category->id}}"><i class="fe fe-edit"></i></button>
                                        <button type="button" class="btn btn-icon  btn-danger" data-bs-toggle="modal" data-bs-target="#removemodal{{$category->id}}"><i class="fe fe-trash"></i></button>                          
                                    </td>
                                </tr>
                                <div class="modal fade" id="smallmodal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="smallmodal{{$category->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="smallmodal1">Category Edit : {{$category->name}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('updateCategory', ['category' => $category]) }}" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="category" class="form-label">Category Name</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required id="category"  value="{{$category->name}}" placeholder="Enter a category">
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

                                <div class="modal fade" id="removemodal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="removemodal{{$category->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="removemodal1">Delete Category : {{$category->name}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('deleteCategory', ['category' => $category]) }}" method="POST">
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
                            No category was found
                        </p>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">New Category</h3>
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
                    <form action="{{ route('newCategory') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="category" class="form-label">Category Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required id="category" placeholder="Enter a category">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 mb-0">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
@endsection