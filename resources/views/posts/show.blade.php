@extends('layouts/master')


@section('page-header')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>{{$post->title}}</h1>
              <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
              <span class="meta">Posted by
                <a href="#">Start Bootstrap</a>
                on {{$post->created_at->toFormattedDateString()}}</span>
            </div>
          </div>
        </div>
      </div>
    </header>
@endsection


@section('content')
<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>{{$post->body}}</p>
      </div>
    </div>
  </div>
</article>

<hr>

@endsection