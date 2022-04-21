@php
$link = [
[
"text" => "Characters",
"href" => "/",
],
[
"text" => "Comics",
"href" => "#",
],
[
"text" => "Movies",
"href" => "#",
],
[
"text" => "TV",
"href" => "#",
],
[
"text" => "Games",
"href" => "#",
],
[
"text" => "collectibles",
"href" => "#",
],
[
"text" => "videos",
"href" => "#",
],
[
"text" => "fans",
"href" => "#",
],
[
"text" => "news",
"href" => "#",
],
[
"text" => "shop",
"href" => "#",
]
];
@endphp

<header>
  <div class="container-header">
    <nav class="container">
      <figure class="container-logo">
        <img src="{{asset('img/dc-logo.png')}}" alt="" />
      </figure>
      <ul class="navbar">
        @foreach($link as $value)
        <li>
          <a class="link-nav" href="{{ $value['href'] }}">
            {{ $value["text"] }}
          </a>
        </li>
        @endforeach
      </ul>
    </nav>
  </div>
</header>