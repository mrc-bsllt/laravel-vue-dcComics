@extends('layouts.app')

@section('content')
    
    <div class="container">

        <form action="{{ route('admin.comics.update'),$comic->id }}" method="post">
    
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for=""></label>
                <input type="text">
            </div>


            <input type="submit" value="Update">

        </form>

    </div>

@endsection