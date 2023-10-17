<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Teacher
 *
 * @property $id
 * @property $name
 * @property $specialization
 * @property $email
 * @property $hireDate
 * @property $rank
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Teacher extends Model
{
    
    static $rules = [
		'name' => 'required',
		'specialization' => 'required',
		'email' => 'required',
		'hireDate' => 'required',
		'rank' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','specialization','email','hireDate','rank'];



}
