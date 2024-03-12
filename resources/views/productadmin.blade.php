@extends('base')

@section('title', $updating ? 'Modifier un produit' : 'Ajouter un produit')

@section('content')
    <x-guest-layout>
        <form method="POST"
              action="{{ $updating ? route('product.updateInDB', $product) : route('product.createInDB') }}">
            @csrf
            {{--{{ dd($updating, old('name')) }}--}}
            {{--            old('name', ($updating ? $product->name : "" )) --}}
            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Nom')"/>
                {{--                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                              :value="old('name', $product->name)"
                              required autofocus autocomplete="name"/>
                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
            </div>

            <!-- Price -->
            <div class="mt-4">
                <x-input-label for="price" :value="__('Prix en €')"/>
                <x-text-input id="price" class="block mt-1 w-full" type="text" name="price"
                              :value="old('price', $product->price)"
                              required autofocus autocomplete="price"/>
                <x-input-error :messages="$errors->get('price')" class="mt-2"/>
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')"/>
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                              :value="old('description', $product->description)"
                              required autocomplete="description"/>
                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
            </div>

            <!-- Stock -->
            <div class="mt-4">
                <x-input-label for="stock" :value="__('Stock')"/>
                <x-text-input id="stock" class="block mt-1 w-full" type="text" name="stock"
                              :value="old('stock', $product->stock)"
                              required autocomplete="stock"/>
                <x-input-error :messages="$errors->get('stock')" class="mt-2"/>
            </div>

            {{--            @dd($categories, $product->category)--}}

            <!-- Categories -->
            <div class="mt-4 ">
                <x-input-label for="category" :value="__('Catégorie')"/>
                <select class="form-control w-full" name="category" id="category">
                    @foreach($categories as $category)
                        <option
                            {{ $product->category->id === $category->id ? "selected" : "" }} value="{{ $category['name'] }}">{{ ucfirst($category['name']) }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('categories')" class="mt-2"/>
            </div>

            @if ($updating)
                <input name="id" type="hidden" value="{{ $product->id }}">
            @endif

            <div class="flex items-center justify-center mt-4">

                <x-primary-button class="ms-4 ">
                    @if ($updating)
                        {{ __('Mettre à jour le produit') }}
                    @else
                        {{ __('Ajouter le produit') }}
                    @endif
                </x-primary-button>

            </div>

        </form>

    </x-guest-layout>
@endsection
