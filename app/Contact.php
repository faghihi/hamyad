<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table="contacts";
    protected $rules = array(
        'name' => 'Required|Min:3|Max:80',
        'email'     => 'Required|Between:3,64|Email',
        'message' => 'Required|Min:10'
    );

}
