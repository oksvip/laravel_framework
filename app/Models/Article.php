<?php

namespace App\Models;
use App\Traits\ArticleTrait;

class Article extends Model
{
    use ArticleTrait;

    /**
     * The name of table.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The primary key of table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'is_free',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The time format of table's created_at/updated_at/deleted_at.
     *
     * @var string
     */
    // protected $dateFormat = 'U';

    /**
     * The deleted sign of table's deleted_at.
     *
     * @var array
     */
    protected $dates = ['delete_at'];
}
