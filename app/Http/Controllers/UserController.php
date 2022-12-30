<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginUser(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
        return back()->withErrors("Wrong combination of Email and Password");
    }

    public function logoutUser() {
        Auth::logout();
        return redirect('/');
    }

    public function createUser(Request $request) {
        $rules = [
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'min:6',
            'confirm_password' => 'required|same:password',
            'address' => 'min:6',
            'phone' => 'min:12'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user = new User();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->role = "customer";

        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();

        $user->save();

        return redirect('/');
    }

    public function profile()
    {
        return view('profile.show');
    }

    public function editProfile()
    {
        return view('profile.edit');
    }

    public function updateProfile(Request $request, User $user)
    {
        $rules = [
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
            'email' => 'required|email:rfc,dns|unique:users,email,' . $user->id,
            'address' => 'min:6',
            'phone' => 'min:12'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;

        $user->updated_at = Carbon::now();

        $user->save();

        return redirect()->route('user.show');
    }

    public function changePassword()
    {
        return view('profile.change-password');
    }

    public function updatePassword(Request $request, User $user)
    {
        $rules = [
            'password' => 'required|min:6|confirmed'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        if($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->updated_at = Carbon::now();

        $user->save();

        return redirect()->route('user.show');
    }
}
