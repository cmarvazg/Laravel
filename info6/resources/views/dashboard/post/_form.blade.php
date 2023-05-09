@csrf
<div class="mb-3 mt-3">
    <label for="title" class="form-label">Título</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{ old('title',$post->title)}}">
    <div id="title" class="form-text-light">Proporciona el título del post</div>
</div>
<div class="mb-3">
    <label for="url_clean" class="form-label">Url clean</label>
    <input type="text" class="form-control" id="url_clean" name="url_clean" value="{{ old('url_clean',$post->url_clean)}}">
    <div id="url_clean" class="form-text-light">Proporciona el url del post</div>
</div>
<div class="mb-3">
    <label for="content" class="form-label">Contenido</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="5">{{old('content',$post->content)}}</textarea>
    <div id="content" class="form-text-light">Proporciona el contenido del post</div>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>