@csrf
<div class="row mt-3">
    <div class="mb-3 col-xxl-4 col-xl-4 col-lg-12">
        <label for="title" class="form-label">Título</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{ old('title',$post->title)}}">
    </div>
    <div class="mb-3 col-xxl-4 col-xl-4 col-lg-6 col-md-6">
        <label for="url_clean" class="form-label">Url clean</label>
        <input type="text" class="form-control" id="url_clean" name="url_clean" value="{{ old('url_clean',$post->url_clean)}}">
    </div>
    <div class="mb-3 col-xxl-4 col-xl-4 col-lg-6 col-md-6">
        <label for="category" class="form-label">Categoría</label>
        <select class="form-select" id="category_id" name="category_id">
          <option value="">Seleccione una opción</option>
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{ $category->name }}</option>
          @endforeach
        </select>
    </div>
</div>
<div class="mb-3">
    <label for="content" class="form-label">Contenido</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="5">{{old('content',$post->content)}}</textarea>
</div>
<div class="text-center mb-3">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>