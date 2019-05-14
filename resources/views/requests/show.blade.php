@extends('layouts.app')
@section('content')
<div><label>photosession date:{{$req->date}}</label></div>
<div><label>photosession category:      {{$req->category}}</label></div>
<div><label>photosession place:     {{$req->place}}</label></div>
<div><label>client contact number:     {{$req->contact_number}}</label></div>
<a href="/photographer_home"><button>Accept</button></a>


<form method="POST" action="{{ url("/request/$req->id") }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" value="PUT" name="_method">
 <button type="submit">Decline</button>
    
</form>
@endsection