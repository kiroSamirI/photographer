@extends('layouts.app')
@section('content')
<h1>add images</h1>

<form method="POST" action="{{url("/images")}}" enctype="multipart/form-data">


<input type="file" name="image"><br>

@csrf 
<input type="hidden" value="{{ csrf_token() }}">

<button type="submit" class="btn btn-primery">submit</button>
            
</form>

@endsection