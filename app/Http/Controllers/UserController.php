<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator, Input, Redirect, Session;
use App\User;
use View;
use Zizaco\Entrust\EntrustRole;

class UserController extends Controller {

	/*
	* Require authenticated user
	*/
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all()->toArray();
//		return view('users.index', array('users' => $users));

		return View::make('users.index')
			->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id)->toArray();
//		return view('users.show', array('user' => $user));

		return View::make('users.show')
			->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		// Admin Role
		$admin = new Role();
		$admin->name         = 'admin';
		$admin->display_name = 'Administrator'; // optional
		$admin->description  = 'User is allowed to manage and edit other users'; // optional
		$admin->save();
		
		// Admin Area Permission
		$adminView = new Permission();
		$adminView->name         = 'admin-view';
		$adminView->display_name = 'Admin View'; // optional
		// Allow a user to...
		$adminView->description  = 'User can access Admin area'; // optional
		$adminView->save();
		
		$admin->attachPermission($adminView);
		// equivalent to $admin->perms()->sync(array($adminView->id));

		$user = User::find($id)->toArray();
		$roles = User::find($id)->hasRole('admin');
//		$roles = User::find($id)->ability(array('admin'),array('admin-view'));

		return View::make('users.edit',array('user'=>$user,'roles'=>$roles));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = User::find($id);
            $user->name       = Input::get('name');
            $user->email      = Input::get('email');
            $user->save();
            
            // attach roles
            //$roles = Input::get('admin');
            //$user->attachRoles($admin);

            // redirect
            Session::flash('message', 'Successfully updated user!');
            return Redirect::to('users');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
