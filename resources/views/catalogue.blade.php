@extends('base')
@section('title', "Catalogue des produits")
@section('content')

    <div class="bg-black text-white">
        <h1 class="pt-16 text-5xl text-center border-b-4">
            Catalogue des produits
        </h1>
        <h2 class="text-center text-2xl">
            @if($search_terms!=null)
                Résultats de la recherche pour "{{ $search_terms }}"
            @endif
        </h2>


        <div class="mx-auto max-w-2xl px-4 py-1 pb-40 sm:px-6  lg:max-w-7xl lg:px-8">
            @if($products->isEmpty())
                <p class="text-2xl text-center">Aucun produit ne correspond à votre recherche.</p>
            @else

                <div class="mt-6">
                    {{ $products->links() }}
                </div>

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
                            <a href="/product/{{ $product->id }}">
                                <div >
                                    <div>
                                        <div>
                                            <h3 class="text-2xl">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                {{ $product->name }}
                                            </h3>
                                            <p class="mt-1 text-sm">{{ $product->description }}</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-initial justify-between items-center">
                                        <button class="mt-5 border-none btn bg-yellow-figma">En savoir plus</button>
                                        <p class="mt-2 text font-medium text-end">{{ $product->price }}€</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    <!-- More products... -->
                </div>
            @endif
        </div>
    </div>

    <div class="mt-6 pb-20">
                    {{ $products->links() }}
    </div>

@endsection
