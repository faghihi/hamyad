<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Hash;

/**
 * Class Admin
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $role
 */
class Admin extends Model
{
    use CrudTrait;
    use SoftDeletes;
    protected $table="admins";
    protected $fillable = ['name', 'email', 'password', 'remember_token', 'role_id'];


    /**
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        Admin::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setRoleIdAttribute($input)
    {
        $this->attributes['role_id'] = $input ? $input : null;
    }


    /**
     * @return mixed
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    /**
     * ManyToMany with Course Table
     * Pivot table is course_owners table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function course_owner()
    {
        return $this->belongsToMany('App\Course', 'course_owners')
            ->withTimestamps();
    }
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}