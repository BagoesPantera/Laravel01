
@extends('layout/main')

@section('title','Post')
<style>
.body{
    /* text-align: center; */
    width:100%;
}
.title{
    text-align: center;
    
}
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
    <div class="container">
                <h1 class='mt-5 title'>POST</h1>
                <br>
                <br>
                <a href="/post/create" class="btn btn-primary ">ADD DATA</a>
                <a href="/post/json" class="btn btn-warning" style="color:white">GET JSON</a>
                <br>
                <br>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
<ul class="list-group">
    @foreach($posts as $pos)             
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{$pos->title}}
    <a href="/post/{{ $pos->id }}" class="badge badge-info">Detail</a>
  </li>
   @endforeach
</ul>

    </div>
</div>