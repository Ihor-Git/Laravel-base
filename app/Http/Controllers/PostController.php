<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $post = Post::where('is_published', 1)->first();
        dump($post->title);
        dd('end');
    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title of post from phpstorm',
                'content' => 'some interesting content',
                'image' => 'imageblabla.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'another title of post from phpstorm',
                'content' => 'another some interesting content',
                'image' => 'another imageblabla.jpg',
                'likes' => 50,
                'is_published' => 1,
            ],
        ];

        //способ создания объекта вручную
        Post::create([
            'title' => 'another title of post from phpstorm',
            'content' => 'another some interesting content',
            'image' => 'another imageblabla.jpg',
            'likes' => 50,
            'is_published' => 1,
        ]);

        dd('created');

        //способ создания объекта с пом. цикла
        foreach ($postsArr as $item) {
            dd($item);//пошагово дампить помогает проверять, то ли делает код, что мы хотим
            Post::create($item);
        }
        dd('created');

        //способ создания объекта когда отлич. ключи в табл. и нужно указ. конкретно
        foreach ($postsArr as $item) {
            Post::create([
                'title' => $item['title'],
                'content' => $item['content'],
                'image' => $item['image'],
                'likes' => $item['likes'],
                'is_publisher' => $item['is_publisher'],
            ]);
        }
        dd('created');

    }
}
