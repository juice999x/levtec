<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <x-app-layout>
        <x-slot name="header">
            index
        </x-slot>
    <body class="antialiased">
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">編集</a>
        </div>
        <div class='content'>
            <div class='content_post'>
                <h3>本文</3>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>