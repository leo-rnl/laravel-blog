<x-layout>

    <x-setting :heading="'Edit Post :' . $post->title">


        <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)"/>

            <x-form.input name="slug" :value="old('slug', $post->slug)"/>

            <div class="flex mt-6">

                <div class="flex-1">
                     <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)"/>
                </div>

                <img src="{{asset('storage/' . $post->thumbnail )}}" class="rounded-xl ml-4" width="100" alt="">
            </div>

            <x-form.textarea name="exerpt" :value="old('exerpt', $post->exerpt)">{{old('body', $post->exerpt)}}</x-form.textarea>

            <x-form.textarea name="body" :value="old('body', $post->body)">{{old('body', $post->body)}}</x-form.textarea>


            <x-form.field>

                <x-form.label name="category" />

                <select name="category_id" id="category_id">

                    @foreach(\App\Models\Category::all() as $category)

                        <option value="{{$category->id}}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{$category->name}}
                        </option>

                    @endforeach
                </select>

                <x-form.error name="category" />

            </x-form.field>



            <x-form.button>

                Publish

            </x-form.button>


        </form>


    </x-setting>



</x-layout>
