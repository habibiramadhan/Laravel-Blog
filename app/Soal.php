<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table = 'soals';
    protected $fillable = [
        'soal',
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'jawaban_benar',
        'category_id'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_posts');
    }
}
