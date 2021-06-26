@extends('layouts/layout')
@section('content')
 <h1>List of categories</h1>   
 <ul class="list-group">
     
      <form   action="{{ route('categories.create') }}">
        <button class="btn btn-primary" type="submit"  > Add category </button>
      </form>
      <br>

     @forelse ($categories as $category)
          <li class="list-group-item">
            <p>category name : {{$category->name}}</p>
            <em>date : {{$category->created_at}}</em>
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
          <br>
          @empty
              <span class="badge badge-danger">Not categories</span>
     @endforelse
 </ul>
@endsection