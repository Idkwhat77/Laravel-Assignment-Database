@extends('layouts.app')

@section('title', $blog->title)

@section('content')
    <div class="max-w-4xl bg-white rounded-xl shadow-md p-8">
        @if($blog->image)
            <img src="{{ asset('images/blog/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-64 object-cover rounded-lg mb-6">
        @endif
        
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $blog->title }}</h1>
        
        <div class="flex items-center text-gray-500 text-sm mb-6">
            <span>Published on {{ $blog->published_at->format('F d, Y') }}</span>
        </div>
        
        <div class="prose prose-lg max-w-none text-gray-700">
            {!! nl2br(e($blog->content)) !!}
        </div>
        
        <div class="mt-8 pt-6 border-t">
            <a href="{{ route('blog') }}" class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition">
                ← Back to Blog
            </a>
        </div>
    </div>
@endsection