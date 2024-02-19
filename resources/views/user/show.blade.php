@extends('layouts.app')

@section('content')
        <div class="col-md-9">
            <div class="card mt-5">
                <div class="card-header">
                    <h4>View user profile</h4>
                </div>

                <div class="card-body">
                    <div class="row mb-3">
                        <h4>User name</h4>
                        <p class="card-text">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                    </div>
                    <div class="row mb-3">
                        <h4>User email</h4>
                        <p class="card-text">{{ Auth::user()->email }}</p>
                    </div>
                    @if (Auth::user()->isadmin)
                    <div class="row mb-3">
                        <h4>User is administrator</h4>
                        <p class="card-text">Note: This user has administrator rights.</p>
                    </div>
                    @endif
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-2">
                            <a href="{{ route('user-edit') }}" class="btn btn-primary m-1">Edit user</a>
                            <a href="{{ route('user-changepw') }}" class="btn btn-success m-1">Change user password</a>
                            <a href="{{ route('user-delete') }}" class="btn btn-danger m-1">Delete user</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('title', 'View user profile')