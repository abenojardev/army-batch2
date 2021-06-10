<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {  

        return view('index')->with([
            'data' => [ 
                [
                    'category' => 'Top 10 in the Philippines today',
                    'videos' => Video::whereCategory('Top 10 in the Philippines today')->get()
                ],
                [
                    'category' => 'Trending Now',
                    'videos' => Video::whereCategory('Trending Now')->get()
                ],
                [
                    'category' => 'Western Movies',
                    'videos' => Video::whereCategory('Western Movies')->get()
                ],
                [
                    'category' => 'Suspenseful Movies',
                    'videos' => Video::whereCategory('Suspenseful Movies')->get()
                ],
                [
                    'category' => 'Comedies',
                    'videos' => Video::whereCategory('Comedies')->get()
                ],
                [
                    'category' => 'Sci-Fi Thrillers',
                    'videos' => Video::whereCategory('Sci-Fi Thrillers')->get()
                ],
                [
                'category' => 'Only on Netflix',
                    'videos' => Video::whereCategory('Only on Netflix')->get()
                ]
            ]
        ]);
    }
    public function watch()
    {
        return view('watch');
    }
}
