<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
class UserController extends Controller
{
    public function index()
    {
        $users = user::all();
        return view ('users.index', compact('users'));
    }
    public function new()
    {
        return view ('users.store');
    }

    public function store(userRequest $request)
    {
        $userData = ($request->all());
        $userData´['password'] = bcrypt ($userData['password']);
        $user = new user;
        $user->create($userData);

        flash('uario cadastrado com sucesso!')->success();

        return redirect ()->route('user.index');
    }

    public function edit(user $user)
    {
        return view ('users.edit', compact('user'));
    }

    public function update(userRequest $request, $id)
    {
        $userData = ($request->all());
        
        $user = user::findOrFail($id);
        $user->update($userData);

        print ('usuario editado com sucesso!');
    }

    public function delete($id)
    {
    
        
        $user = User::findOrFail($id);
        $user->delete();

        flash('Usuário removido com sucesso!')->success();

        return redirect ()->route('user.index');
    }
}
