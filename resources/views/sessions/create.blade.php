<x-layout>

        <section class="px-6 py-8">
            <main class="max-w-lg mx-auto mt-10 p-6 rounded-xl">

                <x-pannel>

                <h1 class="text-center font-bold text-xl">Log In</h1>


                <form class="mt-10" method="POST" action="/login">
                    @csrf
                   <x-form.input name="email" type="email" autocomplete="username"/>
                   <x-form.input name="password" type="password" autocomplete="current-password"/>

                    <x-form.button>Log In</x-form.button>
                </form>

                </x-pannel>
            </main>
        </section>

</x-layout>
