{{-- @extends('layout')

@section('content')
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foobar' : '' }}">
            <h1><a href="/posts/{{ $post->slug }}"> {{ $post->title }}</a></h1>
            <div> {{ $post->exerpt }} </div>
        </article>
    @endforeach
@endsection --}}



<x-layout>

    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foobar' : '' }}">
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <a href="{{ $post->category->slug }}">{{ $post->category->name }}</a>
            <div>{{ $post->exerpt }}</div>
        </article>
    @endforeach

</x-layout>
