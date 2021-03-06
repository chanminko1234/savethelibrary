<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create()
    {
        return view('role.create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $role = \Sentinel::getRoleRepository()->pluck('name','name');
        $roles = \Sentinel::getRoleRepository()->get();
        return view('role.index', compact('roles'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $role = \Sentinel::getRoleRepository()->createModel()->create([
            'name' => $request->input('role'),
            'slug' => $request->input('slug')
            ]);
        $role->permissions = $request->input('role_permission');
        $role->save();
        alert()->success('Congrats!', 'Role Created!');
        return redirect()->to('backend/role');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = \Sentinel::findRoleById($id);
        return view('role.view', compact('role'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = \Sentinel::findRoleById($id);
        return view('role.edit', compact('role'));
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
        $role = \Sentinel::findRoleById($id);

        $credentials = [
        'name' => $request->input('name'),
        'slug' => $request->input('slug'),
        'permissions' => $request->input('role_permission')
        ];

        $role->update($credentials);
        alert()->success('Congrats!', 'role edited!');
        return redirect()->to('backend/role');
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
        $role = \Sentinel::findRoleById($id);
        $role->delete();
        alert()->error('Notice', 'role deleted!');
        return redirect()->to('backend/role');

    }
}