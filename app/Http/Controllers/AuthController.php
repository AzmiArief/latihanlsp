<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Hash;
use Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     //proses login
    public function login(Request $request)
    {
        $rules = array(
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        );

        $cek = Validator::make($request->all(), $rules);

        if($cek->fails()){
            $errorString = implode(",", $cek -> messages()->all());
            return redirect()->route('login')->with('warning', $errorString);
        } else {
            if (Auth::attempt($request->only('email', 'password'))) {
                $user = User::where('email', $request->email)->first();
                $roles = $user->getRoleNames();
                if($roles[0] == 'admin'){
                    return redirect()->route('dashboard');
                } else {
                    return redirect()->route('dashboardUser');
                }
            } else {
                return redirect()->route('login')->with('warning',"Email / Password anda salah");
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
