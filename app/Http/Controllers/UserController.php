<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // echo "Halo bebek pintar";
        // $user = "Fiko";

        $user = User::all();

        return view('admin.user.index', [
            "user" => $user]);

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
    public function store(Request $request)
    {
        // echo "Halo bebek pintar";
        $user = new User;
        $user->name = $request->get('username');
        $user->email = $request->get('email');
        $user->password = bcrypt('password');
        $user->assignRole($request->get('roles') == 'admin' ? 'admin' : 'user');
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name')->all();

        $userRole = $user->roles->pluck('name')->all();

        return view ('admin.user.edit', compact('user','roles','userRole'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request
        $request->validate([
            'role' => 'required|exists:roles,name'
        ]);

        // Find the user
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User not found');
        }

        // Remove all existing roles
        $user->syncRoles([]);

        // Assign the new role
        $user->assignRole($request->input('role'));

        // Check if the role was successfully assigned
        if ($user->hasRole($request->input('role'))) {
            return redirect()->route('user.index')->with('success', 'User role updated successfully');
        } else {
            return redirect()->route('user.index')->with('error', 'Failed to update user role');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        if ($user){
            $user->delete();
            $user->removeRole('admin', 'user');
        }
        return redirect()->route('user.index');
    }
}
