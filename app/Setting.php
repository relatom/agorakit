<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Setting extends Model {



	protected $fillable = ['name', 'value'];
	protected $rules = [
		'name' => 'required',
		'value' => 'required',
	];

	public $timestamps = true;
	protected $dates = ['deleted_at'];



}