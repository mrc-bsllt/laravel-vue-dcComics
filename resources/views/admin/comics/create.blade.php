@extends('layouts.app')

@section('content')
    
    <div class="container">

        <form action="{{ route('admin.comics.store') }}" method="post">
    
            @csrf
            @method('POST')

            <div class="form-group">
                <label for=""></label>
                <input type="text">
            </div>


            <input type="submit" value="Save">

        </form>

    </div>

@endsection