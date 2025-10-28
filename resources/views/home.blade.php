@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
        @foreach ($cakes as $cake)
            <div class="bg-white shadow-md rounded-xl overflow-hidden hover:scale-105 transition-transform duration-200">
                <img src="{{ asset('images/cake/' . $cake['image']) }}"
                     alt="{{ $cake['name'] }}"
                     class="w-full h-48 object-cover">
                <div class="p-3 text-center">
                    <h2 class="text-lg font-semibold text-gray-800">{{ $cake['name'] }}</h2>
                    <p class="text-md font-semibold text-gray-800">Rp {{ number_format($cake['price'], 2) }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection