
@extends('layout/main')

@section('title','Detail User')


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
    <div class="container">
                <h1 class='mt-5'>DETAIL USER</h1>
                <br>
<div class="card" style="width: 30rem;">
  <div class="card-body">
    <h5 class="card-title">Username:    {{$users->name}}</h5>
    <p class="card-text mb-2 text-muted">Email:    {{$users->email}}</p>
    <p class="card-text mb-2 text-muted">Password:  {{$users->password}}</p>

    <a href="{{$users->id}}/edit" class="btn btn-primary btn-sm">EDIT</a>

    <form action="{{$users->id}}" method="post" class=" d-inline">
    @method('delete')
    @csrf
        <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
    </form>
    <br>
    <br>
    <br>
    <a href="/Details" class="card-link" style="font-size:13px">Kembali</a>
  </div>
</div>

    </div>
</div>