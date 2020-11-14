
@section('form')
<form method="POST" action="{{ route('articles.store') }}">
    @csrf
        <div class="form-group">
            <label for="article-title">Title</label>
            <input type="text" name="title" class="form-control" id="article-title" >
        </div>
        
        
        <div class="form-group">
            <label for="article-description">Description</label>
            <textarea name="description" class="form-control" id="article-description" rows="3"></textarea>
        </div>
        
        <button class="btn btn-success">Create</button>
  
</form>
@show