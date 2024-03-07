@extends('base')
@section('title', "Catalogue des produits")
@section('content')


    <div class="bg-black text-white">
        <h1 class="text-5xl text-center border-b-4">CATALOGUE</h1>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach($products as $product)
                    <div class="group relative">
                        <div
                            class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-black lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img
                                src={{ asset('image/CLAVIER.png') }}
                                alt="Le clavier de l'enfer."
                                class="drop-shadow-white h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="">
                            <div>
                                <h3 class="text-2xl">
                                    <a href="product/{{ $product->id }}">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $product->name }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm">{{ $product->description }}</p>
                            </div>
                        </div>
                        <p class="text font-medium text-end">{{ $product->price }}€</p>
                    </div>
                @endforeach

                <!-- More products... -->
            </div>
        </div>
    </div>

        <div>
            {{ $products->links() }}
        </div>

@endsection
