@extends('main')
@section('title','| Create')
 @section('content')

  
  <div class="row">
  	<div class="col-md-8 col-md-offset-2">
  		<h1 class="text-center">
  		Creat New Post</h1>
  		<form action="{{ route('Posts.store') }}" method="post">
  			 @csrf

  			<label> Title :</label>

    <input type="text" name="title" class="form-control">
<label> Post Body :</label>

   <textarea class="form-control" name="body"></textarea>
<br>
   <button type="submit" class="btn btn-primary my-1 form-control">Create New Post</button>

</form>


  	</div>
  	
  </div>	
@endsection
  	