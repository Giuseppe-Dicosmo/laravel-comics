@extends('layout.layout_standard')

@section('mainContent')
<section class="container-Content">
    <span class="Content-jumbotron"></span>
    <div class="container">
        <button class="button-series">Content series</button>
        <div class="container-fumetti">
            <ul class="lista-fumetti">
                @foreach($comics as $indice => $value)
                <li class="fumetti">
                    <a class="link-home" href="{{ route('articolo.show', ['id' => $indice]) }}">
                        <figure class="img-fumetti">
                            <img src="{{ $value['thumb'] }}" alt="" />
                        </figure>
                        <h5>{{ $value['title'] }}</h5>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <button class="button-more">load more</button>
    </div>
</section>
@endsection