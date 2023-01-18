@extends('template')

@section('content')

    <div class="container">
        <h1 class="text-center my-5">Poster un nouvel Article</h1>
        <form action="{{ route('articles.store')}}" method="post">
            @csrf
            <div class="col-12">
                <label for="title">TITRE</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Le titre de votre article">
            </div>
            <div class="col-12 mt-4">
                <label for="subtitle">SOUS-TITRE</label>
                <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Le sous-titre de votre article">
                <small class="form-text text-muted mt-2">Décrivrez le contenu de votre article</small>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="content">Contenu</label>
                    <textarea name="content" id="content" class="form-control w-100"></textarea>
                    <div class="d-flex justify-content-center mb-6">
                        <button type="submit" class="btn btn-primary mt-3">Poster l'article</button>

                    </div>

                </div>

            </div>
        </form>
    </div>
    
@endsection