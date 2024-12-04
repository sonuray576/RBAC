<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\Permission;
use App\Http\Requests\PermissionRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function assignePermission(){
        $users = User::with('roles')->get();
        $roles = Role::get();
        $permissions = Permission::get();
        return view('assign_permission',compact('users','roles','permissions'));
    }

    public function storeRolePermission(PermissionRequest $request){

        $input = $request->except(['_token']);
        $user = User::assignRolePermission($input);

        if($user){
            return response()->json([
                "status" => true, 
                "redirectUrl"=> url('dashboard'),
                "message" => 'Permission has been assigned successfully.'
            ]);
        }else{
            return response()->json([
                "status" => false,
                "message" => 'Something wents wrong.'
            ]);
        }
        
    }

    public function editPermission($id){
        $users = User::get();
        $roleUser = RoleUser::where('user_id', $id)->get();
        $userHasRole = $roleUser->pluck('role_id')->toArray();
        $userHasPermission = $roleUser->pluck('permission_id')->toArray();
        $roles = Role::get();
        $permissions = Permission::get();
        return view('edit_assign_permission',compact('id','users','roles','permissions','userHasRole','userHasPermission'));
    }

    public function updateRolePermission(PermissionRequest $request){

        $input = $request->except(['_token']);
        $user = User::updateRolePermission($input);
        
        if($user){
            return response()->json([
                "status" => true, 
                "redirectUrl"=> url('dashboard'),
                "message" => 'Permission has been assigned successfully.'
            ]);
        }else{
            return response()->json([
                "status" => false,
                "message" => 'Something wents wrong.'
            ]);
        }
        
    }
}
