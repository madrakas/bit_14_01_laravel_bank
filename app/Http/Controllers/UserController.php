<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        return redirect()->route('user-show')->with('ok', 'User updated successfully.');
    }

    public function changepw (){
        return view('user.changepw');
    }

    public function updatepw(Request $request){
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $auth = Auth::user();
 
 // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) 
        {
            return back()->with('error', "Current Password is Invalid");
        }
 
// Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) 
        {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
 
        $user =  Auth::user();
        $user->password =  Hash::make($request->new_password);
        $user->save();
        
        return redirect()->route('user-show')->with('ok', "Password Changed Successfully");
    }

    public function show(){
        return view('user.show');
    }

    public function delete(){
        return view('user.delete');
    }

    public function destroy(){
        $user = Auth::user();
        
        Auth::logout();

        if ($user->delete()) {
             return redirect()->route('home')->with("error", 'Your account has been deleted!');
        }
    }
}