@extends('templates.player')
@section('content')
  <video id="my_video_1" class="video-js vjs-default-skin" data-setup ='{}'
      controls preload="none" poster='http://content.bitsontherun.com/thumbs/3XnJSIm4-480.jpg'
      data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
    <source src="//content.bitsontherun.com/videos/bkaovAYt-52qL9xLP.mp4" type="video/mp4"> 
  </video> 
@endsection