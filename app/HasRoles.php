<?php 

namespace valerie;

trait HasRoles {

    /**
     * Setting the different roles a user can have.
     *
     * @var array
     */
    
    public function roles() 
    {

        return $this->belongsToMany(Role::class);

    }

    public function assignRole($role) 
    {

        return $this->roles()->save(

            Role::whereName($role)->firstOrFail()

            );

    }

    public function hasRole($role) 
    {
        if (is_string($role)) {

            return $this->role->contains('name', $role);
        }

        return !! $role->intersect($this->role)->count();
    }
    
}