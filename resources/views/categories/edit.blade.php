@extends('layouts/layout')
@section('content')
<h1>Edit category</h1>
    <form method="POST" action="{{route('categories.update',['category'=>$category->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">name</label>
            <input class="form-control" name="name" id="name" type="text"  value="{{$category->name}}" required>
        </div>
        <br>
        <button class="btn btn-block btn-warning" type="submit"> Update category</button>
    </form>
@endsection