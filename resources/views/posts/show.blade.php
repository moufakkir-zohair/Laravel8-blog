@extends('layouts/layout')
@section('content')
            <h1>Detail of post -- {{$post->title}}</h1>   
            <p>content : {{$post->content}}</p>
            <em>Added {{$post->created_at->diffForHumans()}}</em>
@endsection