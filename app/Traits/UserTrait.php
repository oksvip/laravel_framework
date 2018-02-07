<?php

namespace App\Traits;

use App\Models\Article;

trait UserTrait
{
    /**
     * Model Association Relationship
     *
     * @return mixed
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    /**
     * Vague Search name
     * @param  mixed $query $query
     * @param  string $name name keyword
     * @return mixed
     */
    public function scopeSearchName($query, $name)
    {
        if (strlen($name)) {
            return $query->where('name', 'like', '%' . $name . '%');
        }
        return $query;
    }
}