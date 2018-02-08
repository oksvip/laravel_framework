<?php

namespace App\Models\Traits;

trait ModelTrait
{
    /**
     * Query order by created_at desc.
     *
     * @var $this
     */
    public function scopeOrderByCreatedAt($query, $sort = 'desc')
    {
        if (! in_array($sort, ['desc', 'asc'])) {
            $sort = 'desc';
        }

        return $query->orderBy('created_at', $sort);
    }

    /**
     * Query order by id sort.
     *
     * @var $this
     */
    public function scopeOrderById($query, $sort = 'desc')
    {
        if (! in_array($sort, ['desc', 'asc'])) {
            $sort = 'desc';
        }

        return $query->orderBy('id', $sort);
    }

    /**
     * Query order by created_at desc.
     *
     * @var $this
     */
    public function scopeOrderByCreatedAtAndId($query, $sort = 'desc')
    {
        if (! in_array($sort, ['desc', 'asc'])) {
            $sort = 'desc';
        }

        return $query->orderBy('created_at', $sort)->orderBy('id', $sort);
    }
}