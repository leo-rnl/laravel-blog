@auth

    <x-pannel>

        <form method="POST" action="/posts/{{ $post->slug  }}/comments">
            @csrf

            <header class="flex space-x-4 items-center">
                <img class="rounded-xl" src="https://i.pravatar.cc/60?u={{ auth()->id() }}"
                     alt="avatar">

                <h2>
                    Want to participate ?
                </h2>

            </header>
            <div class="mt-6">
                                <textarea
                                    name="body"
                                    id="body"
                                    class="w-full text-sm focus:outline-none focus:ring"
                                    cols="30" rows="6"
                                    placeholder="Quick, thing of something to say!" required></textarea>

                @error('body')
                <span class="text-xs text-red-500">{{$message}}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-10 border-t border-gray-200 pt-6 ">
                <x-form.button>Post</x-form.button>
            </div>

        </form>
    </x-pannel>
@else

    <p class="font-semibold">
        <a href="/login" class="hover:underline">Log in</a> or <a href="/register" class="hover:underline">register</a>
        to leave a comment!
    </p>

@endauth
