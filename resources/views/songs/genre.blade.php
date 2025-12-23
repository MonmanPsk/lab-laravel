@extends('layouts.main')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-purple-50 via-white to-pink-50">
    <div class="max-w-screen-xl mx-auto px-4 py-12">
        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="py-1 text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 mb-2">Songs: {{ strtoupper($genre) }}</h1>
            <div class="h-1 w-40 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full"></div>
        </div>

        <!-- Filter Buttons -->
        <div class="mb-8 flex flex-wrap gap-3">
            <a class="inline-flex items-center gap-2 rounded-lg border-2 border-purple-300 px-5 py-2 text-sm font-semibold text-gray-700 hover:bg-purple-50 hover:border-purple-500 transition-all duration-200 transform hover:scale-105"
               href="{{ route('songs.genre', ['genre' => $genre, 'sort' => 'popular', 'limit' => $limit]) }}">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M3.707 9.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0l5-5a1 1 0 00-1.414-1.414L9 13.586V2a1 1 0 10-2 0v11.586l-3.293-3.293z"/></svg>
                Popular
            </a>
            <a class="inline-flex items-center gap-2 rounded-lg border-2 border-purple-300 px-5 py-2 text-sm font-semibold text-gray-700 hover:bg-purple-50 hover:border-purple-500 transition-all duration-200 transform hover:scale-105"
               href="{{ route('songs.genre', ['genre' => $genre, 'sort' => 'az', 'limit' => $limit]) }}">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 6a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2zm0 6a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2z"/></svg>
                A-Z
            </a>
            <a class="inline-flex items-center gap-2 rounded-lg border-2 border-purple-300 px-5 py-2 text-sm font-semibold text-gray-700 hover:bg-purple-50 hover:border-purple-500 transition-all duration-200 transform hover:scale-105"
               href="{{ route('songs.genre', ['genre' => $genre, 'sort' => 'za', 'limit' => $limit]) }}">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M3 16a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2zm0-6a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1v-2zm0-6a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4z"/></svg>
                Z-A
            </a>
            <div class="flex gap-2 ml-auto">
                <a class="inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-pink-500 to-pink-600 px-5 py-2 text-sm font-semibold text-white shadow-lg hover:shadow-xl hover:from-pink-600 hover:to-pink-700 transition-all duration-200 transform hover:scale-105"
                   href="{{ route('songs.genre', ['genre' => $genre, 'sort' => $sort, 'limit' => 3]) }}">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 2a1 1 0 011-1h8a1 1 0 011 1v1h2a1 1 0 110 2v1a1 1 0 01-1 1H4a1 1 0 01-1-1V4H1a1 1 0 110-2h2V2z" clip-rule="evenodd"/></svg>
                    Limit 3
                </a>
                <a class="inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-purple-500 to-purple-600 px-5 py-2 text-sm font-semibold text-white shadow-lg hover:shadow-xl hover:from-purple-600 hover:to-purple-700 transition-all duration-200 transform hover:scale-105"
                   href="{{ route('songs.genre', ['genre' => $genre, 'sort' => $sort, 'limit' => 8]) }}">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 2a1 1 0 011-1h8a1 1 0 011 1v1h2a1 1 0 110 2v1a1 1 0 01-1 1H4a1 1 0 01-1-1V4H1a1 1 0 110-2h2V2z" clip-rule="evenodd"/></svg>
                    Limit 8
                </a>
            </div>
        </div>

        <!-- Info Card -->
        <div class="mb-8 bg-white rounded-xl shadow-lg border border-gray-100 p-6">
            <div class="text-sm space-y-2">
                <div class="flex items-center gap-3">
                    <span class="text-gray-600 font-medium">Path param:</span>
                    <span class="inline-block bg-purple-100 text-purple-700 px-3 py-1 rounded-full font-semibold">{{ $genre }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-gray-600 font-medium">Query params:</span>
                    <span class="inline-block bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-xs font-semibold">sort: {{ $sort }}</span>
                    <span class="inline-block bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-xs font-semibold">limit: {{ $limit }}</span>
                </div>
            </div>
        </div>

        <!-- Songs List -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            <ul class="divide-y divide-gray-200">
                @forelse ($songs as $index => $song)
                    <li class="flex items-center justify-between hover:bg-purple-50 transition-colors duration-200 px-6 py-4 group">
                        <div class="flex items-center gap-4">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-gradient-to-br from-purple-500 to-pink-500 font-semibold text-white text-sm">
                                {{ $index + 1 }}
                            </div>
                            <span class="font-semibold text-gray-900 group-hover:text-purple-600 transition-colors">{{ $song }}</span>
                        </div>
                        <span class="inline-block bg-gradient-to-r from-purple-100 to-pink-100 text-purple-700 px-4 py-1 rounded-full text-xs font-bold tracking-wide">{{ strtoupper($genre) }}</span>
                    </li>
                @empty
                    <li class="px-6 py-8 text-center">
                        <p class="text-gray-500 font-medium">No songs found for this genre.</p>
                    </li>
                @endforelse
            </ul>
        </div>

        <!-- Decorative Footer -->
        <div class="mt-12 flex justify-center gap-2">
            <div class="w-3 h-3 rounded-full bg-purple-400"></div>
            <div class="w-3 h-3 rounded-full bg-pink-400"></div>
            <div class="w-3 h-3 rounded-full bg-purple-400"></div>
        </div>
    </div>
</div>
@endsection
