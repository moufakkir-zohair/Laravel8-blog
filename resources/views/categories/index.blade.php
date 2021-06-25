@extends('layout')
@section('content')
 <h1>List of categories</h1>   
 <ul class="list-group">
     
      <form   action="{{ route('categories.create') }}">
        <button class="btn btn-primary" type="submit"  > Add category </button>
      </form>

     @forelse ($categories as $category)

          <li class="list-group-item">
            {{-- <h2><a href="{{route('category.show',['post'=>$post->id])}}">{{$post->title}}</a></h2> --}}
            <p>{{$category->name}}</p>
            <em>{{$category->created_at}}</em>
            <br>

            <form style="display: inline" method="POST" action="{{ route('categories.destroy',['category'=>$category->id]) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit"> delete</button>
            </form>

            <form style="display: inline"  action="{{ route('categories.edit',['category'=>$category->id]) }}">
                <button class="btn btn-warning" type="submit"  > Edit </button>
            </form>
            
          </li>
          @empty
              <span class="badge badge-danger">Not categories</span>
     @endforelse
 </ul>
@endsection