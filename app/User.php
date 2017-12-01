<?php

namespace App;
//use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\customforgotnotif as ResetPasswordNotification;
use Hash;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $role
 * @property string $remember_token
 */

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;


    protected $table='users';
    protected $fillable = ['name', 'email', 'password', 'remember_token', 'role_id','image','api_token'];

    /**
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        User::observe(new \App\Observers\UserActionsObserver);
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
     * ManyToMany with Section Table
     * Pivot table is favorite_sections table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function fav_sections()
    {
        return $this->belongsToMany('App\Section', 'favorite_sections')
            ->withTimestamps();
    }

    public function bookmarks()
    {
        return $this->belongsToMany('App\Course', 'bookmarks')
            ->withTimestamps();
    }

    /**
     * ManyToMany with Course Table
     * Pivot table is certificate table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function courses_certificate()
    {
        return $this->belongsToMany('App\Course', 'certificate')
            ->withPivot('point','description')
            ->withTimestamps();
    }

    /**
     * ManyToMany with Course Table
     * Pivot table is take table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function courses_take()
    {
        return $this->belongsToMany('App\Course', 'take')
            ->withPivot('paid','discount_used')
            ->withTimestamps();
    }
    public function pack_take()
    {
        return $this->belongsToMany('App\Pack', 'takepack')
            ->withPivot('start','end','paid','discount_used')
            ->withTimestamps();
    }

    /**
     * ManyToMany with Course Table
     * Pivot table is courses_rates table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function courses_rate()
    {
        return $this->belongsToMany('App\Course', 'course_rates')
            ->wherePivot('rate')
            ->withTimestamps();
    }
    /**
     * ManyToMany with Section Table
     * Pivot table is section_rate table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sections_rate()
    {
        return $this->belongsToMany('App\Section', 'section_rates')
            ->withPivot('rate')
            ->withTimestamps();
    }


    public function teachers_rate()
    {
        return $this->belongsToMany('App\Teacher', 'teacher_rates')
            ->withPivot('rate')
            ->withTimestamps();
    }

    public function finance()
    {
        return $this->hasOne('App\UserFinance');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function likes()
    {
        return $this->belongsToMany('App\Course', 'courses_likes','user_id','course_id')
            ->withTimestamps();
    }

    public function courses_process()
    {
        return $this->belongsToMany('App\Course', 'courses_pass')
            ->withPivot('section_passed','closed')
            ->withTimestamps();
    }



}