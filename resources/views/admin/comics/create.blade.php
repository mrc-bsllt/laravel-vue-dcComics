@extends('layouts.main-admin')

@section('content')
    
    
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.comics.store') }}" method="post" enctype="multipart/form-data">
    
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title" class="text-capitalize">title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"
                value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="price" class="text-capitalize">price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Enter price"
                value="{{old('price')}}">
            </div>
            <div class="form-group">
                <label for="body" class="text-capitalize">body</label>
                <textarea class="form-control" name="body" id="body" rows="5">{{old('body')}}</textarea>
            </div>

            <div class="form-group">
                <label for="image" class="text-capitalize">Image</label>
                <input class="form-control" type="file" name="image" id="image" accept="image/*">
            </div>
            <div class="form-group">
                <label for="image-cover" class="text-capitalize">Image-cover</label>
                <input class="form-control" type="file" name="image-cover" id="image-cover" accept="image/*">
            </div>
            <div class="form-group">
                <label for="image-hero" class="text-capitalize">Image-hero</label>
                <input class="form-control" type="file" name="image-hero" id="image-hero" accept="image/*">
            </div>

            <select name="category" id="category">
                @foreach ($categories as $category)
                    <option {{ $category->id == old('category') ? 'selected' : '' }}value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>


            <input type="submit" class="btn btn-success d-block mt-4" value="Save" >

        </form>

    </div>

@endsection