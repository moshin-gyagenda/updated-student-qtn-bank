<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.login');
    }


    public function register()
    {
        return view('dashboard.register');
    }


    public function login(Request $request)
    {
        if (!Auth::attempt(['email' => $request->input('email_or_username'), 'password' => $request->input('password')]) 
            && !Auth::attempt(['username' => $request->input('email_or_username'), 'password' => $request->input('password')])) {
            return redirect()->back()->with('error', 'Username and password incorrect!');
        }

        $user = User::where('email', $request->input('email_or_username'))
             ->orWhere('username', $request->input('email_or_username'))
             ->first();

         
            return redirect()->route('dashboard');
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Create a new user
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->password = Hash::make($request->input('password'));

        // Save the user
        if ($user->save()) {
            return redirect()->back()->with('success', 'User registered successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to register user!');
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user()
    {

        return view('dashboard/create-user');
    }

    public function show()
    {
        $users=User::all();
        return view('dashboard/view-users', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
        
    }
}
