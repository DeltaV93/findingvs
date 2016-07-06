<?php

namespace valerie;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	/**
     * The DB table used by the model.
     *
     * @var array
     */
    protected $table = 'projects';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_title','project_image','project_description',
        'project_tools','project_feedback','project_gallery', 
        'user_id'
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
