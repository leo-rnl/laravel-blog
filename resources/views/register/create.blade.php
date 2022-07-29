<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 p-6 rounded-xl">

            <x-pannel>

                <h1 class="text-center font-bold text-xl">Register</h1>


                <form class="mt-10" method="POST" action="/register">
                    @csrf

                    <x-form.input name="name" />
                    <x-form.input name="username" />
                    <x-form.input name="email" type="email" />
                    <x-form.input name="password" type="password" autocomplete="new-password"/>

                    <x-form.button>Register</x-form.button>
                </form>

            </x-pannel>
        </main>
    </section>

</x-layout>
