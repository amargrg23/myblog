<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    // Display a listing of users
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('admin.users.create');
    }

    // Store a newly created user in storage
    


    // Show the form for editing the specified user
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string',
        ]);

        // Create a new user
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        // Redirect back to the user listing page with a success message
        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    // Update the specified user in storage
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255,' . $id,
            'password' => 'required|string',
            'role' => 'required|string'
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Verify the current password
        if (!Hash::check($validated['password'], $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Password is incorrect.']);
        }

        // Update the user's name, email, and role
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role = $validated['role'];
        

        // Save the updated user information
        $user->save();

        // Redirect back to the user listing page with a success message
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }


    // Remove the specified user from storage
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}

