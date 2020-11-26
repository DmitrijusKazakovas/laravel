@extends('master')

@section('title', 'Homepage')

@section('content')



Post a message: 

<br>

<form action="/create" method="POST">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">
    {{ csrf_field() }}
    <button type="submit">Submit</button>
</form>

Recent Messages: 

<br>

<ul>
    @foreach($messages as $message)
        <li><strong>{{$message->title}}</strong> 
        <br>
         {{$message->content}}
         <br>
         {{$message->created_at->diffForHumans()}}
         <br>
          <a href="/message/{{ $message->id }}">View</a>
         </li>
    @endforeach
</ul>

@endsection