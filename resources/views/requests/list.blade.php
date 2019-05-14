@extends('layouts.app')
@section('content')


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
@if($Reqs)
<div class="container">
  <h2>List Of Requests</h2>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Requests
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
        
      @foreach($Reqs as $Req)
    <li><a href="/request/{{$Req->id}}">  {{$Req->date}}</a></li>
      
      @endforeach
    </ul>
  </div>
</div>
@endif
<a href="/photographer/{{auth()->user()->id}}/edit" class="btn btn-default">Edit</a>
<a href="/addimage"><h3>add images</h3></a>
<a href="/listimage"><h3>list images</h3></a>


@endsection