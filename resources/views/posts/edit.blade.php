@extends('layout')
@section('content')
<h1>Edit post</h1>
    <form method="POST" action="{{route('posts.update',['post'=>$post->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Your Title</label>
            <input class="form-control" name="title" id="title" type="text"  value="{{$post->title}}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="content">Your content</label>
            <input class="form-control" id="content" name="content" type="text" value="{{$post->content}}" required>
        </div>
        <br>
        <div class="form-group">
            <label for="content">Category</label>
            <select class="form-select form-select" name="category" aria-label=".form-select-sm example">
                @foreach ($categories as $category)
                    @if ($category->id == $post->category_id)
                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    @else
                        <option value="{{$category->id}}" >{{$category->name}}</option>
                    @endif
                @endforeach
              </select>    
        </div>
        <br>
        <button class="btn btn-block btn-warning" type="submit"> Update post</button>
    </form>
@endsection