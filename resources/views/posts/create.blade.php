<x-layout>


    <section class="px-6 py-8 max-w-md mx-auto">
        <h1 class="text-xl uppercase font-bold mb-10">Publish new post</h1>

        <x-pannel class="max-w-sm mx-auto">

            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <x-form.input name="title"/>

                <x-form.input name="slug"/>

                <x-form.input name="thumbnail" type="file"/>

                <x-form.textarea name="exerpt" />

                <x-form.textarea name="body" />


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

        </x-pannel>


    </section>


</x-layout>
