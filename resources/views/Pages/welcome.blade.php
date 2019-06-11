
@extends('main')
@section('content')
@section('title','| Home')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
  <h1 class="display-4">Welcome to my blog</h1>
  <p class="lead">Thank you for visiting my website,.</p>
  <hr class="my-4">
  <p> this is my test website built with laravel,please read the papular pos.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a>
</div>
      
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="post">
        <h3>
          Post title
        </h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos impedit nobis possimus, dolorum vero sed expedita earum cumque consequatur magni exercitationem perferendis animi veniam, voluptate voluptatibus quas recusandae ea. Error!
        </p>
        <a href="" class="btn-primary">
          Read more  
        </a>
        <hr>
      </div>

        <div class="post">
        <h3>
          Post title
        </h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos impedit nobis possimus, dolorum vero sed expedita earum cumque consequatur magni exercitationem perferendis animi veniam, voluptate voluptatibus quas recusandae ea. Error!
        </p>
        <a href="" class="btn-primary">
          Read more  
        </a>
        <hr>
      </div>  <div class="post">
        <h3>
          Post title
        </h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos impedit nobis possimus, dolorum vero sed expedita earum cumque consequatur magni exercitationem perferendis animi veniam, voluptate voluptatibus quas recusandae ea. Error!
        </p>
        <a href="" class="btn-primary">
          Read more  
        </a>
        <hr>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1">
     <div class="sidebar">
       <h3>
         Sidebar
       </h3>

     </div>
    </div> 
  </div>
  
</div><!--end of container -->
    <!-- Optional JavaScript -->
  @endsection