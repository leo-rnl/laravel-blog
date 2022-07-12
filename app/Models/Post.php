<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use \Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{

    public $title;

    public $slug;

    public $exerpt;

    public $date;

    public $body;

    public function __construct($title, $exerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->exerpt = $exerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        return cache()->rememberForever('posts.all', function () {
            return collect(File::files(resource_path("posts")))
                ->map(function ($file) {
                    return YamlFrontMatter::parseFile($file);
                })
                ->map(function ($document) {
                    return new Post(
                        $document->title,
                        $document->exerpt,
                        $document->date,
                        $document->body(),
                        $document->slug
                    );
                })
                ->sortByDesc('date');
        });
    }


    public static function find($slug)
    {

        return static::all()->firstWhere('slug', $slug);

    }

    public static function findOrFail($slug)
    {
        $post = static::find($slug);

        if(! $post) {
            throw new ModelNotFoundException();
        }

        return $post;
    }
}
