@extends('template')
@section('content')


   <div class="jumbotron">
       <h3 class="display-3 text-center">Articles</h3>
      @livewire('filters', ['categories' => $categories])

       {{-- <div class="d-flex justify-content-center mt-5">
           {{$articles->links('vendor.pagination.custom')}}
       </div> --}}
   </div>

@endsection
