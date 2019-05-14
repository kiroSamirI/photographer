@extends('layouts.app')
@section('content')
<h1>list images</h1>

<div class="container">
    <div class="dropdown">
         
        @foreach($images as $image)
        <img class="card-img-top" src="/storage/images/{{$image->image}}" alt="Card image cap"style="width:30%;height:30%">
        
        @endforeach
    </div>
  <a href="/photographer_home"><h3>return</h3></a>
  </div>
@endsection