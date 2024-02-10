@extends('layouts.app')

@section('content')
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
                        <form action="{{ route('user-add-account') }}" method=post>
                            <button class="btn btn-success m-1" type="submit">Add account</button>
                            @csrf
                        <form>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('title', 'Your accounts')