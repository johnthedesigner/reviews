<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	// Use Role Class to create new User Roles
}

// Admin Role
$admin = new Role();
$admin->name         = 'admin';
$admin->display_name = 'Administrator'; // optional
$admin->description  = 'User is allowed to manage and edit other users'; // optional
$admin->save();