@extends('layouts.app')
@section('content')
<h1>edit</h1>

<?php $id = auth()->user()->id  ?>
        <form method="POST" action="{{ url("/photographer/$id") }}" enctype="multipart/form-data">
            <div class ="form-control"> 
            name <input name="name" type="text" value= "{{$photographer->name}}" ><br>
            </div>
            email <input type="email" name="email" value= "{{$photographer->email}}" ><br>
            password <input type="password" name="password"><br>
            {{ csrf_field() }}
            confirm password <input type="password" name="password_confirmation"><br>
            phone_number <input name="phone_number" type="text" value= "{{$photographer->phone_number}}" ><br>
            price <input name="price" type="number" value= "{{$photographer->price}}" ><br>

            image <input type="file" name="cover_image">
            <input type="hidden" value="PUT" name="_method"><br>
            submit <button type="submit">submit</button>
            
        </form>
        @endsection