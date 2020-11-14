@extends('layouts.app')

@section('content')



<form method="POST" action="/update/{{$comment->id}}">
    @csrf
    @method ('PATCH')
       
        
        
        <div class="form-group">
            
            <textarea name="comment" class="form-control" id="comment" rows="3">{{ $comment->comment}}</textarea>
        </div>
        
        <button class="btn btn-success">Update</button>
  
</form>

@endsection('content')
