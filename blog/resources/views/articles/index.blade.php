@extends('layouts.app')


@section('title', 'Articles')



@section('content')
<a href="{{ route('articles.create') }}" class="btn btn-success mb-4">Create Article</a>
<table class="table table-striped ">
  <thead>
 
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col"></th>
      <th scope="col">Description</th>
      <th scope="col"></th>
    </tr>
  
  </thead>
  <tbody>
  @foreach($articles as $article)
    <tr>
      <th scope="row">{{$article->id}}</th>
      <td>{{$article->title}}</td>
      <td> </td>
      <td>{{$article->description}}</td>
      <td class="crudBtn">
      <a href="{{ route('articles.show',$article) }} " class="btn btn-success" ><i class="fa fa-eye" ></i></a>
      <a href="{{ route('articles.edit',$article) }} " class="btn btn-primary" ><i class="fa fa-pencil"></i></a>
      <form method="POST" action="{{ route('articles.destroy',$article)}}">
      @csrf
        @method('DELETE')
      <button type="submit" class="btn btn-danger" ><i class="fa fa-trash"></i></button></td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection