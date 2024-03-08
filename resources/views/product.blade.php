@extends('base')

@section('title', 'Produit')

@section('content')
<div class="flex flex-col pl-5 pr-5 pt-16 pb-32 items-end md:pl-16 md:pr-16">
    <div class="lg:flex lg:mt-20">
        <div class="lg:w-6/12 lg:mr-10 mt-20 lg:mt-0">
            <img class="object-contain drop-shadow-white lg:mt-0" src=" {{ asset('image/CLAVIER.png') }}" alt="product image">
        </div>
        <div class="lg:w-6/12 flex flex-col justify-between lg:ml-10">
            <div>
            <h2 class="text-white-figma text-4xl mt-20 lg:mt-0">{{ $product->name }}</h2>
            <p class="text-white-figma text-xl mt-5">{{ $product->description }}</p>
            </div>
            <p class="text-4xl text-right text-pink-figma">{{ $product->price }}€</p>
        </div>
    </div>
    <button class="btn btn-block bg-yellow-figma border-none mt-10 lg:mt-20 h-16 lg:w-fit lg:text-xl lg:pl-16 lg:pr-16">Ajouter au panier</button>
</div>
@endsection
