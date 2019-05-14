@extends('layouts.app')
@section('content')
<div class="form-group">
    <img style="height:100px;width:100px"class="card-img-top" src="/storage/images/{{$user->cover_image}}" alt="Card image cap">

    <h1 style="display:inline">{{$user->name}}</h1>

</div>
<div class="form-group">

</div>

<div class="form-group">
    <label>  price per hour</label>
            {{$user->price}}
</div> 




<a href="/request/{{$user->id}}/edit">  request</a>
<script>
$(function () {
 
    $("#rateYo").rateYo({
      rating: 3.6
    });
   
  });
  </script>
@endsection