@if ($message = Session::get('success'))
    
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert"><i class="fa-solid fa-xmark"></i></button>
        <strong>{{ $message }}</strong>
    </div>
    
@endif