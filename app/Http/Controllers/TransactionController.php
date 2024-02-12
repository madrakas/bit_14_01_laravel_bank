<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function viewByUser()
    {
        $user=Auth::user();
        $accounts = Account::query();
        $accounts = $accounts->where('user_id', $user->id);
        $accounts = $accounts->get();

        $transactions = [];  
        
        foreach ($accounts as $acc) {
            $from = [];
            $to = [];      

            $transactionsFrom =Transaction::query();
            $transactionsFrom = $transactionsFrom->where('fromAccountId', $acc->id); 
            $transactionsFrom = $transactionsFrom->get();
            $transactionsTo =Transaction::query();
            $transactionsTo = $transactionsTo->where('toAccountId', $acc->id);   
            $transactionsTo = $transactionsTo->get();

            foreach ($transactionsFrom as $transaction) {
                $from[] = [
                    'time' => $transaction->time,
                    'toIBAN' => $transaction->toIBAN,
                    'toName'=> $transaction->toName,
                    'amount' => $transaction->amount,
                    'currency' => 'Eur',
                ];    
            } 

            foreach ($transactionsTo as $transaction) {
                $to[] = [
                    'time' => $transaction->time,
                    'fromIBAN' => $transaction->fromIBAN,
                    'fromName'=> $transaction->fromName,
                    'amount' => $transaction->amount,
                    'currency' => 'Eur',
                ];    
            } 
            
            $transactions[]=[
                'account' => $acc->iban,
                'from' => $from,
                'to'=> $to,
            ];
        }

        return view('transactions.user', [
            'transactions' => $transactions
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $accounts = Account::query();
        $accounts = $accounts->where('user_id', $user->id);
        $accounts = $accounts->get();
        return view('transactions.create', [
            'accounts' => $accounts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreTransactionRequest $request)
    public function store(Request $request)
    {
        $time =  date("Y-m-d H:i:s");
        $riban = $request->toIBAN;
        
        $accounts = Account::query();
        $accounts = $accounts->where('id', $request->fromAccountId);
        $accounts = $accounts->get();
        $fromIBAN = $accounts[0]['iban'];
        $fromAmount = $accounts[0]['amount'];

        if ($request->amount > $fromAmount) {
            return redirect()->route('transaction-create')->with('info', "Insufficient funds in your account.");
        }
        $accounts[0]->amount -= $request->amount;
        $accounts[0]->save();

        //determine if recipients account is Bit account format
        $bankCode = substr($riban, 4, 5);
        if ($bankCode === '99999'){
            $accounts = Account::query();
            $accounts = $accounts->where('iban', $riban);
            $accounts = $accounts->get();
            if ($accounts->count() < 1) {
                return redirect()->route('transaction-create')->with('info', "Recipients account not found in BIT bank.");
            }
            $toAccountId = $accounts[0]['id'];
            $accounts[0]->amount += $request->amount;
            $accounts[0]->save();

        }else{  //if reicipient is BIT account, check if account exists
            $toAccountId = 0;
        }
        
        $user = Auth::user();
        $fromName = $user->first_name . ' ' . $user->last_name;

        Transaction::create($request->all() + [
            'time' => $time,
            'toAccountId' => $toAccountId,
            'fromIBAN' => $fromIBAN,
            'fromName' => $fromName,
            'currency' => 'Eur,'
        ]);

        return redirect()->route('user-show-accounts')->with('info', "Transaction complete.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
