@if($post->exists)
<form action="{{route('admin.posts.update', $post)}}" method="POST">
  @method('PUT')
@else
<form action="{{route('admin.posts.store')}}" method="POST">
@endif
  @csrf 
    <div class="row mb-3">
      <label for="title" class="col-sm-2 col-form-label">Titolo</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}">
      </div>
    </div>
    <div class="row mb-3 align-items-center">
      <label for="image" class="col-sm-2 col-form-label">Url Img</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="image" name="image" value="{{old('image', $post->image)}}">
      </div>
      <div class="preview col-sm-2">
        <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930" alt="placeholder">
      </div>
    </div>
    <div class="row mb-3">
      <label for="content" class="col-sm-2 col-form-label">Testo del post</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="content" name="content" rows="3">{{old('content', $post->content)}}</textarea>
      </div>
    </div>
    <div class="d-flex justify-content-between mb-3">
      <a class="btn btn-secondary" href="{{route('admin.posts.index')}}">
        <i class="fa-solid fa-rotate-left mr-2"></i>Torna indietro
      </a>
      <button class="btn btn-success" type="submit">Salva</button>
    </div>
</form>