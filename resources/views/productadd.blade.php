@extends('base')

@section('title', 'Add Product')

@section('content')
    <x-guest-layout>
        <form method="POST" action="{{ route('product.store') }}">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Nom')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Price -->
            <div class="mt-4">
                <x-input-label for="price" :value="__('Prix €')" />
                <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus autocomplete="price" />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autocomplete="description" />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <!-- Stock -->
            <div class="mt-4">
                <x-input-label for="stock" :value="__('Stock')" />
                <x-text-input id="stock" class="block mt-1 w-full" type="text" name="stock" :value="old('stock')" required autocomplete="stock" />
                <x-input-error :messages="$errors->get('stock')" class="mt-2" />
            </div>

            <!-- Categories -->
            <div class="mt-4 ">
                <x-input-label for="categories" :value="__('Catégorie')" />
                <select class="form-control w-full" name="categories" id="categories">
                    @foreach($categories as $category)
                        <option value="{{ $category['name'] }}">{{ ucfirst($category['name']) }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('categories')" class="mt-2" />
            </div>


            <div class="flex items-center justify-center mt-4">

                <x-primary-button class="ms-4 ">
                    {{ __('Add Product') }}
                </x-primary-button>

            </div>

        </form>

    </x-guest-layout>
@endsection
