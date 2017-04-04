   @if(count($errors) > 0)
   <div class="clearfix"></div>
   <div class="alert alert-danger">
   	<ul>
   		@foreach($errors->all() as $error)
   		<li>{!! $error; !!}</li>
   		@endforeach
   	</ul>
   </div>
   @endif
   @if(session('flash_message'))
      <div class="alert alert-success">
         {{ session('flash_message') }}
      </div>
   @endif