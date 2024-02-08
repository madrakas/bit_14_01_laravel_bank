@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View user profile') }}</div>
                <div class="card-body">
                    <div class="row mb-3">
                        <h4>User name</h4>
                        <p class="card-text">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                    </div>
                    <div class="row mb-3">
                        <h4>User email</h4>
                        <p class="card-text">{{ Auth::user()->email }}</p>
                    </div>
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
    </div>
</div>
@endsection
@section('title', 'View user profile')