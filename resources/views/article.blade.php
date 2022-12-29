@extends('template')

@section('content')
    <div class="jumbotron">
        <h3 class="display-3 text-center">{{ $article->title }}</h3>
        <div class="d-flex justify-content-center my-5">
            <a class="btn btn-primary" href="{{ route('articles') }}">
                <i class="fas fa-arrow-left"></i>
                Retour
            </a>
        </div>
        <h5 class="text-center my-3 pt-3">{{ $article->subtitle }}</h5>
    </div>
    <div class="container">
        <p class="text-center">
            {{ $article->content }}
        </p>
    </div>
@endsection
