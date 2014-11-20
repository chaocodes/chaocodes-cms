<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface
{
	use UserTrait;

	protected $hidden = array('password', 'remember_token');
}