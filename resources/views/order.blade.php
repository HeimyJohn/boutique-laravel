@extends('base')

@section('title', 'commande')

@section('content')
    <div class="flex flex-col justify-center w-full pt-16 pb-32 pl-16 pr-16 text-yellow-figma">
        <div class="flex justify-center pt-20 pb-16">
            <h1 class="text-3xl text-center w-96 pb-4 border-b-4 text-inherit">
                RÉCAPITULATIF DE VOTRE COMMANDE
            </h1>
        </div>
        <div class="flex justify-center">

            <table class="table-auto border-collapse border border-slate-400">
                <thead>
                <tr>
                    <th class="p-16 border border-slate-300">Nom</th>
                    <th class="border border-slate-300">Qty</th>
                    <th class="border border-slate-300">Prix unit.</th>
                    <th class="border border-slate-300">TVA</th>
                    <th class="border border-slate-300">Prix total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="border border-slate-300 pt-32 text">{{$product['name']}} </td>
                        <td class="border border-slate-300 pt-32 text">{{$product['quantity']}} </td>
                        <td class="border border-slate-300 pt-32 text>">{{$product['unitPrice']}}€ HT</td>
                        <td class="border border-slate-300 pt-32 text>">{{$product['vat']}}%</td>
                        <td class="border border-slate-300 pt-32 text>">{{$product['totalPrice']}}€ TTC</td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>
    </div>
@endsection
