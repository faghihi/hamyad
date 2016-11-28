<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\CRUD\CrudTrait;

class Discount extends Model
{
    use CrudTrait;
    use SoftDeletes;
    protected $table="discount";

    protected $fillable=['code','type','value','count'];

    public static function boot()
    {
        parent::boot();
        Course::observe(new \App\Observers\UserActionsObserver);
    }

}
