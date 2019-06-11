@extends('main')
@section('title',' |view Post')
@section('content')
@if(Session::has('success'))
<p class="alert alert-info">{{ Session::get('success') }}</p>  
@endif
<div class="row">
	<div class="col-md-8">
		<h1>{{$post->title}}</h1>
		<p class="lead">{{$post->body}}</p>
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Created At:</dt> 
				<dd>{{date('M j,Y h:ia',strtotime($post->created_at))}}</dd>
			</dl>
			<dl class="dl-horizontal">
				<dt>Last Updated:</dt>
				<dd>{{date('M j,Y h:ia',strtotime($post->updated_at))}}</dd>
			</dl> 
			<hr>
			<div class="row">
				<div class="col-sm-6">
					<a href="{{ route('Posts.edit',$post->id) }}" class="btn btn-primary btn-block">
						Edit
					</a>
				</div>
				<div class="col-sm-6">
					<a href="{{ route('Posts.destroy',$post->id) }}" class="btn btn-danger btn-block">
						Delete
					</a>
				</div>

			</div>
			
		</div>
	</div>		
	  </div>
	
</div>


@endsection