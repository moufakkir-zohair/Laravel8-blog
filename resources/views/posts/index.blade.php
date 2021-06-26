@extends('layouts/layout')
@section('content')
@if (Auth::user())
<h1>List of posts</h1>   
<ul class="list-group">
   <form   action="{{ route('posts.create') }}">
       <button class="btn btn-primary" type="submit"  > Add post </button>
   </form>
   <br>
   @foreach ($posts as $post)
         <li class="list-group-item">
            
           <h2 > <a href="{{route('posts.show',['post'=>$post->id])}}">{{$post->title}}</a> </h2>
           <p>category name : {{$post->category->name}}</p>
           <p>content : {{$post->content}}</p>
           <em>date : {{$post->created_at}}</em>
           <br>


           @if ($post->user_id==Auth::id())
               <form style="display: inline" method="POST" action="{{ route('posts.destroy',['post'=>$post->id]) }}">
               @csrf
               @method('DELETE')
               <button class="btn btn-danger" type="submit"> delete</button>
               </form>
               <form style="display: inline"  action="{{ route('posts.edit',['post'=>$post->id]) }}">
                    <button class="btn btn-warning" type="submit"  > Edit </button>
               </form>
            @endif
           
           
           
         </li>
         <br>
    @endforeach
</ul>
 @else
    <div class="container">
        <div class="p-3 mb-2 bg-danger text-white">you are offline</div>
    </div>
 @endif

@endsection