@extends('layouts.main')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-purple-50 via-white to-pink-50">
    <div class="max-w-4xl mx-auto px-4 py-20 flex flex-col items-center justify-center">
        <h1 class="text-5xl font-bold text-center text-blue-600 mb-4">
            Welcome to Laravel Application
        </h1>
        <div class="h-1 w-40 bg-blue-600 rounded-full mb-12"></div>
        
        <div class="grid md:grid-cols-2 gap-8 w-full">
            <a href="{{ route('profile.show') }}" class="p-8 border border-gray-200 rounded-lg hover:shadow-lg transition-shadow">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Profile</h2>
                <p class="text-gray-600">View and manage user profile information</p>
            </a>
            
            <a href="{{ route('songs.genre', ['genre' => 'pop']) }}" class="p-8 border border-gray-200 rounded-lg hover:shadow-lg transition-shadow">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Songs</h2>
                <p class="text-gray-600">Browse songs by genre</p>
            </a>
            
            <a href="{{ url('contact') }}" class="p-8 border border-gray-200 rounded-lg hover:shadow-lg transition-shadow">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Contact</h2>
                <p class="text-gray-600">Get in touch with me</p>
            </a>
            
            <div class="p-8 border border-gray-200 rounded-lg bg-gray-50">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">About</h2>
                <p class="text-gray-600">A modern Laravel web application with clean design</p>
            </div>
        </div>
    </div>
</div>
@endsection
