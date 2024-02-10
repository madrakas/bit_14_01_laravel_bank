@extends('layouts.app')

@section('content')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Delete user profile') }}</div>
                <div class="card-body">
                    <form action="{{ route('user-destroy-account', $account) }}" method="post">
                        <div class="row mb-3">
                            <p class="card-text">Are you sure want to delete account {{$account->iban}}?</p>
                        </div>
                       
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary m-1">Delete account</button>
                                <a href="{{ route('user-show-accounts') }}" class="btn btn-danger m-1">Cancel</a>
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