<?php

namespace valerie;

use Illuminate\Database\Eloquent\Model;

class PersonalSkills extends Model
{
	/**
     * The DB table used by the model.
     *
     * @var array
     */
    protected $table = 'personal_skills';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'skill','img'
    ];

    /**
     * The attributes that a project can have one user.
     *
     * @var array
     */
    public function user() 
    {
        return $this->belongsTo('Valerie\User');
    }
}
