<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'service_providers';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['last_name', 'first_name', 'category_id', 'address', 'contact_number', 'email', 'password', 'status', 'description', 'request_status'];
    public $timestamps = false;
    
}
