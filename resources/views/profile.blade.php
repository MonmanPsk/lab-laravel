@extends('layouts.main')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-purple-50 via-white to-blue-50">
    <div class="max-w-screen-xl mx-auto px-4 py-12">
        <!-- Header Section -->
        <div class="mb-12">
            <h1 class="py-1 text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600 mb-2">Profile</h1>
            <div class="h-1 w-20 bg-gradient-to-r from-purple-600 to-blue-600 rounded-full"></div>
        </div>

        <!-- Profile Card -->
        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 overflow-hidden border border-gray-100">
            <div class="p-8 md:p-10">
                <div class="grid gap-8 md:grid-cols-3 mb-8">
                    <div class="bg-gradient-to-br from-purple-50 to-white rounded-xl p-6 border border-purple-100 hover:border-purple-300 transition-colors">
                        <div class="text-xs font-bold uppercase tracking-wider text-purple-600 mb-2">Name</div>
                        <div class="text-2xl font-bold text-gray-900">{{ $name }}</div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl p-6 border border-blue-100 hover:border-blue-300 transition-colors">
                        <div class="text-xs font-bold uppercase tracking-wider text-blue-600 mb-2">Age</div>
                        <div class="text-2xl font-bold text-gray-900">{{ $age ?? '-' }}</div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-indigo-50 to-white rounded-xl p-6 border border-indigo-100 hover:border-indigo-300 transition-colors">
                        <div class="text-xs font-bold uppercase tracking-wider text-indigo-600 mb-2">Role</div>
                        <div class="text-2xl font-bold text-gray-900">{{ $role }}</div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-4 pt-4 border-t border-gray-200">
                    <a class="inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-purple-600 to-purple-700 px-6 py-3 text-sm font-semibold text-white shadow-lg hover:shadow-xl hover:from-purple-700 hover:to-purple-800 transform hover:scale-105 transition-all duration-200"
                       href="{{ route('profile.show', ['name' => 'Kantachad', 'age' => 21, 'role' => 'Student']) }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.5 1.5H3.75A2.25 2.25 0 001.5 3.75v12.5A2.25 2.25 0 003.75 18.5h12.5a2.25 2.25 0 002.25-2.25V9.5M18.5 1.5l-8 8M18.5 1.5v5h-5"/></svg>
                        Student
                    </a>
                    <a class="inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-indigo-600 to-indigo-700 px-6 py-3 text-sm font-semibold text-white shadow-lg hover:shadow-xl hover:from-indigo-700 hover:to-indigo-800 transform hover:scale-105 transition-all duration-200"
                       href="{{ route('profile.show', ['name' => 'Saacsos', 'age' => 45, 'role' => 'Admin']) }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 1a4.5 4.5 0 100 9 4.5 4.5 0 000-9zM2 19c0-2.687 3.582-5 8-5s8 2.313 8 5v1H2v-1z"/></svg>
                        Admin
                    </a>
                    <a class="inline-flex items-center gap-2 rounded-lg border-2 border-gray-300 px-6 py-3 text-sm font-semibold text-gray-700 hover:bg-gray-50 hover:border-gray-400 transform hover:scale-105 transition-all duration-200"
                       href="{{ route('profile.show') }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 1111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 1051.196 3.101V4a1 1 0 11-2 0V2a1 1 0 011-1z" clip-rule="evenodd"/></svg>
                        Reset
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative Footer -->
        <div class="mt-12 flex justify-center gap-2">
            <div class="w-3 h-3 rounded-full bg-purple-400"></div>
            <div class="w-3 h-3 rounded-full bg-blue-400"></div>
            <div class="w-3 h-3 rounded-full bg-indigo-400"></div>
        </div>
    </div>
</div>
@endsection
