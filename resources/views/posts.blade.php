@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>
@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-5">
    <h2>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h2>
    <p>
        By.
        @if ($post->user)
        <a href="#" class="text-decoration-none">{{ $post->user->name }}</a>
        @else
        Unknown User
        @endif
        in
        @if ($post->category)
        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        @else
        Uncategorized
        @endif
    </p>

    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More</a>
</article>
@endforeach
@endsection