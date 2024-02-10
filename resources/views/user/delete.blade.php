@extends('layouts.app')

@section('content')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Delete user profile') }}</div>
                <div class="card-body">
                    <form action="{{ route('user-destroy') }}" method="post">
                        <div class="row mb-3">
                            <p class="card-text">Are you sure want to delete your profile?</p>
                        </div>
                       
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary m-1">Delete my profile</button>
                                <a href="{{ route('user-show') }}" class="btn btn-danger m-1">Cancel</a>
                            </div>
                        </div>
                        @method('delete')
                        @csrf
                    </form>
                </div>
            </div>
        </div>

@endsection
@section('title', 'View user profile')