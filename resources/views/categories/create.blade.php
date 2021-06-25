@extends('layout')
@section('content')
<h1>Add category</h1>
    <form method="POST" action="{{route('categories.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input  class="form-control"  name="name" id="name" type="text" required>
        </div>
        <br>
        
        <button  class="btn btn-block btn-primary" type="submit"> Add category</button>
    </form>
@endsection