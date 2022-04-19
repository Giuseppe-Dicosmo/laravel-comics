@extends('layout.layout_standard')

@section('mainContent')
<section class="container-Content">
    <span class="Content-jumbotron"></span>
    <div class="container">
        <button class="button-series">Content series</button>
        <div class="ciao">
            <ul>
                <fumettiShop v-for="(anteprima, i) in fumetti" :key="i" :src="anteprima.thumb" :title="anteprima.series" />
            </ul>
        </div>
        <button class="button-more">load more</button>
    </div>
</section>
@endsection