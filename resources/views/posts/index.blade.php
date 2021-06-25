@extends('layout')
@section('content')
 <h1>List of posts</h1>   
 <ul class="list-group">
    <form   action="{{ route('posts.create') }}">
        <button class="btn btn-primary" type="submit"  > Add post </button>
    </form>
    <br>
    @forelse ($posts as $post)
          <li class="list-group-item">
             
            <h2 > <a href="{{route('posts.show',['post'=>$post->id])}}">{{$post->title}}</a> </h2>
            <p>{{$post->category->name}}</p>
            <p>{{$post->content}}</p>
            <em>{{$post->created_at}}</em>
            <br>
            <form style="display: inline" method="POST" action="{{ route('posts.destroy',['post'=>$post->id]) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit"> delete</button>
            </form>
            <form style="display: inline"  action="{{ route('posts.edit',['post'=>$post->id]) }}">
                <button class="btn btn-warning" type="submit"  > Edit </button>
            </form>
            
          </li>
          <br>
          @empty
              <span class="badge badge-danger">Not posts</span>
     @endforelse
 </ul>
@endsection