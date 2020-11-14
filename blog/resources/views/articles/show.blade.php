@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-body">
<h3>{{$articles -> title}}</h3>
<p>{{$articles -> description}}</p>
</div>

</div>
<br><br><hr><br>
<div>
@foreach($articles->comments as $comment)
<article>
{{$comment->comment}}
<form method="POST" action="/comment/{{$comment->id}}">
      @csrf
@method('DELETE')
      <button type="submit" class="btn btn-danger" ><i class="fa fa-trash"></i></button></td>
      </form>
      
      <a href="/comment/{{$comment->id}}/edit " class="btn btn-primary" ><i class="fa fa-pencil"></i></a>
</article>
@endforeach
</div>
<form method="POST" action="/articles/{{$articles->id}}">
      @csrf
     
        <textarea class="form-control" name="comment"></textarea>
        <br>
      <button type="submit" class="btn btn-success" >Comment</button>
      
      </form>

@endsection
