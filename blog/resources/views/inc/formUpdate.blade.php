
@section('form')

<form method="POST" action="{{ route('articles.update',$articles) }}">
    @csrf
    @method ('PATCH')
        <div class="form-group">
            <label for="article-title">Title</label>
            <input type="text" name="title" value="{{ $articles->title}}" class="form-control" id="article-title" >
        </div>
        
        
        <div class="form-group">
            <label for="article-description">Description</label>
            <textarea name="description" class="form-control" id="article-description" rows="3">{{ $articles->description}}</textarea>
        </div>
        
        <button class="btn btn-success">Update</button>
  
</form>
  

@show
