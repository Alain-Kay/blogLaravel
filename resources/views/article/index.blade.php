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
                            <button type="button" class="btn btn-danger" onclick="document.getElementById('model-open-{{$article->id}}').style.display='block'">Supprimer</button>
                            <form action="{{ route('articles.delete', $article->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <div class="modal" id="model-open-{{$article->id}}">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">La suppression d'un élément est difinitive</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="document.getElementById('model-open').style.display='none'" aria-label="Close">
                                            <span aria-hidden="true"></span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Etes-vous sur de vouloir supprimer cet élément ? </p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary">Oui</button>
                                          <button type="button" class="btn btn-secondary" onclick="document.getElementById('model-open-{{$article->id}}').style.display='none'" data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                
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