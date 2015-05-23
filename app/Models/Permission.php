<?php namespace App;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
}

// Admin Area Permission
$adminView = new Permission();
$adminView->name         = 'admin-view';
$adminView->display_name = 'Admin View'; // optional
// Allow a user to...
$adminView->description  = 'User can access Admin area'; // optional
$adminView->save();

$admin->attachPermission($adminView);
// equivalent to $admin->perms()->sync(array($adminView->id));