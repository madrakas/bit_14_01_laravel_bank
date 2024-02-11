@extends('layouts.app')

@section('content')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New transaction') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('transaction-store', ) }}">
                        @csrf
                            <div class="row mb-3">
                            <label for="fromAccountId" class="col-md-4 col-form-label text-md-end">{{ __('From account') }}</label>

                            <div class="col-md-6">
                                <select class="form-select @error('fromAccountId') is-invalid @enderror" name="fromAccountId" id="fromAccountId">
                                @foreach($accounts as $acc) 
                                <option value="{{$acc->id }}">{{$acc->iban}} {{$acc->amount}} {{$acc->currency}}</option>
                                @endforeach
    
                                </select>
                                {{-- <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('name', Auth::user()->first_name) }}" required autocomplete="first_name" autofocus> --}}

                                @error('fromAccountId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="toIBAN" class="col-md-4 col-form-label text-md-end">{{ __('To account') }}</label>

                            <div class="col-md-6">
                                <input id="toIBAN" type="text" class="form-control @error('toIBAN') is-invalid @enderror" name="toIBAN" value="{{ old('toIBAN', Auth::user()->last_name) }}" required autocomplete="toIBAN">

                                @error('toIBAN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="toName" class="col-md-4 col-form-label text-md-end">{{ __('Recipient name') }}</label>

                            <div class="col-md-6">
                                <input id="toName" type="text" class="form-control @error('toName') is-invalid @enderror" name="toName" value="{{ old('toName', '') }}" required autocomplete="toName">

                                @error('toName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-end">{{ __('Amount') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount', '') }}" required autocomplete="amount">

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Transfer') }}
                                </button>
                                <a href="{{ route('user-show-accounts') }}" class="btn btn-secondary m-1">Cancel</a>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

@endsection
@section('title', 'Edit your data')