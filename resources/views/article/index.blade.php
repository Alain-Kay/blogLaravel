@extends('template')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Articles</h1>
        <div class="d-flex justify-content-center">
            <a href="{{ route('articles.create')}}" class="btn btn-info my-5"><i class="fas fa-plus mx-1"></i>Ajouter un nouvel Article</a>
        </div>
        <table class="table table-hover">
            <thead>
              <tr class="table-active">
                <th scope="col">ID</th>
                <th scope="col">TITRE</th>
                <th scope="col">CEER LE</th>
                <th scope="col">ACTION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->id}}</th>
                        <td>{{ $article->title}}</td>
                        <td>{{ $article->dateFormat()}}</td>
                        <td class="d-flex">
                            <a href="#" class="btn btn-warning mx-3">Editer</a>
                            <form action="{{ route('articles.delete', $article->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
              
            </tbody>    
        </table>
        <div class="d-flex justify-content-center mt-5">
            {{$articles->links('vendor.pagination.custom')}}
        </div> 
    </div>
@endsection