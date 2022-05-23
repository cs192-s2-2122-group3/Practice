<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);

        // dd($users);
        return view('account-manager', [
            'users' => $users,
        ]);
    }

    public function fetch_users(Request $request)
    {
        if($request->ajax()) {
            $users = User::paginate(10);
            $html = view('account-table', compact(['users']))->render();
            return $html;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    => 'required|regex:/^[\pL\s\-]+$/u',
            'middle_name'   => 'required|regex:/^[\pL\s\-]+$/u',
            'last_name'     => 'required|regex:/^[\pL\s\-]+$/u',
            'user_name'     => 'required|alpha_num',
            'birth_date'    => 'required|date',
            'role'          => 'required',
            'email'         => 'required|unique:users',
            'password'      => 'required|alpha_num|min:8',
        ]);

        //$users = User::factory()->count(3)->create();
        $user = User::create([
            // names
            'first_name'        => $request->input('first_name'),
            'middle_name'       => $request->input('middle_name'),
            'last_name'         => $request->input('last_name'),
            'user_name'         => $request->input('user_name'),
            // additional info
            'birth_date'        => $request->date('birth_date'),
            'role'              => $request->input('role'),
            // account details
            'email'             => $request->input('email'),
            'password'          => Hash::make($request->input('password')),
            'description'       => $request->input('description'),
            'remember_token'    => Str::random(10),
        ]);

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        
        return view('/account-edit', [
            'user' => $user,
        ]);
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
        $user = User::find($id);

        $request->validate([
            'first_name'    => 'required|regex:/^[\pL\s\-]+$/u',
            'middle_name'   => 'required|regex:/^[\pL\s\-]+$/u',
            'last_name'     => 'required|regex:/^[\pL\s\-]+$/u',
            'user_name'     => 'required|alpha_num',
            'birth_date'    => 'required|date',
            'role'          => 'required',
            'email'         => [
                                'required',
                                Rule::unique('users')->ignore($user->id)
                            ],
            'password'      => 'nullable|alpha_num|min:8',
        ]);

        $user->update(array_filter($request->all()));

        if (!empty($request->input('password'))) {
            $user->update([ 'password' => Hash::make($request->input('password')) ]);
        }

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        
        return redirect('/user');
    }

    public function destroyMany(array $ids)
    {
        $user = User::whereIn('id', $ids)->delete;
        return redirect('/user');
    }
}
