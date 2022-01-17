<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property $id
 * @property $document
 * @property $first_name
 * @property $last_name
 * @property $mobile
 * @property $email
 * @property $address
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{
    
    static $rules = [
		'document' => 'required|min:10|max:10|regex:/^[0-9]+$/',
		'first_name' => 'required|alpha',
		'last_name' => 'required|alpha',
		'mobile' => 'required|min:10|max:10|regex:/^[0-9]+$/',
		'email' => 'email|required',
		'address' => 'required',
    'document.required' => 'Gafaf',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['document','first_name','last_name','mobile','email','address'];



}
