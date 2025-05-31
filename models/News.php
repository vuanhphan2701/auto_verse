<?php

namespace models;

use Panda\Core\Models\Model;

class News extends Model
{
    protected string $table = 'news';
    protected string $primaryKey = 'id';
    protected array $fillable = [
        'id',
        'image',
        'title',
        'description',
        'url',
        'updated_at',
        'created_at',

    ];
}
