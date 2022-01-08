@extends('admin.layouts.app')

@section('content')
    <!--Page header-->
    @component('admin.layouts.page-header')
        Edit Skill : {{$skill->name}}
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit skill</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('updateSkill', ['skill' => $skill]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="skill" class="form-label">Skill Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required value='{{$skill->name}}' id="skill" placeholder="Enter a skill">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="form-label">Category <span class="text-red">*</span></label>
                                    <select class="form-control custom-select select2 @error('category_id') is-invalid @enderror" name="category_id">
                                        <option value="">--Select--</option>
                                        @foreach ($categories as $category)
                                            <option @if($category->id == $skill->category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
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