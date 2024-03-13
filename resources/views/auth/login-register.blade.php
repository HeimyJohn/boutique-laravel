<x-guest-layout class="container flex border-4 ">
    <div class="flex flex-col">
        <div class="pb-3">
            <h1 class="text-3xl">Log in</h1>
        </div>
        @include('auth.login')
    </div>

    <div class="flex flex-col">
        <div class="pb-3">
            <h1 class="text-3xl">Register</h1>
        </div>
        @include('auth.register')
    </div>
</x-guest-layout>
