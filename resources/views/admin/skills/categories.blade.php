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
                                        <button type="button" class="btn btn-icon  btn-warning"><i class="fe fe-edit"></i></button>
                                        <button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i></button>                          
                                    </td>
                                </tr>
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