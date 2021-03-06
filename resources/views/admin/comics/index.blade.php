@extends('layouts.main-admin')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
              {{session('success')}}
            </div>
        @endif
     
      <a href="{{ route('admin.comics.create') }}" class="btn btn-lg btn-primary mt-4">New comic</a>

      <table class="table table-striped table-bordered mt-4">

        <thead>
          <tr>
              <th>id</th>
              <th>title</th>
              <th>price</th>
              <th>image</th>
              <th>created_at</th>
              <th>updated_at</th>
              <th colspan="2"></th>
          </tr>
        </thead>

        <tbody>
          @foreach ($comics as $comic)
             <tr>
                <td>{{ $comic->id }}</td>
                <td><a href="{{route('admin.comics.show', $comic->id)}}">{{ $comic->title }}</a></td>
                <td>{{ $comic->price }}</td>
                <td>
                  @if(explode("/",$comic->image)[0] == 'https:')
                    <img src="{{ $comic->image }}" alt="{{$comic->title}}">
                  @else
                    <img src="{{asset('storage/'.$comic->image)}}" alt="">
                  @endif
                </td>
                <td>{{ $comic->created_at }}</td>
                <td>{{ $comic->updated_at }}</td>
                <td><a class="btn btn-secondary" href="{{ route('admin.comics.edit', $comic->id)}}">EDIT</a></td>
                <td>
                  <form action="{{ route('admin.comics.destroy', $comic->id)}}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">DELETE</button>
                  </form>
                </td>
             </tr>
          @endforeach
        </tbody>

      </table>

    </div>
@endsection
