<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/header', function () {

    // array per l'header
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

    return view('partials.header', [
        // in questo modo richiama l'array per l'header
        "link" => $link
    ]);
});


Route::get('/', function () {

    return view('home');
});
