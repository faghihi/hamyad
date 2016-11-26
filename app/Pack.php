<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pack extends Model
{
    use SoftDeletes;

    protected $table='packs';
    protected $fillable = ['title' ,'price_day','price_month','price_year','image'];

    /**
     * @return void
     */
    public static function boot()

    {
        parent::boot();
        Course::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Foreign key with Category table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    /**
     * Foreign key with TV table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function takes()
    {
        return $this->belongsToMany('App\User', 'takepack')
            ->withPivot('start','end','paid','discount_used')
            ->withTimestamps();
    }
}
