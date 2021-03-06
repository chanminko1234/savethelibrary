<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \Sentinel::getUserRepository()->get();
        
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = \Sentinel::getRoleRepository()->get();
        return view('user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());

        $this->validate($request, [
            'name'      => 'required|min:4',
            'email'     => 'required|unique:users|email',
            'password'  => 'required|min:4|confirmed',
            'password_confirmation' => 'same:password',
            ]);

        $credentials = [
        'first_name'    => $request->input('name'),
        'email'         => $request->input('email'),
        'password'      => $request->input('password'),
        ];

        $user = \Sentinel::registerAndActivate($credentials);

        $role = \Sentinel::findRoleByName($request->input('role'));
        $role->users()->attach($user);
        alert()->success('Congrats!', 'User Created!');
        return redirect()->to('backend/user');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = \Sentinel::findUserById($id);
        
        return view('user.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $user = \Sentinel::findUserById($id);
       return view('user.edit',compact('user'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = \Sentinel::findById($id);

        $credentials = [
        'first_name'    => $request->input('name'),
        'email'         => $request->input('email'),
        ];

        $user = \Sentinel::update($user, $credentials);
        alert()->success('Congrats!', 'user edited!');
        return redirect()->to('backend/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = \Sentinel::findUserById($id);

        $user->delete($id);
        alert()->error('Notice', 'user deleted!');
        return redirect()->to('backend/user');
    }
}