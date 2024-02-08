<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Account;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccountRequest $request)
    {
        //
    }

    public function StoreAccountByUser(){
        $user = Auth::user();
        
        $statement = DB::select("SHOW TABLE STATUS LIKE 'accounts'");
        $nextId = $statement[0]->Auto_increment; 

        $iban = 'LT' . rand(0, 9) . rand(0, 9) . '99999' . str_pad($nextId, 10, '0', STR_PAD_LEFT);
        
        
        Account::create([
            'user_id' => $user->id,
            'iban' => $iban,
            'amount' => 0,
            'currency' => 'Eur'
        ]);
        
        return redirect()->route('user-show-accounts')->with('ok', 'New account successfully created.');
        
        // dd([$user->id, $nextId]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        //
    }

    public function showAccountsByUser(){
        $user = Auth::user();
        $accounts = Account::query();
        $accounts = $accounts->where('user_id', $user->id);
        $accounts = $accounts->get();
        return view('user.accounts', [
            'accounts' => $accounts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccountRequest $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {

    }

    
}
