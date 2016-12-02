<?php

namespace valerie;

use Illuminate\Database\Eloquent\Model;

class ProfesionalSkills extends Model
{
	/**
     * The DB table used by the model.
     *
     * @var array
     */
    protected $table = 'profesional_skills';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'skill','percent'
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
