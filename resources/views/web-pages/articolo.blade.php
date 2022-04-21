@extends('layout.layout_standard')


@section('productContent')
<section class="container-Content-articolo">
  <span class="Content-jumbotron-articolo"></span>
  <div class="strip">
    <div class="container">
      <img src="{{$comics['thumb']}}" alt="">
      <h1>{{$comics['title']}}</h1>
    </div>
  </div>
</section>

@endsection

<!-- @dump($comics) -->