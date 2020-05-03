@if($errors->any())
    @foreach($errors->all() as $error)
        
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {{ $error }}
        </div>
    @endforeach
@endif

@if(session()->has('message'))
	<div class="alert  alert-dismissible " role="alert"></div>

<div class="alert alert-{{ session('type') }} alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>{{session('message')}}</strong>
</div>
@endif

