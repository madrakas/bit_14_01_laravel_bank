<?php
namespace App\Http\Controllers;



use App\Models\User;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(){
        return view('user.edit');
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // dd('Meeee');
        $user = Auth::user();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->email = $request['email'];
        $user->save();
        return redirect()->route('home')->with('ok', 'User updated successfully.');
    }
}