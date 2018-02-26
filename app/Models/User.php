<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Traits\UserTrait;

class User extends Authenticatable
{
    use Notifiable,UserTrait;

    /**
     * The name of table.
     *
     * @var string
     */
    protected $table = 'users';

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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // 'password', 'remember_token',
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

    /**
     * Enable the revisioning.
     *
     * @var string
     */
    protected $revisionEnabled = true;

    /**
     * Storing history the table fields.
     *
     * @var int
     */
    protected $keepRevisionOf = [
        'password'
    ];
}
