<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use App\Role;
use App\Role_User;
use App\Permission_Role;

class PermisoController extends Controller
{
    //
    public function index()
    {
    	$roles = Role::all();
    	$roles_user = Role_User::all();
    	$permissions = Permission::all();
    	$permissions_role = Permission_Role::all();
    	return view('Permisos.index', compact('roles', 'permissions'));
    }
}
