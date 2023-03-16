<div>
    
    <div class="row">
        <div class="col-10">
            <div class="articles row justify-content-center">
                @if ($articles->count() > 0)
                    @foreach($articles as $article)
                        <div class="col-md-6">
                            <div class="card my-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{$article->title}}</h5>
                                    <span class="badge bg-primary">{{ $article->category->label}}</span>
                                    <p class="card-text">{{$article->subtitle}}</p>
                                    <a href="{{ route('article', $article->slug) }}" class="btn btn-primary">
                                        <i class="fas fa-arrow-right"></i>
                                        Lire la suite
                                    </a>
                                </div>
                                
        
                            </div>
                        </div>
        
                    @endforeach
                        
                @else
                    <span class="text-center">Aucun article n'est disponible</span>
                    
                @endif
                  
        
               </div>

        </div>
        <div class="col-2 pt-3">
            @foreach ($categories as $category)
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="form-check-input" type="checkbox" id="{{ $category->id}}" wire:model="activeFilters.{{ $category->id}}"/>
                        <label for="{{ $category->id}}" class="custom-control-input">
                            <i class="fa-solid fa-{{ $category->icon}}"></i>
                            {{ $category->label}}
                        </label>
                    </div>

                </div>

                
            @endforeach
        </div>

   </div>
</div>
