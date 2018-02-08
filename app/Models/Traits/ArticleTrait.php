<?php

namespace App\Models\Traits;

use App\Models\User;

trait ArticleTrait
{
    /**
     * Model Association Relationship
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Vague Search title
     * @param  mixed $query $query
     * @param  string $title title keyword
     * @return mixed
     */
    public function scopeSearchTitle($query, $title)
    {
        if (strlen($title)) {
            return $query->where('title', 'like', '%' . $title . '%');
        }
        return $query;
    }
}