<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Mail\NewsletterMail;
use App\Models\Message;
use App\Models\Thread;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('admin')->only([
        //     'index',
        //     'create',
        //     'store',
        //     'edit',
        //     'destroy',
        //     'favorites',
        // ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(Request $request)
    {
        // User::create($request->all()); Mass assignment
        $request->validate([
            'nickname' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        $user = User::create([
            'nickname' => $request->nickname,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index')->withStatus(__('Users successfully created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     *
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     *
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     *
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nickname' => ['required', 'string', Rule::unique('users')->ignore($user->nickname, 'nickname'), 'max:255']
        ]);
        // Update user data
        $user->update($request->all());
        return redirect()->back()->withStatus(__('Users successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     *
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
    
}
