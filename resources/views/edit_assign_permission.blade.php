@extends('layouts.master')
@section('title', 'Login')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Assign Role and Permission</h4>
    </div>
    <div class="card-body">
    <form action="{{ route('update.role.permission') }}" method="POST" id="update-permission">
        @csrf
        <div class="col-md-6">
            <label for="user">User</label>
            <select class="form-control" name="user_id">
                <option value="">Select user</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{$user->id == $id ? 'selected' : ''}}>{{ ucfirst($user->name) }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="role">Role</label>
            <select class="form-control"  name="role_id">
                <option value="">Select role</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}" {{in_array($role->id, $userHasRole) ? 'selected' : ''}}>{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="role">Permission</label>
            <select class="form-control"  name="permission_id">
                <option value="">Select permission</option>
                @foreach($permissions as $permission)
                    <option value="{{ $permission->id }}" {{in_array($role->id, $userHasPermission) ? 'selected' : ''}}>{{ ucfirst(str_replace('_',' ', $permission->name)) }}</option>
                @endforeach
            </select>
        </div>
        <button type="button" id="updatePermission" class="btn btn-sm btn-primary mt-3">Assign</button>
    </form>
    </div>
</div>
    
    
@endsection