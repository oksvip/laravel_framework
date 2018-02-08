<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Venturecraft\Revisionable\RevisionableTrait;
use App\Models\Traits\ModelTrait;

class Model extends EloquentModel
{
    use SoftDeletes,RevisionableTrait,ModelTrait;

    /**
     * 添加字段修改监控和全局筛选条件
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        // 全局筛选条件
        // static::addGlobalScope('age', function(Builder $builder) {
        //     $builder->where('age', '>', 200);
        // });
    }

    /**
     * Disable the revisioning.
     *
     * @var string
     */
    protected $revisionEnabled = false;

    /**
     * Remove old revisions (works only when used with $historyLimit).
     *
     * @var int
     */
    // protected $revisionCleanup = true;

    /**
     * Stop tracking revisions after 500 changes have been made.
     *
     * @var int
     */
    // protected $historyLimit = 500;

    /**
     * Storing creations.
     *
     * @var int
     */
    // protected $revisionCreationsEnabled = true;

    /**
     * Storing history the table fields.
     *
     * @var int
     */
    // protected $keepRevisionOf = [
    //     'title'
    // ];

    /**
     * Storing fields except the table fields.
     *
     * @var int
     */
    // protected $dontKeepRevisionOf = [
    //     'category_id'
    // ];
}
