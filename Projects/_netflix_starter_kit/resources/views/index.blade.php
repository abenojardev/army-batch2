@extends('templates.main')
@section('content')
  <div class="location" id="home">
    @foreach($data as $category)
      <h1 id="home">{{ $category['category'] }}</h1>
      <div class="box">

        @foreach($category['videos'] as $vid)
          <a href="/watch/{{ $vid->id }}">
            <img src="{{ URL::asset('storage/'.$vid->banner) }}" alt="">
          </a>  
        @endforeach     
      </div>
    @endforeach
  </div>
@endsection