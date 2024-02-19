
@extends('layouts.app')

@section('content')
        <div class="col-md-9">
            <div class="card mt-5">
                <div class="card-header">
                    <h4>Transaction history</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                    @forelse ($transactions as $tr)
                    <thead class="thead-dark">
                        <tr>
                            <th colspan=5>{{$tr['account']}}</th>
                        </tr>
                    </thead>
                        @if (count($tr['from']) > 0)
                        <thead class="thead-light">
                        <tr><td colspan=5>Sent</td></tr>
                    
                            <tr>
                                <th>#</th>
                                <th>Recipient IBAN</th>
                                <th>Recipient name</th>
                                <th>Amount</th>
                                <th>Curency</th>
                                
                            </tr>
                        </thead>
                        
                            @foreach ($tr['from'] as $trfrom)
                            
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $trfrom['toIBAN'] }}</td>
                                    <td>{{ $trfrom['toName'] }}</td>
                                    <td>{{ $trfrom['amount'] }}</td>
                                    <td>{{ $trfrom['currency'] }}</td>
                                </tr>
                            @endforeach
                        
                        @endif

                        @if (count($tr['to']) > 0)
                            <thead class="thead-light">
                            <tr><th colspan=5>Received</th></tr>
                            <tr>
                                <th>#</th>
                                <th>Sender IBAN</th>
                                <th>Sender name</th>
                                <th>Amount</th>
                                <th>Curency</th>
                            </tr>
                            </thead>
                            @foreach ($tr['to'] as $trto)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $trto['fromIBAN'] }}</td>
                                    <td>{{ $trto['fromName'] }}</td>
                                    <td>{{ $trto['amount'] }}</td>
                                    <td>{{ $trto['currency']}}</td>
                                </tr>
                            @endforeach
                        @endif
                        
                        
                    @empty
                        <tr>
                            <td colspan="5">No accounts found.</td>
                        </tr>
                    @endforelse
                    </table>
                </div>
            </div>
        </div>

@endsection

@section('title', 'Your accounts')


