@extends('main')
@section('title','| Contact')
@section('content')

<div class="container">
    <h1> Contact me</h1>
    <hr>
    <div class="form-group">
        <label name="email">Email:></label>
        <input id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label name="Subject">Subject:</label>
        <input name ="subject" id="subject" class="form-control">
    </div>
    <div class="form-group">
        <label name="Subject">Message:</label>
        <textarea name ="message" id="message" class="form-control">Type your message here </textarea>
    </div>
      <input type="submit" value="submit" class="btn btn-success"> </input>
</div>
@endsection
 