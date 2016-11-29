<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * Class Role
 *
 * @package App
 * @property string $title
 */

class Role extends Model
{
    use CrudTrait;
//    use SoftDeletes;
    protected $table='roles';
    protected $fillable = ['title'];


    /**
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        Role::observe(new \App\Observers\UserActionsObserver);
    }
}