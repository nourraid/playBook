<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function  books(){
        return $this->hasMany(Book::class);
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($category) {
            foreach ($category->books as $book) {
                $book->delete();
            }
        });
    }

    use HasFactory;
}
