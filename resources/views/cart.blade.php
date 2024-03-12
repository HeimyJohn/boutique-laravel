@extends('base')

@section('title', 'Panier')

@section('content')
{{-- @dd(Session::get('products')) --}}
<div class="flex flex-col pl-5 pr-5 pt-16 pb-32 items-end md:pl-16 md:pr-16 bg-white-figma">
    @if (Session::has('products'))
        <div class="flex w-full items-center justify-between mt-10">
            <p class="text-black-figma w-2/3 text-xl">Total de votre panier : {{ $total }}€</p>
            <button class="btn btn-block bg-yellow-figma border-none ml-5 h-16 lg:text-xl lg:pl-16 lg:pr-16 w-1/3">PAIEMENT</button>
        </div>
        @foreach ($products as $key => $product)
        <span class="flex flex-col lg:flex-row w-full first-of-type:mt-20 mt-10">
            <div class="flex items-start lg:w-2/3">
                <img class="object-contain drop-shadow-white lg:mt-0 w-1/3" src=" {{ asset('image/CLAVIER.png') }}" alt="product image">
                <div class="w-2/3 ml-10">
                    <h3 class="text-2xl">{{ $product->name }}</h3>
                    <details class="lg:hidden collapse collapse-arrow">
                        <summary class="collapse-title text-xl text-purple-figma text-xl pl-0">Afficher le détail</summary>
                        <div class="collapse-content pl-0 mb-5 pr-0"> 
                            <p class="text-black-figma text-xl">{{ $product->description }}</p>
                        </div>
                    </details>
                    <p class="hidden lg:block text-black-figma text-xl lg:mt-3">{{ $product->description }}</p>
                </div>
            </div>
            <div class="mb-10 mt-5 flex items-end justify-between lg:w-1/3 lg:ml-20">
                <div class="number-input">
                    <form action="/modify-cart-session?id={{ $product->id }}" method="POST">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity text-xl font-medium ml-5 mr-5" min="0" name="quantity" value="{{ $product->quantity }}" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </form>
                </div>
                <p class="text-xl">{{ $product->price }}€ TTC</p>
            </div>
        </span>
        <span class="w-full h-px bg-gray-figma last-of-type:hidden lg:mt-10"></span>
        @endforeach
        <div class="flex w-full items-center justify-between mt-20">
            <p class="text-black-figma w-2/3 text-xl">Total de votre panier : {{ $total }}€</p>
            <button class="btn btn-block bg-yellow-figma border-none ml-5 h-16 lg:text-xl lg:pl-16 lg:pr-16 w-1/3">PAIEMENT</button>
        </div>
    @else
        <p class="h-96 w-full flex items-center justify-center text-4xl">VOTRE PANIER EST VIDE</p>
    @endif
</div>
@endsection
