<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "OWH AMAT",
            "slug" => "judul-post-pertama",
            "author" => "Adryan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Nam nostrum odio hic qui eveniet iusto corrupti sequi neque ullam modi
            fugiat porro facere accusantium cupiditate, corporis excepturi consequuntur
            unde magnam voluptates aliquid minima. Cum amet aliquam pariatur optio
            ulla illum quae distinctio veniam non placeat quibusdam ex voluptatum
            perspiciatis nobis tempore omnis expedita quia, molestiae nihil voluptatibus
             eos voluptates id dolores."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ridho",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Nam nostrum odio hic qui eveniet iusto corrupti sequi neque ullam modi
            fugiat porro facere accusantium cupiditate, corporis excepturi consequuntur
            unde magnam voluptates aliquid minima. Cum amet aliquam pariatur optio
            ulla illum quae distinctio veniam non placeat quibusdam ex voluptatum
            perspiciatis nobis tempore omnis expedita quia, molestiae nihil voluptatibus
             eos voluptates id dolores."
        ]
        ];


        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
             return $posts->firstWhere('slug', $slug);
        }

        
}