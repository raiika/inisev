<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/generate', function (Request $request) {
    $post = Post::factory()->make();
    $post->domain = $request->input('domain');
    $post->save();
});
