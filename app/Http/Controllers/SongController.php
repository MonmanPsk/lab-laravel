<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function genre(string $genre, Request $request)
    {
        $sort = $request->query('sort', 'popular');
        $limit = (int) $request->query('limit', 5);

        $songsByGenre = [
            'pop' => ['Blinding Lights', 'Levitating', 'As It Was', 'Watermelon Sugar', 'Anti-Hero', 'Flowers'],
            'rock' => ['Bohemian Rhapsody', 'Hotel California', 'Smells Like Teen Spirit', 'Back In Black', 'Sweet Child O Mine'],
            'jazz' => ['So What', 'Take Five', 'My Favorite Things', 'All Blues', 'Freddie Freeloader'],
            'lofi' => ['late night study', 'coffee break', 'rainy window', 'quiet room', 'slow morning'],
        ];

        $songs = $songsByGenre[strtolower($genre)] ?? ['Unknown genre'];

        if ($sort === 'az') {
            sort($songs);
        } elseif ($sort === 'za') {
            rsort($songs);
        }

        $songs = array_slice($songs, 0, max(1, $limit));

        return view('songs.genre', [
            'genre' => $genre,
            'sort' => $sort,
            'limit' => $limit,
            'songs' => $songs,
        ]);
    }
}
