@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card mt-5">
                <div class="card-header">
                    <h4>Your accounts</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>IBAN</th>
                            <th>Amount</th>
                            <th>Curency</th>
                            <th>Actions</th>
                        </tr>
                        
                        @forelse ($accounts as $acc)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $acc->iban }}</td>
                            <td>{{ $acc->amount }}</td>
                            <td>{{ $acc-> currency}}</td>
                            <td>
                                <a class="btn btn-primary m-1" href={{ route('home', $acc) }}>View transactions</a>
                                <a class="btn btn-danger m-1" href={{ route('home', $acc) }}>Delete account</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">No accounts found.</td>
                        </tr>
                        @endforelse
                    </table>
                    <div>
                        <a href="{{ route('home') }}" class="btn btn-success">Add new account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('title', 'Your accounts')