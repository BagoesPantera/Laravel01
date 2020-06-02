
@extends('layout/main')

@section('title','Form Edit Data')
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
                <a class="nav-item nav-link active" href="{{url('/Details')}}">User</a>
                <a class="nav-item nav-link" href="{{url('/post')}}">Post</a>
            </div>
        </div>
    </div>    
    </nav>
<div class="body">
    <div class="container col-8">
                <h1 class='mt-5'>EDIT DATA USER</h1>
<form method="post" action="/Details/{{$users->id}}">
@method('put')
    @csrf
  <div class="form-group ">
    <label for="name">name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Input your Username" name="name" value="{{ $users->name }}">
    @error('name')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Input your Email" name="email" value="{{ $users->email }}">
    @error('email')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="password">password</label>
    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Input your Password" name="password" value="{{ $users->password }}">
    @error('password')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <br>
  <button type="submit" class="btn btn-primary">EDIT</button>
</form>
    </div>
</div>