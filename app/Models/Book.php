<?php

namespace App\Models;

use App\Models\Author;
use App\Models\BookAuthor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'publish_year'];

    public function author()
    {
        return $this->hasManyThrough(
            Author::class,
            BookAuthor::class,
            'book_id', //bookauthor_id
            'id', //book_id
            'id', //author_id
            'author_id' //bookauthor_id
        );
    }
}
