@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user-updatepw') }}">
                        @csrf
                        @method('put')

                       <div class="row mb-3">
                            <label for="current_password" class="col-md-4 col-form-label text-md-end">{{ __('Current password') }}</label>

                            <div class="col-md-6">
                                <input id="current_ password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('New password') }}</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control @error('password') is-invalid @enderror" name="new_password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm new password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="new_password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Change password') }}
                                </button>
                                <a href="{{ route('user-show') }}" class="btn btn-secondary m-1">Cancel</a>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title', 'Change your password')