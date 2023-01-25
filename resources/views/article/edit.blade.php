@extends('template')

@section('content')

    <div class="container">
        <h1 class="text-center my-5">Editer un Article</h1>
        <form action="{{ route('articles.update', $article->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="col-12">
                <label for="title">TITRE</label>
                <input type="text" name="title" id="title" class="form-control @error ('title') is-invalid @enderror"  placeholder="Le titre de votre article" value="{{ $article->title}}" >
                @error('title')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mt-4">
                <label for="subtitle">SOUS-TITRE</label>
                <input type="text" name="subtitle" id="subtitle" class="form-control  @error ('subtitle') is-invalid @enderror"  placeholder="Le sous-titre de votre article" value="{{ $article->subtitle}}">
                @error('subtitle')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                @enderror
                <small class="form-text text-muted mt-2">Décrivrez le contenu de votre article</small>
            </div>
            <div class="col-12">
                <div class="form-group mt-4">
                    <label for="content">Contenu</label>
                    <textarea name="content" id="tinycme-editor" class="form-control w-100 @error ('content') is-invalid @enderror">
                        {{ $article->content}}
                    </textarea>
                    @error('content')
                         <div class="alert alert-danger m-2">{{ $message }}</div>
                    @enderror

                    <script>
                        tinymce.init({
                          selector: '#tinycme-editor'
                        });
                    </script>

                    <div class="d-flex justify-content-center mb-6">
                        <button type="submit" class="btn btn-primary mt-3">Modifier l'article</button>

                    </div>

                </div>

            </div>
        </form>
    </div>
    
@endsection