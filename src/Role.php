<?php

namespace Bunta\Roles;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    /**
     * Set timestamps off
     */
    public $timestamps = false;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

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
    protected $fillable = ['name'];

    /**
     * Get users with a certain role
     */
    public function users() {
        return $this->belongsToMany('User', 'users_roles');
    }

}
