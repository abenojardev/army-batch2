<pre>Route::get('/', function () { 
    $data = DB::table('song')
                ->join('album','album.id','song.album_id')
                ->join('genre','genre.id','song.genre_id')
                ->join('artist','artist.id','song.artist_id')
                ->select(
                    'title',
                    'album_name',
                    'genre_name',
                    'artist_name'
                )
                ->get();
    
    return response()->json($data, 200, [], JSON_PRETTY_PRINT);
});
</pre>