<x-layout>


    <section class="px-6 py-8 max-w-md mx-auto">
        <h1 class="text-xl uppercase font-bold mb-10">Publish new post</h1>

        <x-pannel class="max-w-sm mx-auto">

            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Title
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded"
                           type="text"
                           name="title"
                           id="title"
                           value="{{old('title')}}"
                           required
                    >

                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Slug
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded"
                           type="text"
                           name="slug"
                           id="slug"
                           value="{{old('slug')}}"
                           required
                    >
                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="exerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Exerpt
                    </label>
                    <textarea class="border border-gray-400 p-2 w-full rounded"
                              name="exerpt"
                              id="exerpt"
                              required
                    >{{ old('exerpt') }}</textarea>
                    @error('exerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Body
                    </label>
                    <textarea class="border border-gray-400 p-2 w-full rounded"
                              name="body"
                              id="body"
                              required
                    >{{ old('body') }}</textarea>
                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Category
                    </label>

                    <select name="category_id" id="category_id">

                        @foreach(\App\Models\Category::all() as $category)

                            <option value="{{$category->id}}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{$category->name}}
                            </option>

                        @endforeach
                    </select>

                    <div class="mb-6">
                        <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            Thumbnail
                        </label>
                        <input class="border border-gray-400 p-2 w-full rounded"
                               type="file"
                               name="thumbnail"
                               id="thumbnail"
                               required
                        >
                        @error('thumbnail')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>


                    @error('category')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <x-primary-button>

                    Publish

                </x-primary-button>


            </form>

        </x-pannel>


    </section>


</x-layout>
