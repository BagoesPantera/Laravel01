
@extends('layout/main')

@section('title','Form Tambah Post')
<style>
.tablehead{
    background-color:#1b0f31;
    color:white;
}
</style>


<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><b>LARAVEL</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link " href="{{url('/')}}">Home</a>
                <a class="nav-item nav-link" href="{{url('/Details')}}">User</a>
                <a class="nav-item nav-link active" href="{{url('/post')}}">Post</a>
            </div>
        </div>
    </div>    
    </nav>
<div class="body">
    <div class="container col-8">
                <h1 class='mt-5'>TAMBAH POST</h1>
                <br>
<form method="post" action="/post" enctype="multipart/form-data">
    @csrf
  <div class="form-group ">
    <label for="title">title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Input your title" name="title" value="{{ old('title') }}">
    @error('title')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="image">image</label>
    <input type="file" class="form-control @error('title') is-invalid @enderror" id="image" name="image">
    </div>
  <div class="form-group">
    <label for="content">content</label>
    <textarea class="form-control  @error('content') is-invalid @enderror"  rows="6" id="content" name="content" placeholder="Input your content" value="{{ old('content') }}" ></textarea>
    @error('content')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <br>
  <button type="submit" class="btn btn-primary">TAMBAH POST</button>
</form>
    </div>
</div>