@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">🎂 New Cake Designs!</h2>
            <p class="text-gray-700">Check out our latest character cake creations. Each one is unique and perfect for your next party!</p>
            <span class="text-xs text-gray-400">Posted Oct 2025</span>
        </div>
        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">🧁 Behind the Scenes</h2>
            <p class="text-gray-700">See how we bake and decorate our cakes. From mixing batter to adding the final touches!</p>
            <span class="text-xs text-gray-400">Posted Sep 2025</span>
        </div>
    </div>
@endsection