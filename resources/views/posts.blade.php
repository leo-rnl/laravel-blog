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
            <p>
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>{{ $post->exerpt }}</div>
        </article>
    @endforeach

</x-layout>
