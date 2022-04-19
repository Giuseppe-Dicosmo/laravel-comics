@php
$link = [
[
"text" => "Characters",
"href" => "#",
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
      <figure>
        <img src="" alt="" />
      </figure>
      <ul>
        @foreach($link as $value)
        <li>
          <a href="{{ $value['href'] }}">
            {{ $value["text"] }}
          </a>
        </li>
        @endforeach
      </ul>
    </nav>
  </div>
</header>