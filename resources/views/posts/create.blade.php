@extends('layout')
@section('content')
<h1>Add post</h1>
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="form-group">
            <label for="title">Your Title</label>
            <input  class="form-control"  name="title" id="title" type="text" required>
        </div>
        <br>
        <div class="form-group">
            <label for="content">Your content</label>
            <input class="form-control"  id="content" name="content" type="text" required>
        </div>
        <br>
        <div class="form-group">
            <label for="content">Category</label>
            <select class="form-select form-select" name="category" aria-label=".form-select-sm example">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>    
        </div>
        <br>
        
        <button  class="btn btn-block btn-primary" type="submit"> Add post</button>
    </form>
@endsection