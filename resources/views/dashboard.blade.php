@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
    <div class="justify-content-end">
        <a href="{{route('roles.assign')}}" class="btn btn-sm btn-primary mt-3 mb-3 ">Assign Permission</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h1>Manage User</h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Permission</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        @php
                            $roles = $user->roles;
                            $roleName = '';
                            if(count($roles) > 0){
                                foreach($roles as $role){
                                    $roleName = $role->name; 
                                }
                            }
                        @endphp
                        <tr>
                            <td>{{$user->email}}</td>
                            <td>{{$roleName}}</td>
                            <td>{{$roleName}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('edit.permission', $user->id)}}" class="btn btn-sm btn-primary mt-3 mb-3 me-2">Edit</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
@endsection