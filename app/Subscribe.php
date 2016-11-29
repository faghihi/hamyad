<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\CrudTrait;

class Subscribe extends Model
{
    use CrudTrait;
//    use SoftDeletes;

    protected $table='subscribes';
    protected $fillable = ['email'];

    public static function boot()
    {
        parent::boot();
        Course::observe(new \App\Observers\UserActionsObserver);
    }
}
