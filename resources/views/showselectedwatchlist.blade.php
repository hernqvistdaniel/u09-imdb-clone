@extends('welcome')

@section('content')
@foreach ($filmsFromWatchlist as $film)

    <div class="row justify-content-center text-center my-5">
      <div class="col-md-8 text-center">
        <div class="card card-default">
          <div class="card-header">
            <h1>{{$film->title}}</h1>
          </div>
          <div class="card-body justify-content-center">
            <a href="{{ url('selectedfilm/' .$film->movie_id. '/') }}"><img src="http://image.tmdb.org/t/p/w185/<?php echo $film->poster_path;?>"> </a>
          </div>
          <form method="POST" action="/deletemovie/{{$film->id}}">
           @method('DELETE')
           @csrf
           <button class="btn btn-danger mt-2"type="submit">Delete Movie</button>
       </form>
        </div>
      </div>
    </div>

   

@endforeach

@endsection
