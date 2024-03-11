@extends('base')

@section('title', 'Panier')

@section('content')
<div class="flex flex-col pl-5 pr-5 pt-16 pb-32 items-end md:pl-16 md:pr-16 bg-white-figma">
    <div class="flex w-full items-center justify-between mt-10">
        <p class="text-black-figma w-2/3 text-xl">Total de votre panier : {{ 'XXX.XX' }}€</p>
        <button class="btn btn-block bg-yellow-figma border-none ml-5 h-16 lg:text-xl lg:pl-16 lg:pr-16 w-1/3">PAIEMENT</button>
    </div>
    @for ($i = 0; $i < 3; $i++)
    <span class="flex flex-col lg:flex-row w-full first-of-type:mt-20 mt-10">
        <div class="flex items-start lg:w-2/3">
            <img class="object-contain drop-shadow-white lg:mt-0 w-1/3" src=" {{ asset('image/CLAVIER.png') }}" alt="product image">
            <div class="w-2/3 ml-10">
                <h3 class="text-2xl">{{ 'TITLE' }}</h3>
                <details class="lg:hidden collapse collapse-arrow">
                    <summary class="collapse-title text-xl text-purple-figma text-xl pl-0">Afficher le détail</summary>
                    <div class="collapse-content pl-0 mb-5 pr-0"> 
                        <p class="text-black-figma text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id ullamcorper ante. Nam ut dui nulla. Cras id mollis risus. Cras posuere nibh libero, eu volutpat arcu porttitor quis. Proin posuere tempus augue. Suspendisse mollis turpis non est scelerisque posuere. Fusce non leo magna. Morbi non molestie lorem. Cras id.</p>
                    </div>
                </details>
                <p class="hidden lg:block text-black-figma text-xl lg:mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id ullamcorper ante. Nam ut dui nulla. Cras id mollis risus. Cras posuere nibh libero, eu volutpat arcu porttitor quis. Proin posuere tempus augue. Suspendisse mollis turpis non est scelerisque posuere. Fusce non leo magna. Morbi non molestie lorem. Cras id.</p>
            </div>
        </div>
        <div class="mb-10 mt-5 flex items-end justify-between lg:w-1/3 lg:ml-20">
            <div class="number-input">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                <input class="quantity text-xl font-medium ml-5 mr-5" min="0" name="quantity" value="{{ '' }}" type="number">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
            </div>
            <p class="text-xl">{{ '' }}€ TTC</p>
        </div>
    </span>
    <span class="w-full h-px bg-gray-figma last-of-type:hidden lg:mt-10"></span>
    @endfor
    <div class="flex w-full items-center justify-between mt-20">
        <p class="text-black-figma w-2/3 text-xl">Total de votre panier : {{ 'XXX.XX' }}€</p>
        <button class="btn btn-block bg-yellow-figma border-none ml-5 h-16 lg:text-xl lg:pl-16 lg:pr-16 w-1/3">PAIEMENT</button>
    </div>
</div>
@endsection
